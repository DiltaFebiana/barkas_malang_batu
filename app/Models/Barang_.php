<?php

namespace App\Models;

class Barang
{
    private static $dummy_data = [
        [
            "nama" => "iPad Gen 9",
            "pemilik" => "Pemilik 1",
            "kondisi" => "Bekas",
            "spesifikasi" => "iPad Silver 64GB WiFi",
            "lokasi" => "Malang",
            "harga_jual" => "7jt",
            "minus" => "tidak ada",
            "CP" => "IG: @fyaalwiyah"
        ],
        [
            "nama" => "Sepatu Br*do Vulcan Low Classic",
            "pemilik" => "Pemilik 2",
            "kondisi" => "Bekas",
            "spesifikasi" => "Original lengkap dengan box",
            "lokasi" => "Malang",
            "harga_jual" => "160000",
            "minus" => "Kotor sedikit",
            "CP" => "08998390598"
        ]
    ];

    public static function all()
    {
        return collect(self::$dummy_data);
    }
}
