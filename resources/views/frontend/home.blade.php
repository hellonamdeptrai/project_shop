@extends('frontend.layouts.master')
@section('content')
    <!-- slider-section-start -->
    <div class="main-slider-one slider-area">
        <div id="wrapper">
            <div class="slider-wrapper">
                <div id="mainSlider" class="nivoSlider">
                    <img src="/frontend/img/slider/home1/iphone11.jpg" alt="main slider" title="#htmlcaption"/>
                    <img src="/frontend/img/slider/home1/iphone12.jpg" alt="main slider" title="#htmlcaption2"/>
                </div>
                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left slider-right">
                            <div class="slide-text animated bounceInRight">
                                <h3 class="bounceInDown">điện thoại</h3>
                                <h1>Iphone 11</h1>
                                <span>Trả góp 0%</span>
                            </div>
                            <div class="one-p animated bounceInLeft">
                                <p>Nhận ngay quà khủng.</p>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left slider-right">
                            <div class="slide-text animated bounceInRight">
                                <h3>điện thoại</h3>
                                <h1>Iphone 12</h1>
                                <span>Trả góp 0%</span>
                            </div>
                            <div class="one-p animated bounceInLeft">
                                <p>Điện thoại xịn, nhận quà khủng khiếp.</p>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section end -->

    <!-- featured-products section start -->
    <section class="single-products section-padding extra-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Mới ra mắt</h2>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <ul class="load-list load-list-one">
                    <li>
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
                    </li>
                    <li>
                        <div class="row text-center">
                            @foreach ($products2 as $product)
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
                                        <p><a href="#">{{$product->name}}</a></p>
                                        <span>{{number_format($product->sale_price,0)}}đ</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            @endforeach

                        </div>
                </ul>
                <button id="load-more-one">Tải thêm</button>
            </div>
        </div>
    </section>
    <!-- featured-products section end -->
    <!-- coming product section start -->
    <section class="coming-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <div class="tab-menu nav nav-tabs padding">
                        <ul>
                            <?php $hi= 1?>
                            <?php $hi2= 1?>
                            <?php $hi3= 1?>
                            <?php $hi4= 1?>
                            @foreach ($productsrandom as $product)
                            <li class="<?=$hi == 1?'active':'';$hi++?>"><a href="#dress<?= $hi2++?>" data-toggle="tab" data-target="#dress<?= $hi3++?>, #text<?= $hi4++?>"><img src="/storage/images/avatars/{{$product->avatar}}" alt="" /></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7 col-md-5">
                    <div class="text-center large-img tab-content">
                        <?php $ha= 1?>
                        <?php $ha2= 1?>
                        @foreach ($productsrandom as $product)
                        <div class="tab-pane fade in <?=$ha == 1?'active':'';$ha++?>" id="dress<?= $ha2++?>">
                            <img src="/storage/images/avatars/{{$product->avatar}}" alt="" />
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="padding">
                        <div class="tab-content" >
                            <?php $i= 1?>
                            <?php $ii= 1?>
                            @foreach ($productsrandom as $product)
                            <div class="single-coming tab-pane fade in <?=$ii == 1?'active':'';$ii++?>" id="text<?= $i++?>">
                                <h4><a href="#">{{$product->name}}</a></h4>
                                <span><strong>{{number_format($product->sale_price,0)}}đ</strong>   <del>{{number_format($product->origin_price,0)}}đ</del></span>
                                <p class="come-p">Điện thoại {{$product->name}} xịn. <a href="{{route('frontend.product.detail',$product->id)}}">Mua ngay</a> để nhận được những ưu đãi khủng nào.</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coming product section end -->
    <!-- tab-products section start -->
    <div class="tab-products single-products section-padding extra-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <div class="product-tab nav nav-tabs">
                            <ul>
                                <li class="active"><a data-toggle="tab" href="#arrival">Sắp bán <span>/</span></a></li>
                                <li><a data-toggle="tab" href="#best">Điện thoại cũ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center tab-content">
                <div class="tab-pane  fade in active" id="arrival">
                    <div class="wrapper">
                        <ul class="load-list load-list-two">
                            <li>
                                <div class="row text-center">
                                    @foreach ($comingsoon as $comingsoon)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$comingsoon->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$comingsoon->id)}}"><img src="/storage/images/avatars/{{$comingsoon->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$comingsoon->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>{{number_format($comingsoon->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach ($comingsoon2 as $comingsoon)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$comingsoon->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$comingsoon->id)}}"><img src="/storage/images/avatars/{{$comingsoon->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$comingsoon->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>{{number_format($comingsoon->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach ($comingsoon3 as $comingsoon)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$comingsoon->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$comingsoon->id)}}"><img src="/storage/images/avatars/{{$comingsoon->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$comingsoon->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>{{number_format($comingsoon->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-two">Tải thêm</button>
                    </div>
                </div>
                <!-- arrival product end -->
                <div class="tab-pane fade" id="best">
                    <div class="wrapper">
                        <ul class="load-list load-list-four">
                            <li>
                                <div class="row text-center">
                                    @foreach ($old as $old)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$old->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$old->id)}}"><img src="/storage/images/avatars/{{$old->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$old->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>{{number_format($old->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach ($old2 as $old)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$old->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$old->id)}}"><img src="/storage/images/avatars/{{$old->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$old->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>{{number_format($old->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach ($old3 as $old)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>-{{$old->discount_percent}}%</span>
                                                </div>
                                                <a href="{{route('frontend.product.detail',$old->id)}}"><img src="/storage/images/avatars/{{$old->avatar}}" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('frontend.cart.add',$old->id) }}"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>{{number_format($old->sale_price,0)}}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-four">Tải thêm</button>
                    </div>
                </div>
                <!-- popular product end -->
            </div>
        </div>
    </div>
    <!-- tab-products section end -->
    <!-- service section start -->
    <section class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Dịch Vụ Của Chúng Tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="service-text">
                        <i class="mdi mdi-truck"></i>
                        <h4>GIAO HÀNG TẬN NHÀ</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-text">
                        <i class="mdi mdi-lock"></i>
                        <h4>THANH TOÁN ĐƯỢC BẢO MẬT</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="service-text">
                        <i class="mdi mdi-rotate-left"></i>
                        <h4>HOÀN LẠI TIỀN TRONG 30 NGÀY</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->
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
