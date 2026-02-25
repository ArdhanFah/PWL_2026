<?php

use Illuminate\Support\Facades\Route;

## Route Dasar
Route::get('/', function () {
    // return view('welcome');
    return "Selamat Datang";
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/world', function () {
    return "World";
});

Route::get('/about', function () {
    return "Nama: Ardhan Dikri Achmad Fahrudin<br> 
    NIM: 244107020012";
});

## Route Parameter
// Route::get('/user/{nama}', function ($nama) {
//     return 'Nama Saya ' . $nama;
// });


Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Artikel dengan ID ' . $id;
});

## Route Optional Parameter
// Route::get('/user/{name?}', function($name = 'null'){
//     return 'Nama saya ' . $name;
// });


Route::get('/user/{name?}', function($name = 'John'){
    return 'Nama saya ' . $name;
});
