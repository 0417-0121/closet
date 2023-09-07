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
    
        public function index(Category $category)
    {
        return view('categories.index')->with(['clothes' => $category->getByCategory()]);
    }
}
