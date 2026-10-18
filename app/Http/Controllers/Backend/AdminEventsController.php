<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class AdminEventsController extends Controller
{
    /** Show all events */
    public function index()
    {
        return view('Backend.Events.Index', [
            'events' =>   Event::get()
        ]);
    }

    /** Show the create view */
    public function create()
    {
        return view('Backend.Events.Create');
    }

    /** Show a specific event
     *
     *  @param string $slug
     *  @return View
     */
    public function show(string $slug)
    {
        $event = Event::with('bookings')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('Backend.Events.Show', [
            'event' => $event
        ]);
    }

    /**
     * Create an event.
     *
     * @param EventStoreRequest $request
     * @return RedirectResponse
     */
    public function store(EventStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['title']);

        $image = $request->file('image');
        $filename = time() . '_' . uniqid() . '.' . $image->extension();

        $validated['image'] = $filename;

        $destination = public_path('assets/images/events');

        DB::beginTransaction();

        try {
            Event::create($validated);

            if (!is_dir($destination)) {
                mkdir($destination, 0755, true);
            }

            $image->move($destination, $filename);

            DB::commit();

            return redirect()
                ->route('admin.events.index')
                ->with('success', 'Събитието беше създадено успешно!');
        } catch (\Throwable $e) {
            DB::rollBack();

            $imagePath = $destination . '/' . $filename;

            if (is_file($imagePath)) {
                unlink($imagePath);
            }

            throw $e;
        }
    }

    /**
     * Update an existing event.
     *
     * @param EventUpdateRequest $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function update(EventUpdateRequest $request, string $slug): RedirectResponse
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        $validated = $request->validated();

        $validated['slug'] = Str::slug($validated['title']);

        unset($validated['image']);

        $destination = public_path('assets/images/events');

        $oldImage = $event->image;
        $newFilename = null;

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');

                $newFilename = time() . '_' . uniqid() . '.' . $image->extension();

                if (!is_dir($destination)) {
                    if (!mkdir($destination, 0755, true) && !is_dir($destination)) {
                        throw new \RuntimeException('Неуспешно създаване на директорията за снимки.');
                    }
                }

                $image->move($destination, $newFilename);

                $validated['image'] = $newFilename;
            }

            DB::transaction(function () use ($event, $validated) {
                $event->update($validated);
            });

            if ($newFilename && $oldImage && $oldImage !== $newFilename) {
                $oldImagePath = $destination . '/' . basename($oldImage);

                if (is_file($oldImagePath)) {
                    @unlink($oldImagePath);
                }
            }

            return back()->with('success', 'Събитието беше обновено успешно!');

        } catch (\Throwable $e) {

            if ($newFilename) {
                $newImagePath = $destination . '/' . $newFilename;

                if (is_file($newImagePath)) {
                    @unlink($newImagePath);
                }
            }

            throw $e;
        }
    }
}
