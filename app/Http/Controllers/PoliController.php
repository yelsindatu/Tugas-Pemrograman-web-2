<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $polis = Poli::latest();

        $keyword = request('keyword');

        if ($keyword) {
            $polis->where('nama_poli', 'like', '%' . $keyword . '%')
                  ->orWhere('kode_poli', 'like', '%' . $keyword . '%');
        }

        return view('poli.index', [
            'title' => 'Data Poli',
            'polis' => $polis->paginate(5)->withQueryString(),
        ]);
    }

    public function create()
    {
        return view('poli.create', [
            'title' => 'Tambah Poli'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_poli' => 'required|string|max:255',
            'kode_poli' => 'required|string|unique:polis,kode_poli',
            'lokasi' => 'required|string|max:255',
        ], [
            'nama_poli.required' => 'Nama poli wajib diisi',
            'kode_poli.required' => 'Kode poli wajib diisi',
            'kode_poli.unique' => 'Kode poli sudah ada',
            'lokasi.required' => 'Lokasi wajib diisi',
        ]);

        Poli::create($validated);

        return to_route('poli.index')
            ->withSuccess('Data berhasil ditambahkan');
    }

    public function show(Poli $poli)
    {
        return view('poli.show', [
            'title' => 'Detail Poli',
            'poli' => $poli
        ]);
    }

    public function edit(Poli $poli)
    {
        return view('poli.edit', [
            'title' => 'Edit Poli',
            'poli' => $poli
        ]);
    }

    public function update(Request $request, Poli $poli)
    {
        $validated = $request->validate([
            'kode_poli' => 'required|max:255',
            'nama_poli' => 'required|max:255',
            'lokasi' => 'required|max:255',
        ], [
            'kode_poli.required' => 'Kode poli wajib diisi',
            'nama_poli.required' => 'Nama poli wajib diisi',
            'lokasi.required' => 'Lokasi wajib diisi',
        ]);

        $poli->update($validated);

        return to_route('poli.index')
            ->withSuccess('Data poli berhasil diubah');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete($poli);
        return to_route('poli.index')->withSuccess('Data poli berhasil dihapus');
    }
}