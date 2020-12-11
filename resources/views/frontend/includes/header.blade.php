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
                                        @if (!Auth::user())
                                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                        <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                        @else
                                        <li><a href="{{ route('frontend.user.edit',Auth::user()->id) }}">{{ Auth::user()->name }}</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="#"><i class="mdi mdi-settings"></i></a>
                                    <ul>
                                        @if (Auth::user())
                                        <li><a href="{{route('frontend.user.edit',Auth::user()->id)}}">Tài khoản</a></li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endif
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
                                    <li><a href="{{route('frontend.new.index')}}">Sắp bán</a>
                                    </li>
                                    <li><a href="{{route('frontend.old.index')}}">Điện thoại cũ</a>
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
                    <a class="cart-itme-a" href="{{ route('frontend.cart.index') }}">
                        <i class="mdi mdi-cart"></i>
                        {{Cart::count()}} mặt hàng :  <strong>{{Cart::total(0)}}đ</strong>
                    </a>
                    <div class="cartdrop">
                        <div class="total">
                            <span>Tổng <strong>= {{Cart::total(0)}}đ</strong></span>
                        </div>
                    <a class="goto" href="{{ route('frontend.cart.index') }}">đi tới giỏ hảng</a>
                        <a class="out-menu" href="checkout.html">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
