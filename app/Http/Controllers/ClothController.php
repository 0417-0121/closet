<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloth;

class ClothController extends Controller
{
        public function index(Cloth $cloth)//インポートしたClothをインスタンス化して$clothとして使用。
    {
        return view('clothes.index')->with(['clothes' => $cloth->get()]);  
       //blade内で使う変数'clothes'と設定。'clothes'の中身にgetを使い、インスタンス化した$clothを代入。
    }
}
