<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KhachhangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("khach_hangs")->insert([
            [
                "ten_khach_hang" => "Nguyễn Văn A",
                "dia_chi" => "Hà Nội",
                "so_dien_thoai" => "0123456789",
                "email" => "abc123@gmail.com",
                "ngay_sinh" => "2024-11-25",
                "trang_thai" => true,
                "anh"=>"https://cdn1.iconfinder.com/data/icons/mix-color-3/502/Untitled-7-1024.png",
                
            ],
            [
                "ten_khach_hang" => "Nguyễn Văn B",
                "dia_chi" => "Hà Nội",
                "so_dien_thoai" => "0123456789",
                "email" => "456abc@gmail.com",
                "ngay_sinh" => "2024-11-25",
                "trang_thai" => true,
                "anh"=>"https://cdn1.iconfinder.com/data/icons/mix-color-3/502/Untitled-7-1024.png",
            ]   
        ]); 

    }
}
