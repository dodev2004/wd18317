<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $data = [];
    public function index()
    {
        $khachangs = KhachHang::query()->get();
        $this->data["title"]= "Danhh sách khách hàng";
        $this->data["khachhangs"] = $khachangs;
        return view('admins.khachhangs.index',  $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $this->data["title"]= "Thêm mới khách hàng khách hàng";
        return view('admins.khachhangs.them',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
     
        $khachang = KhachHang::query()->find($id);
        $this->data["title"]= "Sửa khách hàng";
        $this->data["khachhang"] = $khachang;
        return view('admins.khachhangs.sua',  $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}