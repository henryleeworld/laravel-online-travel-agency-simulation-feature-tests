<?php

namespace App\Models;

use App\Observers\BookingObserver;
use App\Traits\ValidForRange;
use Database\Factories\BookingFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['apartment_id', 'user_id', 'start_date', 'end_date', 'guests_adults', 'guests_children', 'total_price', 'rating', 'review_comment',])]
#[ObservedBy([BookingObserver::class])]
class Booking extends Model
{
    /** @use HasFactory<BookingFactory> */
    use HasFactory, SoftDeletes, ValidForRange;

    /**
     * Get the apartment that owns the booking.
     */
    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }

    /**
     * Get the guests for the booking.
     */
    public function guests(): HasMany
    {
        return $this->hasMany(BookingGuest::class);
    }
}
