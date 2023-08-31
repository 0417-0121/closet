<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cloth extends Model
{
      protected $table = 'clothes';
      
      protected $fillable = [
            'user_id',
            'temp_id',
            'category_id',
            'color_id',
            'comment'
        ];
      
     public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
