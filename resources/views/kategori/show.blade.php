@extends('layouts.php')

@section('content')
<div class="container">
<h1>kategori:{{$kategori->nama_kategori}}</h1>
<h2>Daftar Produk</h2>
<ul>
    @forelse ($produks as $produk)
    <li>{{ $produk->nama_produk}}</li>
    @empty
    <li>Tidak ada produk dalam kategori ini</li>
    @endforelse
</ul>
<a href="{{route('kategori.index')}}" class="btn btn-secondary">Kembali</a>
</div>
@endsection