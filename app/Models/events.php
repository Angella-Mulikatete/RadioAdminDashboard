<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'image_url',
        'booking_url',
        'location',
        'start_date',
        'end_date',
    ];
}
