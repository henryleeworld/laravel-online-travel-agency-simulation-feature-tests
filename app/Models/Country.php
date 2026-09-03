<?php

namespace App\Models;

use Database\Factories\CountryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'lat', 'long'])]
class Country extends Model
{
    /** @use HasFactory<CountryFactory> */
    use HasFactory;

    /**
     * Get the cities for the country.
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
