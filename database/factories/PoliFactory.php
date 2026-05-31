<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_poli' => fake()->unique()->bothify('PL###'),
            'nama_poli' => fake()->randomElement([
                'Poli Umum',
                'Poli Gigi',
                'Poli THT',
                'Poli Anak',
                'Poli Mata',
            ]),
            'lokasi' => fake()->randomElement([
                'Lantai 1',
                'Lantai 2',
                'Lantai 3',
                'Lantai 4',
                'Lantai 5',
            ]),
        ];
    }
}