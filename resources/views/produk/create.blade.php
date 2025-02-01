@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
            @error('nama_produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Nama Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control">
                @foreach ($kategoris as $kategori)
                <option value="{{$kategori->id}}" {{old('kategori_id') == $kategori->id ? 'selected' : ''}}>
                    {{ $kategori->nama_kategori }}
                </option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
