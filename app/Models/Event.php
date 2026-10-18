<?php

namespace App\Models;

use App\Models\EventBooking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'location',
        'image',
        'capacity',
        'host',
        'starts_at',
        'ends_at',
        'duration',
        'price',
        'type',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'capacity' => 'integer',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'duration' => 'integer',
            'price' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    /**
     * One event can have many bookings.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(EventBooking::class);
    }
}
