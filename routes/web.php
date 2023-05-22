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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () { /// route resourse grouplanmak lazim
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('book', [App\Http\Controllers\Admin\BooksController::class, 'index']);
    Route::get('add-book', [App\Http\Controllers\Admin\BooksController::class, 'create']);
    Route::post('add-book', [App\Http\Controllers\Admin\BooksController::class, 'store']);
    Route::get('edit-book/{book_id}', [App\Http\Controllers\Admin\BooksController::class, 'edit']);
    Route::put('update-book/{book_id}', [App\Http\Controllers\Admin\BooksController::class, 'update']);
    Route::get('delete-book/{book_id}', [App\Http\Controllers\Admin\BooksController::class, 'destroy']);

    Route::get('genres', [App\Http\Controllers\Admin\BookGenresController::class, 'index']);
    Route::get('add-genre', [App\Http\Controllers\Admin\BookGenresController::class, 'create']);
    Route::post('add-genre', [App\Http\Controllers\Admin\BookGenresController::class, 'store']);
    Route::get('edit-genre/{genre_id}', [App\Http\Controllers\Admin\BookGenresController::class, 'edit']);
    Route::put('update-genre/{genre_id}', [App\Http\Controllers\Admin\BookGenresController::class, 'update']);
    Route::get('delete-genre/{genre_id}', [App\Http\Controllers\Admin\BookGenresController::class, 'destroy']);

    Route::get('writer', [App\Http\Controllers\Admin\WritersController::class, 'index']);
    Route::get('add-writer', [App\Http\Controllers\Admin\WritersController::class, 'create']);
    Route::post('add-writer', [App\Http\Controllers\Admin\WritersController::class, 'store']);
    Route::get('edit-writer/{writer_id}', [App\Http\Controllers\Admin\WritersController::class, 'edit']);
    Route::put('update-writer/{writer_id}', [App\Http\Controllers\Admin\WritersController::class, 'update']);
    Route::get('delete-writer/{writer_id}', [App\Http\Controllers\Admin\WritersController::class, 'destroy']);

    Route::get('comment', [App\Http\Controllers\Admin\CommentController::class, 'index']);
    Route::get('add-comment', [App\Http\Controllers\Admin\CommentController::class, 'create']);
    Route::post('add-comment', [App\Http\Controllers\Admin\CommentController::class, 'store']);
    Route::get('edit-comment/{comment_id}', [App\Http\Controllers\Admin\CommentController::class, 'edit']);
    Route::put('update-comment/{comment_id}', [App\Http\Controllers\Admin\CommentController::class, 'update']);
    Route::get('delete-comment/{comment_id}', [App\Http\Controllers\Admin\CommentController::class, 'destroy']);

    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('add-user', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('add-user', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('edit-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::get('delete-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);

});

Auth::routes();

Route::resource('user', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//front end routes
Route::get('/about',function (){
    return view('about');
})->name('aboutus');