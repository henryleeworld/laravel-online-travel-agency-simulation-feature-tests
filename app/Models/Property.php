<?php

namespace App\Models;

use App\Observers\PropertyObserver;
use Database\Factories\PropertyFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

#[Fillable(['owner_id', 'name', 'city_id', 'address_street', 'address_postcode', 'lat', 'long', 'bookings_avg_rating',])]
#[ObservedBy([PropertyObserver::class])]
class Property extends Model implements HasMedia
{
    /** @use HasFactory<PropertyFactory> */
    use HasFactory, InteractsWithMedia;

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumbnail')
            ->width(800);
    }

    /**
     * Get the city that owns the property.
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get all of the apartments for the property.
     */
    public function apartments(): HasMany
    {
        return $this->hasMany(Apartment::class);
    }

    /**
     * Get the property's address.
     */
    public function address(): Attribute
    {
        return new Attribute(
            get: fn () => $this->address_street .', ' . $this->address_postcode . ', ' . $this->city->name
        );
    }

    /**
     * The facilities that belong to the property.
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class);
    }

    /**
     * Get all of the bookings for the property.
     */
    public function bookings(): HasManyThrough
    {
        return $this->hasManyThrough(Booking::class, Apartment::class);
    }
}
