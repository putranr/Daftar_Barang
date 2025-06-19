@extends('layout')

@section('content')
<h2>Edit Sepatu</h2>
<form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf @method('PUT')
    Nama: <input type="text" name="name" value="{{ $item->name }}"><br>
    Jumlah: <input type="number" name="quantity" value="{{ $item->quantity }}"><br>
    Catatan: <input type="text" name="notes" value="{{ $item->notes }}"><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('items.index') }}">Kembali</a>
@endsection
