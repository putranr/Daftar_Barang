@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Tambah Sepatu Baru</div>
    <div class="card-body">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Sepatu</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah</label>
                <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" name="notes" class="form-control" value="{{ old('notes') }}">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
