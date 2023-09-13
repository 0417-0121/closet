<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinate;
use App\Http\Requests\CoordinateRequest;
use Auth;
use Cloudinary;
use App\Models\Cloth;
use App\Models\Coordinates_image;
use App\Models\Category;

class CoordinateController extends Controller
{
    public function index(Coordinate $coordinate)//インポートしたCoordinateをインスタンス化して$coordinateとして使用。
    {
        return view('coordinates.index')->with(['coordinates' => $coordinate->getPaginateByLimit()]);//$coordinateの中身を戻り値にする。
    }  //blade内で使う変数'coordinates'と設定。'coordinates'の中身にgetを使い、インスタンス化した$coordinateを代入。

    public function show(Coordinate $coordinate, Category $category)
    {
        return view('coordinates.show')->with(['coordinate' => $coordinate, 'categories' => $category->get()]);
    }
    
    public function create(Cloth $cloth)
    {
        return view('coordinates.create')->with(['clothes' => $cloth->get()]);
    }
    
    public function store(Request $request, Coordinate $coordinate, Coordinates_image $coordinates_image)
    {   
        $input = $request['coordinate'];
        $cloth_array = $request->input('coordinate_image');
        // coordinate配列にuser_idを追加
        $input['user_id'] = Auth::id();
        $coordinate->fill($input)->save();
        $coordinate->clothes()->attach($cloth_array);
        
        return redirect('/coordinates/' . $coordinate->id);
    }
    
    public function choose(Request $request, Coordinate $coordinate, Coordinates_image $coordinates_image)
    {
        
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
