@php
$title = "Quản Lý Tin Tức";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('news.view') }}" class="btn btn-success mb-3">Thêm tin tức mới</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Ngày cập nhật</th>
                        <th style="width: 100px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataList as $item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{ $item->thumbnail }}" style="width: 180px;" alt="{{ $item->title }}"></td>
                            <td>{{ getTimeFormat($item->updated_at) }}</td>
                            <td>
                                <a href="{{ route('news.view', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                                <button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Xóa</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{!! $dataList->links() !!}
@endsection

@section('js')
<script type="text/javascript">
    function deleteItem(id) {
        var option = confirm('Bạn có chắc chắn muốn xóa mục này không?');
        if (!option) return;

        $.post('{{ route('news.delete') }}', {
            '_token': '{{ csrf_token() }}',
            'id': id
        }, function(data) {
            location.reload();
        })
    }
</script>
@stop
