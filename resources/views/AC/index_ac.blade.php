@extends('template')


@section('content')
	<h3>Data AC</h3>

	<a href="/ac/tambah" class="btn btn-primary"> + Tambah AC Baru</a>

    <p>Cari Data AC :</p>
	<form action="/ac/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Merk AC .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk AC</th>
			<th>Harga AC</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($ac as $a)
		<tr>
			<td>{{ $a->merkAC }}</td>
            <td>Rp {{ number_format($a->hargaAC, 0, ',', '.') }}</td>
			<td>{{ $a->tersedia ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $a->berat }} kg</td>
			<td>
				<a href="/ac/edit/{{ $a->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/ac/hapus/{{ $a->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
			</td>
		</tr>

        @endforeach
	</table>

    {{-- Menampilkan link pagination --}}
    {{ $ac->links() }}
@endsection
