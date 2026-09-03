<?php

namespace App\Models;

use Database\Factories\BookingGuestFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['booking_id', 'first_name', 'last_name', 'birth_date'])]
class BookingGuest extends Model
{
    /** @use HasFactory<BookingGuestFactory> */
    use HasFactory;
}
