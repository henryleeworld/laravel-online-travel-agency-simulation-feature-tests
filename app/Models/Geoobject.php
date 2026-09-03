<?php

namespace App\Models;

use Database\Factories\GeoobjectFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['city_id', 'name', 'lat', 'long'])]
class Geoobject extends Model
{
    /** @use HasFactory<GeoobjectFactory> */
    use HasFactory;
}
