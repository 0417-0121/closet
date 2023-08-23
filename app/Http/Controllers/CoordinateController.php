<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinate;

class CoordinateController extends Controller
{
      public function index(Coordinate $coordinate)//インポートしたCoordinateをインスタンス化して$coordinateとして使用。
    {
        return view('coordinates.index')->with(['coordinates' => $coordinate->get()]);//$coordinateの中身を戻り値にする。
    }  //blade内で使う変数'coordinates'と設定。'coordinates'の中身にgetを使い、インスタンス化した$coordinateを代入。
}
?>　　　
