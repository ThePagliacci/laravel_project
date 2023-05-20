<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});


//tamamlama gerek
Route::get('anasayfa', [App\Http\Controllers\BooksController::class, 'index'])->name('blog');
Route::get('anasayfa/{book}', [App\Http\Controllers\BooksController::class, 'show'])->name('book.show');

//tamamlama gerek
Route::get('yazar', [App\Http\Controllers\WritersController::class, 'index'])->name('yazar');
Route::get('yazar/{writer_id}', [App\Http\Controllers\WritersController::class, 'show'])->name('writer.show');

Route::middleware(['auth'])->prefix('comments')->group(function () { //kullanıcı giriş yapmadan göremez  (resource route geliştirmek?)

    Route::get('/', [App\Http\Controllers\CommentsController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\CommentsController::class, 'create'])->name('yorumYap');
    Route::post('/', [App\Http\Controllers\CommentsController::class, 'store']);
    Route::get('/{comment}', [App\Http\Controllers\CommentsController::class,'show']);
    Route::get('/{comment}/edit', [App\Http\Controllers\CommentsController::class,'edit']);
    Route::post('/{comment}', [App\Http\Controllers\CommentsController::class,'update']);
    Route::delete('/{comment}/delete', [App\Http\Controllers\CommentsController::class,'destroy']);
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Auth::routes();

Route::resource('user', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//front end routes
Route::get('/about',function (){
    return view('about');
})->name('aboutus');