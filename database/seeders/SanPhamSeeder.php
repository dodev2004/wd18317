<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("san_phams")->insert([
            [
                "ma_san_pham" => "SP01",
                "ten_san_pham" => "Iphone 12",
                "gia" => 10000,
                "so_luong" => 100,
                "ngay_nhap" => "2024-11-25",
                "mo_ta" => "Điện thoại Iphone 12",
                "trang_thai" => true,
            ],
            [
                "ma_san_pham" => "SP02",
                "ten_san_pham" => "Iphone 11",
                "gia" => 15000,
                "so_luong" => 10,
                "ngay_nhap" => "2023-06-25",
                "mo_ta" => "Điện thoại Iphone 11",
                "trang_thai" => true
            ]
        ]);
    }
    }

