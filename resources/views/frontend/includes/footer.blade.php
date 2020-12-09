<footer>
    <!-- social media section start -->
    <div class="social-media section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="social-icons">
                        <a href="#"><i class="mdi mdi-facebook"></i></a>
                        <a href="#"><i class="mdi mdi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="newsletter">
                        <form action="mail.php" method="post">
                            <input type="text" name="email" placeholder="Nhận thông tin mới từ chúng tôi..."/>
                            <input type="submit" value="Gửi email"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- social media section end -->
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ với chúng tôi</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>Ha Noi,</p>
                                        <p>Viet Nam</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>0987654321</p>
                                        <p>0361234567</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>admin@namshop.com</p>
                                        <p>nam@namshop.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản của tôi</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="login.html"><i class="mdi mdi-menu-right"></i>Tài khoản</a></li>
                                    <li><a href="{{ route('login') }}"><i class="mdi mdi-menu-right"></i>Đăng nhập</a></li>
                                    <li><a href="{{ route('register') }}"><i class="mdi mdi-menu-right"></i>Đăng ký</a></li>
                                    <li><a href="{{ route('frontend.cart.index') }}"><i class="mdi mdi-menu-right"></i>Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>Điện thoại</a></li>
                                    <li><a href="#"><i class="mdi mdi-menu-right"></i>Sắp bán</a></li>
                                    <li><a href="#"><i class="mdi mdi-menu-right"></i>Điện thoại cũ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Thông tin</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>Thông tin</a></li>
                                    <li><a href="#"><i class="mdi mdi-menu-right"></i>Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Các hãng</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                    <li><a href="#"><img src="/frontend/img/footer/in1.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="/frontend/img/footer/in2.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="/frontend/img/footer/in3.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="/frontend/img/footer/in4.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="/frontend/img/footer/in5.png" alt="Instagram" /></a></li>
                                    <li><a href="#"><img src="/frontend/img/footer/in6.png" alt="Instagram" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>&copy; Nam shop 2020. Thuộc bản quyền Nam shop.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <img src="/frontend/img/footer/payment.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>
