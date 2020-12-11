@extends('frontend.layouts.master')
@section('content')
        <!-- shop content section start -->
		<div class="pages products-page section-padding text-center">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="right-products">
							<div class="row">
								<div class="grid-content">
                                    @foreach ($products as $product)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$product->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$product->id)}}"><img src="/storage/images/avatars/{{$product->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$product->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="{{route('frontend.product.detail',$product->id)}}">{{$product->name}}</a></p>
                                                <span>{{number_format($product->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach

								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									{!! $products->links() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- shop content section end -->
        @foreach ($details as $detail)
        <!-- quick view start -->
		<div class="product-details quick-view modal animated zoomInUp" id="quick-view{{$detail->id}}">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="quick-image">
                                                    <div class="single-quick-image text-center">
                                                        <div class="list-img">
                                                            <div class="product-img tab-content">
                                                                <div class="simpleLens-container tab-pane active fade in" id="sin-1">
                                                                    <div class="pro-type">
                                                                        <span>-{{$detail->discount_percent}}%</span>
                                                                    </div>
                                                                    <a class="simpleLens-image" data-lens-image="/storage/images/avatars/{{$detail->avatar}}" href="#"><img src="/storage/images/avatars/{{$detail->avatar}}" alt="" class="simpleLens-big-image"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="quick-right">
                                                    <div class="list-text">
                                                        <h3>{{$detail->name}}</h3>
                                                        <div class="ratting floatright">
                                                            <p>( 27 Rating )</p>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star-half"></i>
                                                            <i class="mdi mdi-star-outline"></i>
                                                        </div>
                                                        <h5><del>{{number_format($detail->origin_price,0)}}đ</del> {{number_format($detail->sale_price,0)}}đ</h5>
                                                        <div>{!!$detail->promotion!!}</div>
                                                        <div class="list-btn">
                                                            <a href="{{ route('frontend.cart.add',$product->id) }}">Thêm vào giỏ hàng</a>
                                                            <a href="{{route('frontend.product.detail',$product->id)}}">Xem chi tiết</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quick view end -->
        @endforeach

@endsection
