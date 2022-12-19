<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Barang::factory(20)->create();

        Category::create(
            [
                'name' => 'Elektronik',
                'slug' => 'elektronik'
            ]
        );

        Category::create(
            [
                'name' => 'Sepatu Pria',
                'slug' => 'sepatu-pria'
            ]
        );

        // Barang::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'nama' => 'iPad Gen 9',
        //     'kondisi' => 'Bekas',
        //     'spesifikasi' => 'iPad 64GB WiFi',
        //     'lokasi' => 'Malang',
        //     'harga_jual' => 1,
        //     'minus' => 'Tidak ada',
        //     'CP' => '@fyaalwiyah'
        // ]);

        // Barang::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'nama' => 'Samsung A1',
        //     'kondisi' => 'Baru',
        //     'spesifikasi' => 'Samsung A1',
        //     'lokasi' => 'Karangploso',
        //     'harga_jual' => 2,
        //     'minus' => 'Tidak ada',
        //     'CP' => '@meliusa26'
        // ]);

        // Barang::create([
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'nama' => 'Sepatu Br*do Vulcan Low Classic',
        //     'kondisi' => 'Bekas',
        //     'spesifikasi' => 'Original lengkap dengan box',
        //     'lokasi' => 'Batu',
        //     'harga_jual' => 1,
        //     'minus' => 'Kotor sedikit',
        //     'CP' => '081359703050'
        // ]);
    }
}
