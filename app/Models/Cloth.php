<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cloth extends Model
{
      use SoftDeletes;
      protected $table = 'clothes';
      
      protected $fillable = [
            'user_id',
            'image_url',
            'temperature_id',
            'category_id',
            'color_id',
            'comment',
            'favorite'
        ];
      
        public function getPaginateByLimit(int $limit_count = 10)
    {
            // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('temperature','category', 'color')->orderBy('updated_at', 'DESC')->paginate($limit_count);
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
