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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Poli $poli)
    {
        //
    }

    public function edit(Poli $poli)
    {
        //
    }

    public function update(Request $request, Poli $poli)
    {
        //
    }

    public function destroy(Poli $poli)
    {
        //
    }
}