<?php

namespace App\Models;

use Database\Factories\RoomFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['apartment_id', 'room_type_id', 'name'])]
class Room extends Model
{
    /** @use HasFactory<RoomFactory> */
    use HasFactory;

    /**
     * Get the room type that owns the room.
     */
    public function room_type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    /**
     * Get the beds for the room.
     */
    public function beds(): HasMany
    {
        return $this->hasMany(Bed::class);
    }
}
