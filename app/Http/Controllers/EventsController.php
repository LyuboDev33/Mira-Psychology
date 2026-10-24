<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventBookingStoreRequest;
use App\Mail\ConfirmBookingMail;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class EventsController extends Controller
{
    /**
     * Display all active events.
     */
    public function index(): View
    {
        $events = Event::query()
            ->where('is_active', true)
            ->withCount('bookings')
            ->orderBy('starts_at', 'asc')
            ->get();

        return view('Frontend.Events.Index', [
            'events' => $events,
        ]);
    }

    /**
     * Display a specific event.
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $event = Event::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->withCount('bookings')
            ->firstOrFail();

        $availablePlaces = max(0, $event->capacity - $event->bookings_count);

        $canBook = $event->ends_at->isFuture() && $availablePlaces > 0;

        return view('Frontend.Events.Show', [
            'event' => $event,
            'availablePlaces' => $availablePlaces,
            'canBook' => $canBook,
        ]);
    }




    /**
     * Store a new event booking via AJAX.
     *
     * @param EventBookingStoreRequest $request
     * @param string $slug
     * @return JsonResponse
     */

    public function store(EventBookingStoreRequest $request, string $slug): JsonResponse
    {
        $validated = $request->validated();

        $result = DB::transaction(function () use ($slug, $validated) {

            $event = Event::query()
                ->where('slug', $slug)
                ->where('is_active', true)
                ->lockForUpdate()
                ->firstOrFail();

            // Bookings are allowed until the event ends.
            if ($event->ends_at->isPast()) {
                throw ValidationException::withMessages([
                    'booking' => 'Записването за това събитие е приключило.',
                ]);
            }

            // Check capacity.
            $bookingsCount = $event->bookings()->count();

            if ($bookingsCount >= $event->capacity) {
                throw ValidationException::withMessages([
                    'booking' => 'За съжаление всички места за това събитие са заети.',
                ]);
            }

            // Prevent duplicate registrations.
            if ($event->bookings()->where('email', $validated['email'])->exists()) {
                throw ValidationException::withMessages([
                    'email' => 'Вече има записване за това събитие с този имейл адрес.',
                ]);
            }

            // Save booking.
            $event->bookings()->create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ]);

            return [
                'event' => $event,
                'available_places' => max(0, $event->capacity - ($bookingsCount + 1)),
            ];
        });

        // Send confirmation email after successful booking.
        try {
            Mail::to($validated['email'])->send(new ConfirmBookingMail($validated, $result['event']));
            
        } catch (\Throwable $exception) {
            Log::error('Failed to send event booking confirmation email.', [
                'event_id' => $result['event']->id,
                'error' => $exception->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Успешно се записахте за събитието!',
            'available_places' => $result['available_places'],
        ], 201);
    }
}
