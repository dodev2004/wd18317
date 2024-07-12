<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public function createKhachang($data){
            DB::table('khach_hangs')->insert($data);
    }
    protected $tablename = "khach_hangs";
}
