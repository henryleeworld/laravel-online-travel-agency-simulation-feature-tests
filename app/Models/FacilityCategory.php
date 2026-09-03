<?php

namespace App\Models;

use Database\Factories\FacilityCategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class FacilityCategory extends Model
{
    /** @use HasFactory<FacilityCategoryFactory> */
    use HasFactory;

    /**
     * Get the facilities for the facility category.
     */
    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class, 'category_id');
    }
}
