@php
$title = "Quản Lý Role";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>{{ $title }}</h2>
        <form method="post" action="{{ route('role.add') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="number" name="id" hidden value="{{ $id }}">
                <label for="roleName">Role Name:</label>
                <input type="text" name="name" class="form-control" id="roleName" placeholder="Nhập tên role" value="{{ $name }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Lưu dữ liệu</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <h2>Danh sách Role</h2>
        <table class="table table-hover align-middle text-nowrap">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tên Role</th>
                    <th scope="col" style="width: 100px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataList as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('role.index') }}?id={{ $item->id }}" class="btn btn-warning">Sửa</a>
                        <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Xóa</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
        if (!option) return;

        $.post('{{ route('role.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        });
    }
</script>
@stop
