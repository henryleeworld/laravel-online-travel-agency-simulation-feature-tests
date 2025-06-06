<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Apartment extends Model
{
    /** @use HasFactory<\Database\Factories\ApartmentFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'property_id',
        'apartment_type_id',
        'name',
        'capacity_adults',
        'capacity_children',
        'size',
        'bathrooms',
        'wheelchair_access',
        'pets_allowed',
        'smoking_allowed',
        'free_cancellation',
        'all_day_access'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'wheelchair_access' => 'boolean',
            'pets_allowed' => 'boolean',
            'smoking_allowed' => 'boolean',
            'free_cancellation' => 'boolean',
            'all_day_access' => 'boolean'
        ];
    }

    /**
     * Get the property that owns the apartment.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * Get the apartment type that owns the apartment.
     */
    public function apartment_type(): BelongsTo
    {
        return $this->belongsTo(ApartmentType::class);
    }

    /**
     * Get the rooms for the apartment.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Get all of the beds for the apartment.
     */
    public function beds(): HasManyThrough
    {
        return $this->hasManyThrough(Bed::class, Room::class);
    }

    /**
     * Get the apartment's beds list.
     */
    public function bedsList(): Attribute
    {
        $allBeds = $this->beds;
        $bedsByType = $allBeds->groupBy('bed_type.name');
        $bedsList = '';
        if ($bedsByType->count() == 1) {
            $bedsList = $allBeds->count() . ' ' . str($bedsByType->keys()[0])->plural($allBeds->count());
        } else if ($bedsByType->count() > 1) {
            $bedsList = $allBeds->count() . ' ' . str('bed')->plural($allBeds->count());
            $bedsListArray = [];
            foreach ($bedsByType as $bedType => $beds) {
                $bedsListArray[] = $beds->count() . ' ' . str($bedType)->plural($beds->count());
            }
            $bedsList .= ' ('.implode(', ' , $bedsListArray) .')';
        }

        return new Attribute(
            get: fn () => $bedsList
        );
    }

    /**
     * The facilities that belong to the apartment.
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class);
    }

    /**
     * Get the prices for the apartment.
     */
    public function prices()
    {
        return $this->hasMany(ApartmentPrice::class);
    }

    /**
     * Get the bookings for the apartment.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
