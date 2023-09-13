<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinates_image extends Model
{
    use HasFactory;
    protected $fillable = [
            'user_id',
            'cloth_id',
            'image_url'
        ];
}
