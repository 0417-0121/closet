<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)//インポートしたCategoryをインスタンス化して$categorytとして使用。
    {
        return $category->get();//$categoryの中身を戻り値にする。
    }
    
    public function index()
    {
        // categoriesテーブルから全てのデータを取得
        $categories = Category::all();
        // index.blade.phpにデータを渡して表示
        return view('categories.index', compact('categories'));
    }
}
