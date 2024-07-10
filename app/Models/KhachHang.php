<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $fillable = [
            "ten_khach_hang",
            "dia_chi",
            "so_dien_thoai",
            "email",
            "trang_thai",
            "annh",
    ];
    protected $tablename = "khach_hangs";
}
