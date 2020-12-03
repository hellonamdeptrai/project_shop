@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh sách sản phẩm</h2>
        </div>
    </div>
    <div class="col-md-12 d-flex flex-row-reverse">
        @if ( session()->has('mess') )
            <div class=" alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('mess') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ( session()->has('err') )
            <div class=" alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('err') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
</div>
@endsection
@section('content')
<h3 class="title-5 m-b-35"></h3>
    <div class="table-data__tool">
        <div class="table-data__tool-right">
        <a href="{{ route('backend.product.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>Thêm sản phẩm</a>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tên sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Thời gian cập nhật</th>
                    <th>Giá bán</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr class="tr-shadow">
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>

                @if($product->status == 1)
                    <td class="process">Đang nhập</td>
                @elseif($product->status == 2)
                    <td class="denied">Mở bán</td>
                @else
                    <td class="denied">Hết hàng</td>
                @endif

                <td>{{ $product->updated_at }}</td>
                <td>{{ $product->sale_price }}đ</td>
                <td>
                    <div class="table-data-feature">
                        <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Xem">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('backend.product.edit', $product->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Sửa">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <a href="{{ route('backend.product.edit', $product->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
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

    {!! $products->links() !!}
@endsection
