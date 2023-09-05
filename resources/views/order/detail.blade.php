@php
$title = "Chi Tiết Đơn Hàng";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thông Tin Khách Hàng</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Họ và Tên</th>
                        <td>{{ $orderItem->fullname }}</td>
                    </tr>    
                    <tr>
                        <th>Email</th>
                        <td>{{ $orderItem->email }}</td>
                    </tr>  
                    <tr>
                        <th>Số Điện Thoại</th>
                        <td>{{ $orderItem->phone_number }}</td>
                    </tr>  
                    <tr>
                        <th>Địa Chỉ</th>
                        <td>{{ $orderItem->address }}</td>
                    </tr>  
                    <tr>
                        <th>Ghi Chú</th>
                        <td>{{ $orderItem->note }}</td>
                    </tr>          
                </table>
                <p>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Quay Lại</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                <table class="table mb-0 table-hover align-middle text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">STT</th>
                            <th class="border-top-0">Tên Sản Phẩm</th>
                            <th class="border-top-0">Hình Ảnh</th>
                            <th class="border-top-0">Giá</th>
                            <th class="border-top-0">Số Lượng</th>
                            <th class="border-top-0">Tổng Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($itemList as $item)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $item->title }}</td>
                                <td><img src="{{ $item->thumbnail }}" style="width: 100px;"></td>
                                <td>{{ number_format($item->price, 0) }}</td>
                                <td>{{ number_format($item->num) }}</td>
                                <td>{{ number_format($item->price * $item->num, 0) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Tổng Tiền</strong></td>
                            <td><strong>{{ number_format($orderItem->total_money) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
    