@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit produk</h1>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ old('nama_produk', $produk->nama_produk) }}">
            @error('nama_produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kategori_id" class="form-label">Nama kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control">
                @foreach ($kategoris as $kategori)
                <option value="{{$kategori->id}}" @selected($produk->kategori_id == $kategori->id )>
                    {{$kategori->nama_kategori}}
                </option>
                 @endforeach       
            </select>
            @error('kategori_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
