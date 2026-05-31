<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(Request $request)
    {
        $dokters = Dokter::with('poli')->latest();

        if ($request->keyword) {
            $dokters->where('nama_dokter', 'like', '%' . $request->keyword . '%')
                    ->orWhere('spesialis', 'like', '%' . $request->keyword . '%');
        }

        if ($request->poli) {
            $dokters->where('poli_id', $request->poli);
        }

        return view('dokter.index', [
            'title' => 'Dokter',
            'dokters' => $dokters->paginate(2)->withQueryString(),
            'polis' => Poli::groupBy('nama_poli')
              ->select('id', 'nama_poli')
              ->get()
        ]);
    }

    public function create()
    {
        return view('dokter.create', [
            'title' => 'Tambah Dokter',
            'polis' => Poli::all()
        ]);
    }

    public function store(Request $request)
    {
                $validated = $request->validate([
            'poli_id' => 'required',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
            'no_telepon' => 'required',
        ]);

        Dokter::create($validated);

        return redirect()
            ->route('dokter.index')
            ->withSuccess('Data dokter berhasil ditambahkan');
    }

    public function show(Dokter $dokter)
    {
        //
    }

    public function edit(Dokter $dokter)
    {
        //
    }

    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    public function destroy(Dokter $dokter)
    {
        //
    }
}