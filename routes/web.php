<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoordinateController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TemperatureController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(CoordinateController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/coordinates/create', [CoordinateController::class, 'create']);  //投稿フォームの表示
    Route::post('/coordinates', [CoordinateController::class, 'store']);  //画像を含めた投稿の保存処理
    Route::get('/coordinates/{coordinate}', [CoordinateController::class ,'show']); //投稿詳細画面の表示
    Route::get('/coordinates/{coordinate}/edit', [CoordinateController::class, 'edit']);
    Route::put('/coordinates/{coordinate}', [CoordinateController::class, 'update']);
    Route::delete('/coordinates/{coordinate}', [CoordinateController::class,'delete']);
    });
Route::get('/clothes', [ClothController::class, 'index'])->name('index');
Route::get('/clothes/create', [ClothController::class, 'create']);
Route::post('/clothes', [ClothController::class, 'store']);
Route::get('/clothes/{cloth}', [ClothController::class, 'show']);
Route::get('/clothes/{cloth}/edit', [ClothController::class, 'edit']);
Route::put('/clothes/{cloth}', [ClothController::class, 'update']);

// Route::get('/categories', [CategoryController::class, 'index']); 

// Route::get('/colors', [ColorController::class, 'index']);

// Route::get('/temps', [TempController::class, 'index']); 