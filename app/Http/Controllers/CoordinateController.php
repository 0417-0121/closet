<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooridinate;

class CoordinateController extends Controller
{
      public function index(Coordinate $coordinate)//インポートしたCoordinateをインスタンス化して$coordinateとして使用。
    {
        return $coordinate->get();//$coordinateの中身を戻り値にする。
    }  
}
