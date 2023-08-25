<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CoordinateController; //外部にあるCooridinateControllerクラスをインポート
=======
use App\Http\Controllers\CoordinateController;
use App\Http\Controllers\ClothController;
>>>>>>> clothes_table
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

<<<<<<< HEAD
Route::get('/', [CoordinateController::class, 'index']);
=======
Route::get('/', [CoordinateController::class, 'index']); 
Route::get('/clothes', [ClothController::class, 'index']); 
>>>>>>> clothes_table
