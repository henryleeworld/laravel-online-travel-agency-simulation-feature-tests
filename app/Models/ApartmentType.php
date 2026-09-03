<?php

namespace App\Models;

use Database\Factories\ApartmentTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name'])]
class ApartmentType extends Model
{
    /** @use HasFactory<ApartmentTypeFactory> */
    use HasFactory;
}
