@extends('layouts.admin')
@section("title")
{{$title}}
@endsection
@section('content')
<div  class="container w-50">
    <div class="text-end mb-3">
        <a href="{{route('khachhang.index')}}" class="btn btn-primary">Danh sách khách hàng</a>
     </div>
    <h2 class="text-center mb-2">Thêm mới khách hàng</h2>
    <form action="{{route("khachhang.store")}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("POST")
        <div class="form-group mt-2">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" name="ten_khach_hang">
        </div>
        <div class="form-group mt-2">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group mt-2">
            <label for="">Số điện thoại</label>
            <input type="text"  class="form-control" name="so_dien_thoai">
        </div>
        <div class="form-group mt-2">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="dia_chi">
        </div>
        <div class="form-group mt-2">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="ngay_sinh">
        </div>
        <div class="form-group mt-2">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="anh">
        </div>
        <div class="form-group mt-2">
            <label for="">Trạng thái</label>
             <select name="trang_thai" id="" class="form-control">
                <option value="1">Đang hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-success">Thêm mới</button>
        </div>
    </form>
   
</div>
@endsection
