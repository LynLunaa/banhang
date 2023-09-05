@php
$title = "Quản Lý Đơn Hàng";
@endphp
@extends('layouts.master-admin')

@section('css')
<style>
    .custom-table {
        font-size: 14px;
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .custom-table th {
        background-color: #f5f5f5;
        text-align: center;
        padding: 10px;
    }

    .custom-table td {
        text-align: center;
        padding: 10px;
    }

    .btn-action {
        margin-right: 5px;
    }

    .btn-success, .btn-danger {
        background-color: #007BFF;
        color: #fff;
    }
</style>
@endsection

@section('content')
<div class="container">
    <table class="table table-hover table-responsive custom-table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ và Tên</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Địa Chỉ</th>
                <th>Ghi Chú</th>
                <th>Ngày Đặt Hàng</th>
                <th>Trạng Thái</th>
                <th>Tổng Tiền</th>
                <th style="width: 100px">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataList as $item)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td style="min-width: 100px;">{{ $item->fullname }}</td>
                    <td style="min-width: 100px;">{{ $item->email }}</td>
                    <td style="min-width: 100px;">{{ $item->phone_number }}</td>
                    <td style="min-width: 100px;">{{ $item->address }}</td>
                    <td style="min-width: 100px;">{{ $item->note }}</td>
                    <td>{{ getTimeFormat($item->order_date) }}</td>
                    <td>
                        @php
                        $statusLabelClass = '';
                        switch ($item->status) {
                            case 0:
                                $statusLabelClass = 'label-warning';
                                break;
                            case 1:
                                $statusLabelClass = 'label-success';
                                break;
                            case 2:
                                $statusLabelClass = 'label-danger';
                                break;
                            default:
                                $statusLabelClass = 'label-default';
                                break;
                        }
                        @endphp
                        <span class="label {{ $statusLabelClass }}">
                            @if($item->status == 0)
                                Chờ Duyệt
                            @elseif($item->status == 1)
                                Đã Duyệt
                            @else
                                Hủy Bỏ
                            @endif
                        </span>
                    </td>
                    <td>{{ number_format($item->total_money, 0) }}</td>
                    <td>
                        @if($item->status == 0)
                            <button class="btn btn-success btn-action" onclick="updateItem({{ $item->id }}, 1)">Duyệt</button>
                            <button class="btn btn-danger btn-action" onclick="updateItem({{ $item->id }}, 2)">Hủy</button>
                        @endif
                        <a href="{{ route('order.detail', ['id' => $item->id]) }}" class="btn btn-warning btn-action">Chi Tiết</a>
                        <button class="btn btn-danger btn-action" onclick="deleteItem({{ $item->id }})">Xóa</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
{!! $dataList->links() !!}
@endsection

@section('js')
<script type="text/javascript">
    function updateItem(id, status) {
        var statusText = status == 1 ? 'Duyệt' : 'Hủy';
        var option = confirm('Bạn có chắc chắn muốn cập nhật trạng thái đơn hàng thành "' + statusText + '"?');
        if (!option) return;

        $.post('{{ route('order.update') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id,
            'status': status
        }, function(data) {
            location.reload();
        });
    }

    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa mục này không?');
        if (!option) return;

        $.post('{{ route('order.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        })
    }
</script>
@stop
