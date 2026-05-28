<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pasien>
 */

class PasienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_pasien' => fake()->name(),
            'umur' => fake()->numberBetween(1, 80),
            'jenis_kelamin' => fake()->randomElement([
                'Laki-laki',
                'Perempuan'
            ]),
            'alamat' => fake()->address(),
            'keluhan' => fake()->sentence(),
        ];
    }
}