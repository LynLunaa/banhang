@php
$title = "Quản Lý Phản Hồi";
@endphp

@extends('layouts.master-admin')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Danh Sách Phản Hồi</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Chủ Đề</th>
                    <th>Ghi Chú</th>
                    <th>Cập Nhật Lúc</th>
                    <th>Trạng Thái</th>
                    <th style="width: 100px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataList as $item)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->subject_name }}</td>
                        <td>{{ $item->note }}</td>
                        <td>{{ getTimeFormat($item->updated_at) }}</td>
                        <td>
                            @if($item->status == 0)
                                <span class="badge bg-warning text-dark">Chưa Đọc</span>
                            @else
                                <span class="badge bg-success">Đã Đọc</span>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-warning" onclick="updateItem({{ $item->id }})">Đánh Dấu Đã Đọc</button>
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
    function updateItem(id) {
        $.post('{{ route('feedback.update') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        });
    }

    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa mục này không?');
        if (!option) return;

        $.post('{{ route('feedback.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        });
    }
</script>
@stop
