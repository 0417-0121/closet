<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;

class TempController extends Controller
{
        public function index(Temp $temp)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $temp->get();//$postの中身を戻り値にする。
    }
}
