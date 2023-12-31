<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    
    public function clothes()   
    {
        return $this->hasMany(Cloth::class);  
    }
    
    public function posts()
    {
        return $this->hasMany(Coordinate::class);
    }
}
