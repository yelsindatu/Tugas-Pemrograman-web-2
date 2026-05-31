<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'nama_dokter',
    'spesialis',
    'no_telepon',
    'poli_id',
    'tanggal'
])]

class Dokter extends Model
{
    use HasFactory;

    public function poli(): BelongsTo
    {
        return $this->belongsTo(Poli::class);
    }
}