<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\AcController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KaryawanController1;
use App\Http\Controllers\KeranjangBelanjaController;


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
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//==========================pertemuan 13==============================================

//route CRUD
Route::get('/pegawai', [PegawaiController::class,   'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);

//route AC
Route::get('/ac', [AcController::class,   'index']);
Route::get('/ac/tambah',[AcController::class, 'tambah']);
Route::post('/ac/store',[AcController::class, 'store']);
Route::get('/ac/edit/{id}',[AcController::class, 'edit']);
Route::post('/ac/update',[AcController::class, 'update']);
Route::get('/ac/hapus/{id}',[AcController::class, 'hapus']);
Route::get('/ac/cari',[AcController::class, 'cari']);

//route CRUD
Route::get('/kulkas', [KulkasController::class,   'index']);
Route::get('/kulkas/tambah',[KulkasController::class, 'tambah']);
Route::post('/kulkas/store',[KulkasController::class, 'store']);
Route::get('/kulkas/edit/{id}',[KulkasController::class, 'edit']);
Route::post('/kulkas/update',[KulkasController::class, 'update']);
Route::get('/kulkas/hapus/{id}',[KulkasController::class, 'hapus']);
Route::get('/kulkas/cari',[KulkasController::class, 'cari']);

//=========================================================

//route CRUD tugas 1
Route::get('/karyawan', [KaryawanController::class,   'index']);
Route::get('/karyawan/tambah',[KaryawanController::class, 'tambah']);
Route::post('/karyawan/store',[KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class, 'hapus']);

//===========================================================

//route CRUD tugas 2
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class,   'index']);
Route::get('/keranjangbelanja/tambah',[KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store',[KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}',[KeranjangBelanjaController::class, 'hapus']);

//============================================================

//route CRUD tugas 3
Route::get('/karyawan2', [KaryawanController1::class, 'index'])->name('karyawan.index');
Route::get('/karyawan2/create', [KaryawanController1::class, 'create'])->name('karyawan.create');
Route::post('/karyawan2', [KaryawanController1::class, 'store'])->name('karyawan.store');
Route::get('/karyawan2/{kodepegawai}/edit', [KaryawanController1::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan2/{kodepegawai}', [KaryawanController1::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan2/{kodepegawai}', [KaryawanController1::class, 'destroy'])->name('karyawan.destroy');

?>
