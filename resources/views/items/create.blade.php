@extends('layout')

@section('content')
<h2>Tambah Sepatu Baru</h2>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="name" value="{{ old('name') }}"><br>
    Jumlah: <input type="number" name="quantity" value="{{ old('quantity') }}"><br>
    Catatan: <input type="text" name="notes"><br>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('items.index') }}">Kembali</a>
@endsection
