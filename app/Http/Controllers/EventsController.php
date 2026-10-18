<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventBookingStoreRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
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
     * Store a guest booking for an event.
     *
     * @param EventBookingStoreRequest $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function store(EventBookingStoreRequest $request, string $slug): RedirectResponse
    {

        $validated = $request->validated();

        DB::transaction(function () use ($slug, $validated) {

            $event = Event::query()
                ->where('slug', $slug)
                ->where('is_active', true)
                ->lockForUpdate()
                ->firstOrFail();

            /*
             * Prevent bookings for events that have already started.
             */
            if ($event->ends_at->isPast()) {
                throw ValidationException::withMessages([
                    'booking' => 'Записването за това събитие е приключило.',
                ]);
            }


            $bookingsCount = $event->bookings()->count();

            if ($bookingsCount >= $event->capacity) {
                throw ValidationException::withMessages([
                    'booking' => 'За съжаление всички места за това събитие са заети.',
                ]);
            }

            $alreadyBooked = $event->bookings()
                ->where('email', $validated['email'])
                ->exists();

            if ($alreadyBooked) {
                throw ValidationException::withMessages([
                    'email' => 'Вече има записване за това събитие с този имейл адрес.',
                ]);
            }

            $event->bookings()->create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ]);
        });

        return redirect()
            ->route('events.show', $slug)
            ->with('success', 'Успешно се записахте за събитието!');
    }
}
