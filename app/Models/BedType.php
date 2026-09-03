<?php

namespace App\Models;

use Database\Factories\BedTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]
class BedType extends Model
{
    /** @use HasFactory<BedTypeFactory> */
    use HasFactory;
}
