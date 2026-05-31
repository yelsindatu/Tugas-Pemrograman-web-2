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
        //
    }

    public function store(Request $request)
    {
        //
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