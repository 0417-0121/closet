<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index(Color $color)//インポートしたColorをインスタンス化して$categorytとして使用。
    {
        return $color->get();//$colorの中身を戻り値にする。
    }
}
