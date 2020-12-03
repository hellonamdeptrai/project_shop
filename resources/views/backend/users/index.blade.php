@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Quản lý người dùng</h2>
        </div>
    </div>
</div>
@endsection
@section('content')
    <h3 class="title-5 m-b-35"></h3>
    <div class="table-data__tool">
        <div class="table-data__tool-right">
        <a href="{{ route('backend.user.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Thêm người dùng</a>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tên người dùng</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thời gian cập nhật</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr class="tr-shadow">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <span class="block-email">{{ $user->email }}</span>
                </td>
                @if($user->status == 1)
                    <td class="process">Hoạt đông</td>
                @else
                    <td class="denied">Đã khóa</td>
                @endif
                <td>{{ $user->updated_at }}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Xem">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('backend.user.edit', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a href="{{ route('backend.user.delete', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
                            <i class="zmdi zmdi-delete"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {!! $users->links() !!}
@endsection
