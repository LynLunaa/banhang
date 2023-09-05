@php
$title = "Trang Quản Trị";
function randomPrice() {
return number_format(rand(5000000, 10000000), 0, ',', '.') . ' VND';
}
@endphp

@extends('layouts.master-admin')

@section('content')
<table class="table mb-0 table-hover align-middle text-nowrap">
    <thead>
        <tr>
            <th class="border-top-0">Sản phẩm</th>
            <th class="border-top-0">Loại</th>
            <th class="border-top-0">Nhân viên hỗ trợ</th>
            <th class="border-top-0">Công nghệ</th>
            <th class="border-top-0">Vé hỗ trợ</th>
            <th class="border-top-0">Doanh số</th>
            <th class="border-top-0">Doanh thu</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="m-r-10"><a class="btn btn-circle d-flex btn-info text-white">NH</a>
                    </div>
                    <div class="">
                        <h4 class="m-b-0 font-16">Nguyễn Thị Hương</h4>
                    </div>
                </div>
            </td>
            <td>Single Use</td>
            <td>John Doe</td>
            <td>
                <label class="badge bg-danger">Admin</label>
            </td>
            <td>46</td>
            <td>356</td>
            <td>
                <h5 class="m-b-0">{{ randomPrice() }}</h5>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="m-r-10"><a class="btn btn-circle d-flex btn-orange text-white">LD</a>
                    </div>
                    <div class="">
                        <h4 class="m-b-0 font-16">Lê Văn Đức</h4>
                    </div>
                </div>
            </td>
            <td>Single Use</td>
            <td>Venessa Fern</td>
            <td>
                <label class="badge bg-info">Admin</label>
            </td>
            <td>46</td>
            <td>356</td>
            <td>
                <h5 class="m-b-0">{{ randomPrice() }}</h5>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="m-r-10"><a class="btn btn-circle d-flex btn-success text-white">TM</a>
                    </div>
                    <div class="">
                        <h4 class="m-b-0 font-16">Trần Thị Mai</h4>
                    </div>
                </div>
            </td>
            <td>Single Use</td>
            <td>John Doe</td>
            <td>
                <label class="badge bg-success">Admin</label>
            </td>
            <td>46</td>
            <td>356</td>
            <td>
                <h5 class="m-b-0">{{ randomPrice() }}</h5>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <div class="m-r-10"><a class="btn btn-circle d-flex btn-purple text-white">PH</a>
                    </div>
                    <div class="">
                        <h4 class="m-b-0 font-16">Phạm Văn Hòa</h4>
                    </div>
                </div>
            </td>
            <td>Single Use</td>
            <td>John Doe</td>
            <td>
                <label class="badge bg-purple">Admin</label>
            </td>
            <td>46</td>
            <td>356</td>
            <td>
                <h5 class="m-b-0">{{ randomPrice() }}</h5>
            </td>
        </tr>

    </tbody>
</table>
@endsection