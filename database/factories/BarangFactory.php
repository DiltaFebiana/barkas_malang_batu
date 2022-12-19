<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 2),
            'user_id' => $this->faker->numberBetween(1, 5),
            'nama' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->sentence(mt_rand(2, 4)),
            'kondisi' => $this->faker->sentence(mt_rand(2, 3)),
            'spesifikasi' => $this->faker->sentence(mt_rand(2, 5)),
            'lokasi' => $this->faker->sentence(mt_rand(2, 3)),
            'harga_jual' => $this->faker->randomDigit(),
            'minus' => $this->faker->sentence(mt_rand(2, 3)),
            'CP' => $this->faker->randomDigit(),
            'status' => 'Sudah di Posting'
        ];
    }
}
