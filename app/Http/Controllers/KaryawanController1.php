<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Pastikan nama class di sini sesuai dengan nama file dan keinginan Anda
class KaryawanController1 extends Controller
{
    /**
     * Menampilkan semua data karyawan.
     */
    public function index()
    {
        $karyawans = DB::table('karyawan')->paginate(10);
        return view('karyawan2.index', ['karyawans' => $karyawans]);
    }

    /**
     * Menampilkan form untuk menambah karyawan baru.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Menyimpan data karyawan baru ke database.
     */
    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan');
    }

    /**
     * Menampilkan form untuk mengedit data karyawan.
     */
    public function edit($kodepegawai)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    /**
     * Mengupdate data karyawan di database.
     */
    public function update(Request $request)
    {
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan');
    }

    /**
     * Menghapus data karyawan dari database.
     */
    public function destroy($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan');
    }
}
