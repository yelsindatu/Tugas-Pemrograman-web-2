<?php

namespace Database\Factories;

use App\Models\Poli;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoliFactory extends Factory
{
    protected $model = Poli::class;

    public function definition(): array
    {
        return [
            'nama_poli' => fake()->randomElement([
                'Poli Umum',
                'Poli Anak',
                'Poli Gigi',
                'Poli Mata',
                'Poli THT'
            ]),
            'lokasi' => 'Lantai ' . fake()->numberBetween(1, 5),
        ];
    }
}