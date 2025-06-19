@extends('layout')

@section('content')
<h2>Daftar Belanja Sepatu</h2>
<a href="{{ route('items.create') }}">Tambah Sepatu Baru</a>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Catatan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ $item->notes }}</td>
        <td>
            <a href="{{ route('items.edit', $item->id) }}">Edit</a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
