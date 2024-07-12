<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\KhachHangController;
use App\Http\Controllers\Admins\SanPhamController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::prefix("/admin/khachhang")->group(function(){
//   Route::get("/danh-sach",[KhachHangController::class,"index"])->name("admin.khachhang.danhhsach");
//   Route::get("/them-moi",[KhachHangController::class,"create"])->name("admin.khachhang.themmoi");
//   Route::get("/them",[KhachHangController::class,"store"])->name("admin.khachhang.them");
//   Route::get("/sua/{id}",[KhachHangController::class,"edit"])->name("admin.khachhang.sua");
// });
Route::get("/san-pham/test",[SanPhamController::class,"test"])->name("sanpham.test");
Route::resource("/khachhang",KhachHangController::class);
