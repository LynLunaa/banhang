@php
$title = "Quản Lý Sản Phẩm";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>{{ $title }}</h2>
    </div>
    <div class="col-md-6 text-end">
        <a href="{{ route('product.view') }}" class="btn btn-success mb-3">Thêm sản phẩm mới</a>
    </div>
</div>

<table class="table table-hover align-middle text-nowrap">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Giá</th>
            <th scope="col">Giảm giá</th>
            <th scope="col">Cập nhật lúc</th>
            <th scope="col" style="width: 100px"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($dataList as $index => $item)
        <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $item->title }}</td>
            <td><img src="{{ $item->thumbnail }}" alt="{{ $item->title }}" style="width: 120px;"></td>
            <td>{{ $item->category_name }}</td>
            <td>{{ number_format($item->price, 0) }}</td>
            <td>{{ number_format($item->discount, 0) }}</td>
            <td>{{ getTimeFormat($item->updated_at) }}</td>
            <td>
                <a href="{{ route('product.view', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Xóa</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $dataList->links() }}
@endsection

@section('js')
<script type="text/javascript">
    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
        if (!option) return;

        $.post('{{ route('product.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        });
    }
</script>
@stop
