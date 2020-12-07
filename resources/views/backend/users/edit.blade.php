@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Chỉnh sửa người dùng</h2>
        </div>
    </div>
</div>
@endsection
@section('content')
    <h3 class="title-5 m-b-35"></h3>
    <div class="table-data__tool">
        <div class="table-data__tool-right">
        <a href="{{ route('backend.user.index') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
            Quay lại</a>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Sửa</strong> người dùng
            </div>
            <div class="card-body card-block">
                <form action="{{ route('backend.user.update', $user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tên người dùng</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input value="{{$user->name}}" type="text" id="text-input" name="name" placeholder="Nhập tên" class="form-control">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="email-input" class=" form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input value="{{$user->email}}" type="email" id="email-input" name="email" placeholder="Nhập email" class="form-control">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="password-input" class=" form-control-label">Mật khẩu</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="password" id="password-input" name="password" placeholder="Nhập mật khẩu" class="form-control">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Số điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input value="{{$user->phone}}" type="number" id="text-input" name="phone" placeholder="Nhập số điện thoại" class="form-control">
                            @error('phone')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Quê quán</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input value="{{$user->address}}" type="text" id="text-input" name="address" placeholder="Nhập quê" class="form-control">
                            @error('address')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Quyền</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="postion" id="select" class="form-control">
                                <option>Chọn quyền</option>
                                <option {{ $user->postion == 3 ? 'selected':'' }} value="3">Admin</option>
                                <option {{ $user->postion == 2 ? 'selected':'' }} value="2">Nhân viên</option>
                                <option {{ $user->postion == 1 ? 'selected':'' }} value="1">Người dùng</option>
                            </select>
                            @error('postion')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Chọn avatar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input value="{{$user->avatar}}" type="file" id="file-input" name="avatar" class="form-control-file">
                            @error('avatar')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Trạng thái</label>
                        </div>
                        <div class="col col-md-9">
                            <div class="form-check">
                                <div class="radio">
                                    <label for="radio1" class="form-check-label ">
                                        <input {{ $user->status == 1 ? 'checked':'' }} type="radio" id="radio1" name="status" value="1" class="form-check-input">Hoạt động
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="radio2" class="form-check-label ">
                                        <input {{ $user->status == -1 ? 'checked':'' }} type="radio" id="radio2" name="status" value="-1" class="form-check-input">Đã khóa
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Sửa
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Xóa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
