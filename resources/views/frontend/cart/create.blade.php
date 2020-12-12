@extends('frontend.layouts.master')
@section('content')
    <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
                            <h2>Đặt hàng</h2>
                            <ul class="text-left">
								<li><a href="{{route('frontend.index')}}">Trang chủ </a></li>
								<li><span> // </span>Đặt hàng</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- Checkout content section start -->
		<section class="pages checkout section-padding">
			<div class="container">
				<div class="row margin-top">
					<div class="col-xs-12 col-sm-6">
						<div class="padding60">
							<div class="log-title">
								<h3><strong>Tổng đơn hàng</strong></h3>
							</div>
							<div class="cart-form-text pay-details table-responsive">
								<table>
									<tbody>
										<tr>
											<th>Phí vận chuyển</th>
											<td>0đ</td>
										</tr>
										<tr>
											<th>Thuế</th>
											<td>{{Cart::tax(0)}}đ</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th class="tfoot-padd">Tổng đơn hàng</th>
											<td class="tfoot-padd">{{Cart::total(0)}}đ</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="padding60">
							<div class="log-title">
								<h3><strong>Thanh toán tất cả đơn hàng</strong></h3>
							</div>
							<div class="categories">
                                @if (Auth::user())
                                <p>Địa chỉ nhận hàng: <span>{{Auth::user()->address}}</span></p>
                                <form class="submit-text" action="{{ route('frontend.order.store') }}" method="post">
                                    @csrf
                                    <button type="submit">thanh toán</button>
                                </form>
                                @else
                                <p>Đăng nhập để thanh toán!</p>
                                @endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Checkout content section end -->

@endsection
