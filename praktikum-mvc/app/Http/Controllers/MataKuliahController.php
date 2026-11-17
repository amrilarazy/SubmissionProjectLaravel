<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();

        return view('matakuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:mata_kuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required',
            'sks' => 'required|integer|between:1,6',
        ]);

        MataKuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    public function show($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        return view('matakuliah.show', compact('mataKuliah'));
    }
}
