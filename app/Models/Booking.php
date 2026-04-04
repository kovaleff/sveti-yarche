<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = ['name', 'phone', 'id_service', 'booking_date'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
