<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;


//import java.io


Route::get('/', function () {
    return view('frontend');
});



// Route::get('/blog', function () {
// 	return view('blog');
// });


//Route::get('hello', [Link::class, 'helloword'])


// ================Tugas 1=========================
Route::get('/bootstrap1', function () {
	return view("Pertemuan12.bootstrap1");
});

Route::get('/contact', function () {
	return view("Pertemuan12.contact");
});

Route::get('/index', function () {
	return view("Pertemuan12.index");
});

Route::get('/js2', function () {
	return view("Pertemuan12.js2");
});

Route::get('/Linktree', function () {
	return view("Pertemuan12.Linktree");
});

Route::get('/Pertemuan4', function () {
	return view("Pertemuan12.Pertemuan4");
});

Route::get('/services', function () {
	return view("Pertemuan12.services");
});

Route::get('/template1', function () {
	return view("Pertemuan12.template1");
});

Route::get('/Tugas1', function () {
	return view("Pertemuan12.Tugas1");
});

Route::get('/web', function () {
	return view("Pertemuan12.web");
});

Route::get('/welcome', function () {
	return view("Pertemuan12.welcome");
});

//==========================Pertemuan 12=========================================
//route dosen
Route::get('dosen', [Link::class, 'index']);
//route pegawai
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);



?>
