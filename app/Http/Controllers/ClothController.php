<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloth;
use Illuminate\Support\Facades\Auth;

class ClothController extends Controller
{
        public function index(Cloth $cloth)//インポートしたClothをインスタンス化して$clothとして使用。
    {
        return view('clothes.index')->with(['clothes' => $cloth->getPaginateByLimit()]);//$clothの中身を戻り値にする。
    }  //blade内で使う変数'clothes'と設定。'clothes'の中身にgetを使い、インスタンス化した$clothを代入。
    
        public function create()
    {
        return view('clothes.create');
    }
        public function show(Cloth $cloth)
    {
        return view('clothes.show')->with(['cloth' => $cloth]);
    }

        public function store(Request $request, Cloth $cloth)
    {
        $input = $request['cloth'];
        // cloth配列にuser_idを追加
        $input['user_id'] = Auth::id();
        $cloth->fill($input)->save();
        
        return redirect('/clothes/' . $cloth->id);
    }
    
        public function __construct()
    {
        $this->middleware('auth'); // ログインしていない場合はログインページにリダイレクトする
            
    }
        public function showUser()
    {  
            // ログインしているユーザーのidを取得
        $user_id = Auth::id();
            // ユーザーのidをビューに渡す
        return view('user', ['user_id' => $user_id]);
    }
}
