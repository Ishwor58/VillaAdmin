<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule_visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'pnumber',
        'purpose_of_visit',
        'date',
        'time',
        'message',
    ];
}
