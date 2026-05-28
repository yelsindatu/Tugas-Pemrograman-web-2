<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('pasien.index', [
            'title' => 'Data Pasien',
            'pasiens' => Pasien::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('pasien.create', [
            'title' => 'Tambah Pasien'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pasien' => 'required|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required',
            'keluhan' => 'required|max:255',
        ], [
            'nama_pasien.required' => 'Nama pasien wajib diisi',
            'umur.required' => 'Umur wajib diisi',
            'umur.integer' => 'Umur harus angka',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'keluhan.required' => 'Keluhan wajib diisi',
        ]);

        Pasien::create($validated);

        return to_route('pasien.index')
            ->withSuccess('Data pasien berhasil ditambahkan');
    }

    public function show(Pasien $pasien)
    {
        //
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'title' => 'Edit Pasien',
            'pasien' => $pasien
        ]);
    }

    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'nama_pasien' => 'required|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required',
            'keluhan' => 'required|max:255',
        ], [
            'nama_pasien.required' => 'Nama pasien wajib diisi',
            'umur.required' => 'Umur wajib diisi',
            'umur.integer' => 'Umur harus angka',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'keluhan.required' => 'Keluhan wajib diisi',
        ]);

        $pasien->update($validated);

        return to_route('pasien.index')
            ->withSuccess('Data pasien berhasil diubah');
    }

    public function destroy(Pasien $pasien)
    {
        //
    }
}