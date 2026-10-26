<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /** Return the welcome route  */
   public function welcome()
{
    $events = Event::query()
        ->where('is_active', true)
        ->withCount('bookings')
        ->orderBy('starts_at')
        ->get();

    $event = $events->first();

    $availablePlaces = $event
        ? max(0, $event->capacity - $event->bookings_count)
        : 0;

    $canBook = $event
        && $event->ends_at->isFuture()
        && $availablePlaces > 0;

    return view('Frontend.welcome', compact(
        'events',
        'availablePlaces',
        'canBook'
    ));
}

    /** Return the about route */
    public function about()
    {
        return view('Frontend.about');
    }

    /** Show the services */
    public function services()
    {
        return view('Frontend.services');
    }

    /** Show the services */
    public function contact()
    {
        return view('Frontend.contact');
    }
}
