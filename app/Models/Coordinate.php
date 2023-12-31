<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use HasFactory;
    use SoftDeletes;
    
        protected $fillable = [
            'user_id',
            'wear_cloth',
        ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function clothes()
    {
        return $this->belongsToMany(Cloth::class);
    }
    
    public function temperature()
    {
        return $this->belongsTo(Temperature::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

}