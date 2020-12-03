@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Quản lý danh mục</h2>
        </div>
    </div>
</div>
@endsection
@section('content')
    <h3 class="title-5 m-b-35"></h3>
    <div class="table-data__tool">
        <div class="table-data__tool-right">
        <a href="{{ route('backend.categories.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Thêm danh mục</a>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tên danh mục</th>
                    <th>Độ sâu</th>
                    <th>Thời gian cập nhật</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
            <tr class="tr-shadow">
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="desc">{{ $category->depth }}</td>
                <td>{{ $category->updated_at }}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('backend.categories.edit', $category->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a href="{{ route('backend.categories.delete', $category->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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

    {!! $categories->links() !!}
@endsection
