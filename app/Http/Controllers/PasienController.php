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
            'pasiens' => Pasien::all(),
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

    public function show(Pasien $pasien)
    {
        //
    }

    public function edit(Pasien $pasien)
    {
        //
    }

    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    public function destroy(Pasien $pasien)
    {
        //
    }
}