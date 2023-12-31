<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    use HasFactory;
    
    public function clothes()
    {
        return $this->hasMany(Cloth::class);
    }
    
    public function Coordinates()
    {
        return $this->hasMany(Coordinate::class);
    }
}
