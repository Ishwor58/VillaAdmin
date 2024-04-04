<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Best_deal extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'total_flat_space',
        'floor_number',
        'number_of_rooms',
        'parking_available',
        'payment_process',
        'additional_info',
        'img',
    ];
}
