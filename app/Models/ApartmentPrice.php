<?php

namespace App\Models;

use App\Traits\ValidForRange;
use Database\Factories\ApartmentPriceFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['apartment_id', 'start_date', 'end_date', 'price'])]
class ApartmentPrice extends Model
{
    /** @use HasFactory<ApartmentPriceFactory> */
    use HasFactory, ValidForRange;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }
}
