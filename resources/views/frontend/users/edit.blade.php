@extends('frontend.layouts.master')
@section('content')
<!-- pages-title-start -->
<div class="pages-title section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="pages-title-text text-center">
                    <h2>Người dùng</h2>
                    <ul class="text-left">
                        <li><a href="{{route('frontend.index')}}">Trang chủ </a></li>
                        <li><span> // </span>Người dùng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-input padding60 new-customer">
                    <div class="log-title">
                        <h3><strong>Chỉnh sửa tài khoản</strong></h3>
                    </div>
                    <div class="custom-input">
                        <form action="{{ route('frontend.user.update',$user->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input value="{{$user->name}}" type="text" name="name" placeholder="Nhập tên" />
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input value="{{$user->email}}" type="email" name="email" placeholder="Nhập email" />
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input type="password" name="password" placeholder="Nhập mật khẩu" />
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input value="{{$user->phone}}" type="number" name="phone" placeholder="Nhập số điện thoại" />
                            @error('phone')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input value="{{$user->address}}" type="text" name="address" placeholder="Nhập quê quán" />
                            @error('address')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input type="file" name="avatar" />
                            @error('avatar')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <div class="submit-text coupon">
                                <button type="submit">
                                    <i class="fa fa-dot-circle-o"></i> Sửa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login content section end -->
@endsection
