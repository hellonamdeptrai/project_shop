<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="/backend/images/icon/logo-nam.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                    <a href="{{ route('backend.dashboard') }}">
                        <i class="fas fa-home"></i>Trang chủ</a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Quản lý</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.user.index') }}">Người dùng</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.product.index') }}">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.categories.index') }}">Danh mục</a>
                        </li>
                        <li>
                            <a href="index4.html">Đặt hàng</a>
                        </li>
                        <li>
                            <a href="index4.html">Doanh thu</a>
                        </li>
                    </ul>
                </li>
                <li>
                <a href="{{ route('frontend.index') }}">
                        <i class="fas fa-shopping-cart"></i>Trang shopping</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
