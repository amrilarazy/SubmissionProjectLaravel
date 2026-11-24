<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();

        return view('berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'kategori_berita' => 'required',
        ]);

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'kategori_berita' => $request->kategori_berita,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Data berhasil ditambahkan');
    }
}