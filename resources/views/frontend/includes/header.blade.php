<header class="header-one">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="{{route('frontend.index')}}"><img src="/frontend/img/logo-nam.png" alt="Sellshop" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="middel-top clearfix">
                        <div class="left floatleft">
                            <p><i class="mdi mdi-phone"></i> Liên hệ : 0987654321</p>
                        </div>
                        <div class="center floatleft">
                            <form action="#" method="get">
                                <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" placeholder="Tìm kiếm điện thoại..." />
                            </form>
                        </div>
                        <div class="right floatleft">
                            <ul class="clearfix">
                                <li><a href="#"><i class="mdi mdi-account"></i></a>
                                    <ul>
                                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                        <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="mdi mdi-settings"></i></a>
                                    <ul>
                                        <li><a href="my-account.html">Tài khoản</a></li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="{{route('frontend.index')}}">Trang chủ</a>
                                </li>
                                <li><a href="{{route('frontend.product.index')}}">Điện thoại</a>
                                    <ul class="dropdown">
                                        @foreach ($categories as $category)
                                        <li><a href="{{route('frontend.category.index',$category->id)}}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('frontend.new.index')}}">Sắp bán</a>
                                </li>
                                <li><a href="{{route('frontend.old.index')}}">Điện thoại cũ</a>
                                </li>
                                <li><a href="about.html">Thông tin</a></li>
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{route('frontend.index')}}">Trang chủ</a>
                                    </li>
                                    <li><a href="{{route('frontend.product.index')}}">Điện thoại</a>
                                        <ul class="dropdown">
                                            @foreach ($categories as $category)
                                            <li><a href="blog-style-1.html">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="#">Sắp bán</a>
                                    </li>
                                    <li><a href="blog.html">Điện thoại cũ</a>
                                    </li>
                                    <li><a href="about.html">Thông tin</a></li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="cart.html">
                        <i class="mdi mdi-cart"></i>
                        02 items :  <strong>$86.00</strong>
                    </a>
                    <div class="cartdrop">
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/1.png" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="#"><h5>men’s black t-shirt</h5></a>
                                <span>Color :  Black</span>
                                <span>Size :     SL</span>
                                <strong>$122.00</strong>
                            </div>
                        </div>
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/2.png" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="#"><h5>men’s black t-shirt</h5></a>
                                <span>Color :  Black</span>
                                <span>Size :     SL</span>
                                <strong>$132.00</strong>
                            </div>
                        </div>
                        <div class="total">
                            <span>total <strong>= $306.00</strong></span>
                        </div>
                    <a class="goto" href="{{ route('frontend.cart.index') }}">go to cart</a>
                        <a class="out-menu" href="checkout.html">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
