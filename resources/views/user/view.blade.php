@php
$title = "Thêm/Sửa Thông Tin Người Dùng";
@endphp
@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-md-7">
        <form action="{{ route('user.add') }}" method="post" id="MyForm">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" name="id" hidden value="{{ ($user != null)?$user->id:'' }}">
                <input type="text" name="name" class="form-control" required value="{{ ($user != null)?$user->name:'' }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required value="{{ ($user != null)?$user->email:'' }}">
            </div>
            <div class="form-group">
                <label for="phone_number">Số Điện Thoại:</label>
                <input type="tel" name="phone_number" class="form-control" value="{{ ($user != null)?$user->phone_number:'' }}">
            </div>
            <div class="form-group">
                <label for="address">Địa Chỉ:</label>
                <input type="text" name="address" class="form-control" value="{{ ($user != null)?$user->address:'' }}">
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" name="password" class="form-control" min="6">
            </div>
            <div class="form-group">
                <label for="confirm_pwd">Xác Nhận Mật Khẩu:</label>
                <input type="password" name="confirm_pwd" class="form-control" min="6">
            </div>
            <div class="form-group">
                <label for="role_id">Vai Trò:</label>
                <select class="form-control" required name="role_id">
                    <option value="">-- Chọn Vai Trò --</option>
                    @foreach($roleList as $item)
                        @if($user != null && $user->role_id == $item->id)
                            <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Lưu Người Dùng</button>
                <a href="{{ route('user.index') }}">Quay Lại Danh Sách</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(function() {
        $('#MyForm').submit(function() {
            if($('[name=password]').val() != $('[name=confirm_pwd]').val()) {
                alert('Mật khẩu không khớp');
                return false;
            }
            return true;
        });
    });
</script>
@stop
