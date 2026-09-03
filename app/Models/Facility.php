<?php

namespace App\Models;

use Database\Factories\FacilityFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['category_id', 'name'])]
class Facility extends Model
{
    /** @use HasFactory<FacilityFactory> */
    use HasFactory;

    /**
     * Get the category that owns the facility.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(FacilityCategory::class, 'category_id');
    }

    /**
     * The properties that belong to the facility.
     */
    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class);
    }
}
