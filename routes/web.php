<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend');
});


Route::get('/bootstrap', function () {
    return view('botstrap');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/Linktree', function () {
    return view('Linktree');
});

Route::get('/Pertemuan4', function () {
    return view('Pertemuan4');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/template1', function () {
    return view('template1');
});

Route::get('/Tugas1', function () {
    return view('Tugas1');
});

Route::get('/web', function () {
    return view('web');
});

Route::get('/welcome', function () {
    return view('welcom');
});
