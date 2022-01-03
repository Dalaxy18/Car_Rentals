<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer',
        'id_car',
        'Date_reservation',
        'Date_return',
    ];

public $timestamps = false;
}
