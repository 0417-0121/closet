<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinate;
use App\Http\Requests\CoordinateRequest;
use Auth;
use Cloudinary;

class CoordinateController extends Controller
{
      public function index(Coordinate $coordinate)//インポートしたCoordinateをインスタンス化して$coordinateとして使用。
    {
        return view('coordinates.index')->with(['coordinates' => $coordinate->getPaginateByLimit()]);//$coordinateの中身を戻り値にする。
    }  //blade内で使う変数'coordinates'と設定。'coordinates'の中身にgetを使い、インスタンス化した$coordinateを代入。

        public function show(Coordinate $coordinate)
    {
        return view('coordinates.show')->with(['coordinate' => $coordinate]);
    }
    
        public function create()
    {
        return view('coordinates.create');
    }
    
    public function store(Request $request, Coordinate $coordinate)
    {   
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $img_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input = $request['coordinate'];
        $input += ['img_url' => $img_url];
        // coordinate配列にuser_idを追加
        $input['user_id'] = Auth::id();
        $coordinate->fill($input)->save();
        
        return redirect('/coordinates/' . $coordinate->id);
    }
    
        public function edit(Coordinate $coordinate)
    {
        return view('coordinates.edit')->with(['coordinate' => $coordinate]);
    }
    
        public function update(Request $request, Coordinate $coordinate)
    {
        $input_coordinate = $request['coordinate'];
        $coordinate->fill($input_coordinate)->save();
        
        return redirect('/coordinates/' . $coordinate->id);
    }
    
        public function delete(Coordinate $coordinate)
    {
            $coordinate->delete();
            return redirect('/');
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
?>　　　
