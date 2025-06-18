<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ACController extends Controller
{
    /**
     * Menampilkan daftar semua data AC dengan pagination.
     */
    public function index()
    {
        // mengambil data dari tabel 'AC'
        $ac = DB::table('AC')->paginate(10); // Menggunakan paginate untuk 10 data per halaman

        // mengirim data AC ke view 'ac/index_ac'
        return view('ac/index_ac', ['ac' => $ac]);
    }

    /**
     * Menampilkan view form untuk menambah data AC baru.
     */
    public function tambah()
    {
        // memanggil view tambah data AC
        return view('ac/tambah_ac');
    }

    /**
     * Menyimpan data dari form tambah ke dalam tabel 'AC'.
     */
    public function store(Request $request)
    {
        // insert data ke tabel 'AC'
        DB::table('AC')->insert([
            'merkAC' => $request->merkAC,
            'hargaAC' => $request->hargaAC,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // alihkan halaman kembali ke halaman daftar AC
        return redirect('/ac');
    }

    /**
     * Menampilkan form edit untuk data AC tertentu.
     */
    public function edit($id) // Parameter diubah menjadi $id
    {
        // mengambil data AC berdasarkan id yang dipilih
        $ac = DB::table('AC')->where('id', $id)->first(); // Kolom diubah menjadi 'id' dan gunakan first() untuk 1 data

        // passing data AC yang didapat ke view 'ac/edit_ac'
        return view('ac/edit_ac', ['ac' => $ac]);
    }

    /**
     * Mengupdate data AC di database.
     */
    public function update(Request $request)
    {
        // update data AC
        DB::table('AC')->where('id', $request->id)->update([ // Kolom diubah menjadi 'id'
            'merkAC' => $request->merkAC,
            'hargaAC' => $request->hargaAC,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // alihkan halaman kembali ke halaman daftar AC
        return redirect('/ac');
    }

    /**
     * Menghapus data AC dari database.
     */
    public function hapus($id) // Parameter diubah menjadi $id
    {
        // menghapus data AC berdasarkan id yang dipilih
        DB::table('AC')->where('id', $id)->delete(); // Kolom diubah menjadi 'id'

        // alihkan halaman kembali ke halaman daftar AC
        return redirect('/ac');
    }

    /**
     * Mencari data AC berdasarkan merk.
     */
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari tabel 'AC' sesuai pencarian merk
        $ac = DB::table('AC')
            ->where('merkAC', 'like', "%" . $cari . "%") // Kolom diubah menjadi 'merkAC'
            ->paginate();

        // mengirim data AC ke view 'ac/index_ac'
        return view('ac/index_ac', ['ac' => $ac, 'cari' => $cari]);
    }
}
