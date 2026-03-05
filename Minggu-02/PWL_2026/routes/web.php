<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);


Route::get('/greeting', [WelcomeController::class, 'greeting']);


## Route Optional Parameter
// Route::get('/user/{name?}', function($name = 'null'){
//     return 'Nama saya ' . $name;
// });


Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
