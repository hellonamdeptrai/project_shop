<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="/backend/images/icon/logo-nam.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
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
        </nav>
    </div>
</aside>
