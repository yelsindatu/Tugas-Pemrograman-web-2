<?php

namespace Database\Factories;

use App\Models\Poli;
use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\Factory;

class DokterFactory extends Factory
{
    protected $model = Dokter::class;

    public function definition(): array
    {
        return [
            'nama_dokter' => 'dr. ' . fake()->name(),

            'spesialis' => fake()->randomElement([
                'Umum',
                'Anak',
                'Gigi',
                'Mata',
                'THT'
            ]),

            'no_telepon' => fake()->phoneNumber(),

            'poli_id' => Poli::inRandomOrder()->first()->id,
        ];
    }
}