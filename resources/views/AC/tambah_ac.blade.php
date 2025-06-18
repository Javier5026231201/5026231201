@extends('template')


@section('content')
	<h3>Tambah Data AC Baru</h3>

	<a href="/ac" class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>

	<form action="/ac/store" method="post">
		{{ csrf_field() }}

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Merk AC
            </div>
            <div class="col-sm-9">
                <input type="text" name="merkAC" required="required" class="form-control" placeholder="Masukkan merk AC">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Harga AC
            </div>
            <div class="col-sm-9">
                <input type="number" name="hargaAC" required="required" class="form-control" placeholder="Masukkan harga (hanya angka)">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Tersedia
            </div>
            <div class="col-sm-9">
                <input type="number" name="tersedia" required="required" class="form-control" placeholder="1 untuk Ya, 0 untuk Tidak" min="0" max="1">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Berat
            </div>
            <div class="col-sm-9">
            <input type="number" step="0.01" name="berat" required="required" class="form-control" placeholder="Masukkan berat (misal: 10.5)">
        </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
