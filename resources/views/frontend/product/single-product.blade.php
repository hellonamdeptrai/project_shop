@extends('frontend.layouts.master')
@section('content')
    <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>{{$product->name}}</h2>
							<ul class="text-left">
								<li><a href="{{route('frontend.index')}}">Trang chủ </a></li>
								<li><span> // </span><a href="{{route('frontend.product.index')}}">Điện thoại </a></li>
								<li><span> // </span>{{$product->name}}</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
        <!-- product-details-section-start -->
		<div class="product-details pages section-padding-top">
			<div class="container">
				<div class="row">
					<div class="single-list-view">
						<div class="col-xs-12 col-sm-5 col-md-4">
							<div class="quick-image">
								<div class="single-quick-image text-center">
									<div class="list-img">
										<div class="product-img tab-content">
                                            <?php $i = 1?>
                                            @foreach ($images as $image)
											<div class="simpleLens-container tab-pane <?= $i++ == 2 ?'active':''?> fade in" id="sin-{{$image->id}}">
												<div class="pro-type">
													<span>new</span>
												</div>
												<a class="simpleLens-image" data-lens-image="/storage/images/{{$image->name}}" href="#"><img src="/storage/images/{{$image->name}}" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                            @endforeach

										</div>
									</div>
								</div>
								<div class="quick-thumb">
									<ul class="product-slider">
                                        @foreach ($images as $image)
										<li><a data-toggle="tab" href="#sin-{{$image->id}}"> <img src="/storage/images/{{$image->name}}" alt="quick view" /> </a></li>
                                        @endforeach
                                    </ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8">
							<div class="quick-right">
								<div class="list-text">
									<h3>{{$product->name}}</h3>
									<div class="ratting floatright">
										<p>( 27 Rating )</p>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star"></i>
										<i class="mdi mdi-star-half"></i>
										<i class="mdi mdi-star-outline"></i>
									</div>
                                    <h5><del>{{number_format($product->origin_price,0)}}đ</del> {{number_format($product->sale_price,0)}}đ</h5>
                                    <div>{!!$product->promotion!!}</div>
									<div class="list-btn">
										<a href="{{ route('frontend.cart.add',$product->id) }}">Thêm vào giỏ hàng</a>
                                        <a href="#">Thêm vào yêu thích</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single-product item end -->
				<!-- reviews area start -->
				<div class="row">
					<div class="col-xs-12">
						<div class="reviews padding60 margin-top">
							<ul class="reviews-tab clearfix">
								<li><a data-toggle="tab" href="#content">Đánh giá chi tiết</a></li>
								<li class="active"><a data-toggle="tab" href="#specifications">Thông số kỹ thuật</a></li>
								<li><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
							</ul>
							<div class="tab-content">
								<div class="info-reviews moreinfo tab-pane fade in" id="content">
                                    <div>{!! $product->content !!}</div>
                                </div>
                                <div class="info-reviews tags tab-pane fade in active" id="specifications">
                                    <div>{!! $product->specifications !!}</div>
								</div>
								<div class="info-reviews review-text tab-pane fade in" id="reviews">
									<div class="about-author">
										<div class="autohr-text">
											<img src="img/blog/author1.png" alt="" />
											<div class="author-des">
												<h4><a href="#">Gregory Hernandez</a></h4>
												<span class="floatright ratting">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
													<i class="mdi mdi-star-outline"></i>
												</span>
												<span>27 Jun, 2016 at 2:30pm</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibenes dum feugiat ut eget eni Praesent et messages in consectetur.</p>
											</div>
										</div>
									</div>
									<hr />
									<div class="about-author">
										<div class="autohr-text">
											<img src="img/blog/author2.png" alt="" />
											<div class="author-des">
												<h4><a href="#">Gregory Hernandez</a></h4>
												<span class="floatright ratting">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
													<i class="mdi mdi-star-outline"></i>
												</span>
												<span>27 Jun, 2016 at 2:30pm</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibenes dum feugiat ut eget eni Praesent et messages in consectetur.</p>
											</div>
										</div>
									</div>
									<hr />
									<div class="about-author">
										<div class="autohr-text">
											<img src="img/blog/author3.png" alt="" />
											<div class="author-des">
												<h4><a href="#">Gregory Hernandez</a></h4>
												<span class="floatright ratting">
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star"></i>
													<i class="mdi mdi-star-half"></i>
													<i class="mdi mdi-star-outline"></i>
												</span>
												<span>27 Jun, 2016 at 2:30pm</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas eleifend. Phasellus a felis at est bibenes dum feugiat ut eget eni Praesent et messages in consectetur.</p>
											</div>
										</div>
									</div>
									<div class="your-rating log-title">
										<h3>leave your review</h3>
										<h5>Your rating</h5>
										<div class="rating clearfix">
											<ul>
												<li>
													<a href="#">
														<i class="mdi mdi-star-outline"></i>
													</a>
													<span>|</span>
												</li>
												<li>
													<a href="#">
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
													</a>
													<span>|</span>
												</li>
												<li>
													<a href="#">
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
													</a>
													<span>|</span>
												</li>
												<li>
													<a href="#">
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
													</a>
													<span>|</span>
												</li>
												<li>
													<a href="#">
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
														<i class="mdi mdi-star-outline"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="custom-input">
										<form action="mail.php" method="post">
											<div class="row">
												<div class="col-sm-6">
													<div class="input-mail">
														<input type="text" name="name" placeholder="Your Name" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="input-mail">
														<input type="text" name="email" placeholder="Your Email" />
													</div>
												</div>
												<div class="col-xs-12">
													<div class="custom-mess">
														<textarea name="message" placeholder="Your Review" rows="2"></textarea>
													</div>
												</div>
												<div class="col-xs-12">
													<div class="submit-text">
														<button type="submit">submit review</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- reviews area end -->
			</div>
		</div>
		<!-- product-details section end -->
        <!-- related-products section start -->
		<section class="single-products section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title text-center">
							<h2>Cùng hãng</h2>
						</div>
					</div>
				</div>
				<div class="row text-center">
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
		</section>
		<!-- related-products section end -->
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
