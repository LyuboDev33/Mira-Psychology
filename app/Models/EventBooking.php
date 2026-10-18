<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventBooking extends Model
{
    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
    ];

    /**
     * Each booking belongs to one event.
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
