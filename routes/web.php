<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama'      => 'Muhammad Rayhan',
        'jurusan'   => 'Informatika',
        'institusi' => 'Ilmu Komputer',
        'email'     => 'rayhanakunblog@gmail.com',
        'bio'       => 'Seorang Mahasiswa yang Makan Nasi',
    ]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});