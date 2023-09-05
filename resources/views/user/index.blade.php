@php
$title = "Quản Lý Người Dùng";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Danh Sách Người Dùng</h4>
        <a href="{{ route('user.view') }}"><button class="btn btn-success mb-3">Thêm mới người dùng</button></a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Vai Trò</th>
                    <th>Cập Nhật Lúc</th>
                    <th style="width: 100px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataList as $item)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->role_name }}</td>
                        <td>{{ getTimeFormat($item->updated_at) }}</td>
                        <td>
                            <a href="{{ route('user.view') }}?id={{ $item->id }}"><button class="btn btn-warning">Sửa</button></a>
                            <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Xóa</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{!! $dataList->links() !!}
@endsection

@section('js')
<script type="text/javascript">
    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa mục này không?');
        if(!option) return;

        $.post('{{ route('user.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        });
    }
</script>
@stop
