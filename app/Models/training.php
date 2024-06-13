<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    use HasFactory;

    protected $fillable= [
        'title',
        'description',
        'image_url',
        'start_date',
        'end_date',
    ];
}
