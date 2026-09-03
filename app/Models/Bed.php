<?php

namespace App\Models;

use Database\Factories\BedFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['room_id', 'bed_type_id', 'name'])]
class Bed extends Model
{
    /** @use HasFactory<BedFactory> */
    use HasFactory;

    /**
     * Get the room that owns the bed.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * Get the bed type that owns the bed.
     */
    public function bed_type(): BelongsTo
    {
        return $this->belongsTo(BedType::class);
    }
}
