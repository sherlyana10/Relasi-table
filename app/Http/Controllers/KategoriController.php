<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategoris,nama_kategori',
        ]);
    
        Kategori::create($request->all());
    
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        $produks = $kategori->produks;
        return view('kategori.show', compact('kategori', 'produks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        
    return view('kategori.edit', compact('kategori'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        
    $request->validate([
        'nama_kategori' => 'required|string|max:255|unique:kategoris,nama_kategori,' . $kategori->id,
    ]);

    $kategori->update($request->all());

    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');

    }
}
