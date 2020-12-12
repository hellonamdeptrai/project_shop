@extends('frontend.layouts.master')
@section('content')
    <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
                            <h2>Giỏ hàng</h2>
                            <ul class="text-left">
								<li><a href="{{route('frontend.index')}}">Trang chủ </a></li>
								<li><span> // </span>Giỏ hàng</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- cart content section start -->
		<section class="pages cart-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>sản phẩm</th>
										<th>giá</th>
										<th>số lượng</th>
										<th>tổng giá</th>
										<th>xóa</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($items as $item)
									<tr>

										<td class="td-img text-left">
											<a href="{{route('frontend.product.detail',$item->id)}}"><img src="/storage/images/avatars/{{$item->options->image}}" alt="Add Product" /></a>
											<div class="items-dsc">
                                            <h5><a href="#">{{ $item->name }}</a></h5>
												<p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p>
											</div>
										</td>
										<td>{{ number_format($item->price) }}đ</td>
										<td>
											<form action="#" method="POST">
												<div class="plus-minus">
													<a class="dec qtybutton">-</a>
                                                <input type="text" value="{{ $item->qty }}" name="qtybutton" class="plus-minus-box">
													<a href="{{route('frontend.cart.add',$item->id)}}" class="inc qtybutton">+</a>
												</div>
											</form>
										</td>
										<td>
                                        <strong>{{ number_format($item->price * $item->qty) }}đ</strong>
										</td>
                                    <td><a href="{{ route('frontend.cart.remove', $item->rowId) }}" class="mdi mdi-close" title="Remove this product"></a></td>
									</tr>
                                    @endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row margin-top">
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
							<div class="log-title">
								<h3><strong>Đi đên thanh toán</strong></h3>
							</div>
							<div class="cart-form-text custom-input">
								<div class="submit-text coupon">
                                    <a href="{{route('frontend.order.create')}}">Làm thủ tục</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="single-cart-form padding60">
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
				</div>
			</div>
		</section>
		<!-- cart content section end -->

@endsection
