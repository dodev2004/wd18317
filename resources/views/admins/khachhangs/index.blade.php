@extends('layouts.admin')
@section("title")
Trang chủ
@endsection
@section('content')
<div  class="container w-75">
    <h2 class="text-center mb-2">Danh sách khách hàng</h2>
    <div class="text-end mb-3">
       <a href="{{route('admin.khachhang.themmoi')}}" class="btn btn-primary">Thêm mới khách hàng</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Ảnh </th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Chỉnh sửa</th>
          </tr>
        </thead>
        <tbody>
            @foreach($khachhangs as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->ten_khach_hang}}</td>
            <td>{{$item->email}}</td>
            <td>
                <img  class="" width="100" height="100" src="{{$item->anh}}" alt="">
            </td>
            <td>
               @if($item->trang_thai)
                Kích hoạt
               @else
               Chưa kích hoạt
               @endif
            </td>
            <td>
                <a href="{{route('admin.khachhang.sua',$item->id)}}" class="btn btn-info"><i class="fa-solid fa-pencil" style="color: #FFD43B;"></i></a>
                <a href="" class="btn btn-warning" onclick="return confirm('Bạn chắc chắn muốn xóa chứ')"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection