<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloth;

class ClothController extends Controller
{
        public function index(Cloth $cloth)//インポートしたClothをインスタンス化して$clothとして使用。
    {
        return $cloth->get();//$clothの中身を戻り値にする。
    }
}
