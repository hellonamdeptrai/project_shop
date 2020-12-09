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
                                        <a href="{{route('frontend.product.detail',$product->id)}}"><img src="/frontend/img/products/1.jpg" alt="Product Title" /></a>
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
                                        <a href="#"><img src="/frontend/img/products/1.jpg" alt="Product Title" /></a>
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
                            <li class="active"><a href="#dress1" data-toggle="tab" data-target="#dress1, #text1"><img src="/frontend/img/coming/s1.jpg" alt="" /></a></li>
                            <li><a href="#dress2" data-toggle="tab" data-target="#dress2,#text2"><img src="/frontend/img/coming/s2.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7 col-md-5">
                    <div class="text-center large-img tab-content">
                        <div class="tab-pane fade in active" id="dress1">
                            <img src="/frontend/img/coming/l1.jpg" alt="" />
                        </div>
                        <div class="tab-pane fade" id="dress2">
                            <img src="/frontend/img/coming/l2.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="padding">
                        <div class="tab-content" >
                            <?php $i= 1?>
                            @foreach ($productsrandom as $product)
                            <div class="single-coming tab-pane fade in active" id="text<?= $i++?>">
                                <h4><a href="#">{{$product->name}}</a></h4>
                                <span><strong>$569.00</strong>   <del>$669.00</del></span>
                                <p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam.</p>
                                <ul class="color-size">
                                    <li><span>Size</span><strong>:</strong> <a href="#">SL</a><a href="#">ML</a><a href="#">Xl</a></li>
                                    <li><span>color</span><strong>:</strong> <a href="#">Red</a><a href="#">Grean</a><a href="#">Blue</a></li>
                                    <li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
                                    <li><span>category</span><strong>:</strong>Fashion   Men’s</li>
                                </ul>
                                <div class="count-text clearfix">
                                    <ul id="countdown-1">
                                        <li>
                                            <p class="timeRefDays timedescription">days</p>
                                            <span class="days timenumbers">00</span>
                                        </li>
                                        <li>
                                            <p class="timeRefHours timedescription">hrs</p>
                                            <span class="hours timenumbers">00</span>
                                        </li>
                                        <li>
                                            <p class="timeRefMinutes timedescription">mins</p>
                                            <span class="minutes timenumbers">00</span>
                                        </li>
                                        <li>
                                            <p class="timeRefSeconds timedescription">secs</p>
                                            <span class="seconds timenumbers">00</span>
                                        </li>
                                    </ul>
                                </div>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>$165.20</span>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>$165.20</span>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$comingsoon->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$comingsoon->name}}</a></p>
                                                <span>$165.20</span>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>$165.20</span>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>$165.20</span>
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
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="/frontend/img/products/5.jpg" alt="Product Title" /></a>
                                                <div class="actions-btn">
                                                    <a href="#"><i class="mdi mdi-cart"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$old->id}}"><i class="mdi mdi-eye"></i></a>
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{$old->name}}</a></p>
                                                <span>$165.20</span>
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
                                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image" data-lens-image="/frontend/img/products/z1.jpg" href="#"><img src="/frontend/img/products/z1.jpg" alt="" class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                                <div class="pro-type sell">
                                                                    <span>sell</span>
                                                                </div>
                                                                <a class="simpleLens-image" data-lens-image="/frontend/img/products/z2.jpg" href="#"><img src="/frontend/img/products/z2.jpg" alt="" class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                                <div class="pro-type">
                                                                    <span>-15%</span>
                                                                </div>
                                                                <a class="simpleLens-image" data-lens-image="/frontend/img/products/z3.jpg" href="#"><img src="/frontend/img/products/z3.jpg" alt="" class="simpleLens-big-image"></a>
                                                            </div>
                                                            <div class="simpleLens-container tab-pane fade in" id="sin-4">
                                                                <div class="pro-type">
                                                                    <span>new</span>
                                                                </div>
                                                                <a class="simpleLens-image" data-lens-image="/frontend/img/products/z4.jpg" href="#"><img src="/frontend/img/products/z4.jpg" alt="" class="simpleLens-big-image"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quick-thumb">
                                                    <ul class="product-slider">
                                                        <li><a data-toggle="tab" href="#sin-1"> <img src="/frontend/img/products/s1.jpg" alt="quick view" /> </a></li>
                                                        <li class="active"><a data-toggle="tab" href="#sin-2"> <img src="/frontend/img/products/s2.jpg" alt="small image" /> </a></li>
                                                        <li><a data-toggle="tab" href="#sin-3"> <img src="/frontend/img/products/s3.jpg" alt="small image" /> </a></li>
                                                        <li><a data-toggle="tab" href="#sin-4"> <img src="/frontend/img/products/s4.jpg" alt="small image" /> </a></li>
                                                    </ul>
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
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="all-choose">
                                                        <div class="s-shoose">
                                                            <h5>Color</h5>
                                                            <div class="color-select clearfix">
                                                                <span></span>
                                                                <span class="outline"></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>size</h5>
                                                            <div class="size-drop">
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn">XL</button>
                                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class=""><i class="mdi mdi-chevron-down"></i></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Xl</a></li>
                                                                        <li><a href="#">SL</a></li>
                                                                        <li><a href="#">S</a></li>
                                                                        <li><a href="#">L</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="s-shoose">
                                                            <h5>qty</h5>
                                                            <form action="#" method="POST">
                                                                <div class="plus-minus">
                                                                    <a class="dec qtybutton">-</a>
                                                                    <input type="text" value="02" name="qtybutton" class="plus-minus-box">
                                                                    <a class="inc qtybutton">+</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="list-btn">
                                                        <a href="#">add to cart</a>
                                                        <a href="#">wishlist</a>
                                                        <a href="#">zoom</a>
                                                    </div>
                                                    <div class="share-tag clearfix">
                                                        <ul class="blog-share floatleft">
                                                            <li><h5>share </h5></li>
                                                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                                            <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                                        </ul>
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
