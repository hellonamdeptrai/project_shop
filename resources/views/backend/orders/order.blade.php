@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Danh sách sản phẩm trong đơn hàng</h2>
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
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Thời gian cập nhật</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $order)
            <tr class="tr-shadow">
                <td>{{ $order->id }}</td>
                <td>{{ $order->money }}</td>

                @if($order->status == 1)
                    <td class="process">Đang vận chuyển</td>
                @else
                    <td class="denied">Thanh toán thành công</td>
                @endif

                <td>{{ $order->updated_at }}</td>
                <td>
                    <div class="table-data-feature">
                        <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Xem">
                            <i class="fa fa-eye"></i>
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
