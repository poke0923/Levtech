<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/posts/create',[PostController::class,'create']);
    Route::get('/posts/{post}',[PostController::class,'show']);
    Route::post('/posts',[PostController::class,'store']);
    Route::get('/posts/{post}/edit',[PostController::class,'edit']);
    Route::put('/posts/{post}',[PostController::class,'update']);
    Route::delete('/posts/{post}',[PostController::class,'delete']);
    Route::get('/category/{category}',[CategoryController::class,'index']);
    Route::get('/teratail',[PostController::class,'teratail']);
});

require __DIR__.'/auth.php';
