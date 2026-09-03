<?php

namespace App\Models;

use Database\Factories\RoomTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]
class RoomType extends Model
{
    /** @use HasFactory<RoomTypeFactory> */
    use HasFactory;
}
