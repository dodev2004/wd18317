@extends('layouts.admin')
@section("title")
{{$title}}
@endsection
@section('content')
<div  class="container w-50">
    <div class="text-end mb-3">
        <a href="{{route('admin.khachhang.danhhsach')}}" class="btn btn-primary">Danh sách khách hàng</a>
     </div>
    <h2 class="text-center mb-2">Thêm mới khách hàng</h2>
    <form action="{{route("admin.khachhang.them")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" value="{{ $khachhang->ten_khach_hang }}" name="ten_khach_hang">
        </div>
        <div class="form-group mt-2">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $khachhang->email }}">
        </div>
        <div class="form-group mt-2">
            <label for="">Số điện thoại</label>
            <input type="text" name="so_die_thoai" class="form-control" name="so_dien_thoai" value="{{ $khachhang->so_dien_thoai }}">
        </div>
        <div class="form-group mt-2">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="dia_chi" value="{{ $khachhang->dia_chi }}">
        </div>
        <div class="form-group mt-2">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="ngay_sinh"  value="{{ $khachhang->ngay_sinh }}">
        </div>
        <div class="form-group mt-2">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="anh">
            @empty(!$khachhang->anh)
                <img src="{{$khachhang->anh}}" width="100" height="100" alt="">
            @endempty
        </div>
        <div class="form-group mt-2">
            <label for="">Trạng thái</label>
             <select name="trang_thai" id="" class="form-control">
                <option value="1" @if($khachhang->trang_thai) selected @endif>Đang hoạt động</option>
                <option value="0" @if(!$khachhang->trang_thai) selected @endif>Không hoạt động</option>
            </select>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-success">Thêm mới</button>
        </div>
    </form>
   
</div>
@endsection
