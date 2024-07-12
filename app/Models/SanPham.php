<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SanPham extends Model
{
    use HasFactory;
    protected $table = "san_phams";
    protected $fillable = [
        "ma_san_pham",
        "ten_san_pham",
        "gia",
        "so_luong",
        "ngay_nhap",
        "mo_ta",
        "trang_thai",

    ];
    public function getList(){
        //  return DB::select("Select * from san_phams order by id desc");
        // return DB::table("san_phams")->orderBy("id","desc")->get();
        return $this::query()->get();
    }
}
