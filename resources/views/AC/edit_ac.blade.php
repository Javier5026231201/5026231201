@extends('template')


@section('content')
	<h3>Edit Data AC</h3>

	<a href="/ac" class="btn btn-secondary"> < Kembali</a>

	<br/>
	<br/>

	<form action="/ac/update" method="post">
		{{ csrf_field() }}

        {{-- Input tersembunyi untuk menyimpan ID yang akan diupdate --}}
         <input type="hidden" name="id" value="{{ $ac->id }}">

		<div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Merk AC
            </div>
            <div class="col-sm-9">
                {{-- Menampilkan data lama di dalam value input --}}
                <input type="text" name="merkAC" required="required" class="form-control" value="{{ $ac->merkAC }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Harga AC
            </div>
        <div class="col-sm-9">
                <input type="number" name="hargaAC" required="required" class="form-control" value="{{ $ac->hargaAC }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                Tersedia
            </div>
            <div class="col-sm-9">
                <select name="tersedia" class="form-control" required="required">
            {{-- Opsi ini akan terpilih jika nilai $ac->tersedia adalah 1 --}}
                    <option value="1" {{ $ac->tersedia == 1 ? 'selected' : '' }}>Ya</option>

            {{-- Opsi ini akan terpilih jika nilai $ac->tersedia adalah 0 --}}
                    <option value="0" {{ $ac->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3 col-form-label">
                 Berat (kg)
             </div>
             <div class="col-sm-9">
            <input type= "number" step="0.01" name="berat" required="required" class="form-control" value="{{ $ac->berat }}">
         </div>
    </div>

         <input type="submit" value="Simpan Perubahan" class="btn btn-success">
	</form>

@endsection
