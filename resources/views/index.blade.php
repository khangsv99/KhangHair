<!doctype html>
<html>
<head>
	<title>Trang chu</title>
	<link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/js/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body>
	<header class="header" id="header">
            <div class="container">
                <div class="row header__content">
                    <div class="col l-2 m-2 xs-6">
                        <a href="http://localhost:8000/" class="header__logo"><img src="/assets/img/Home/logo.png" alt=""
                                class="header__logo-img img-responsive"></a>
                    </div>
                    <div class="col l-10 m-1 xs-6">
                        <input id='item-dropdown' type='checkbox'>
                        <label for='item-dropdown'>
                            <span class="header__navbar-bars">
                                <i class="fas fa-bars"></i>
                            </span>
                        </label>
                        <nav class="header__navbar">
                            <a href="http://localhost:8000/" class="header__logo header__navbar-logo"><img src="/assets/img/Home/logo.png"
                                    alt="" class="header__logo-img img-responsive"></a>
                            <label for='item-dropdown'>
                                <span class="header__navbar-bars header__navbar-bars--remove">
                                    <i class="fas fa-times"></i>
                                </span>
                            </label>
                            <ul class="header__navbar-list">
                                <li class="header__navbar-item"><a href="http://localhost:8000/" class="header__navbar-link">Trang chủ</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/service/1" class="header__navbar-link"> 10 bước</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/book" class="header__navbar-link">Đặt vé</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/service" class="header__navbar-link">Dịch vụ khác</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/products" class="header__navbar-link">Sản phầm</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/contact" class="header__navbar-link">Liên hệ</a></li>
                            </ul>
                            <a href="#" class="header__login">
                                <i class="fas fa-crown header__login-icon"></i>
                                Đăng nhập
                            </a>
                        </nav>


                    </div>
                </div>
            </div>
        </header>

    @yield('content')
    
	<footer class="footer" id="footer">
        <div class="container">
            <div class="footer-wp">
                <div class="row">
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Giới thiệu</h4>
                            <p class="footer__desc">30ShineStore Số 1 Về Mỹ Phẩm </p>
                            <ul class="footer__list-icon">
                                <li class="footer__item-icon"><a href="" class="footer__link-icon facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon youtube"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon twitter"><i
                                            class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Liên kết</h4>
                            <ul class="footer__list">
                                <li class="footer__item"><a href="" class="footer__link">Thương Hiệu Độc Quyền</a>
                                </li>
                                <li class="footer__item"><a href="" class="footer__link">Tạo kiểu tóc</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Chăm sóc da</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Chăm sóc cơ thể</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Mỹ phẩm</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Phụ kiện</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Thực phẩm chức năng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title"> Thông tin liên hệ</h4>
                            <p class="footer__desc"><i class="fas fa-map-marker-alt"></i> Công ty cổ phần 30 Shide
                            </p>
                            <p class="footer__desc"><i class="fas fa-phone"></i>0904.600.500 - 0898.586.335</p>
                            <p class="footer__desc"><i class="fas fa-envelope"></i>30shinestore@30shine.com </p>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Giờ phục vụ</h4>
                            <p class="footer__desc">Giờ phục vụ 8h30 - 20h30 (kể cả thứ 7 và CN)</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright © 2021 30Shine Store. Powered by Huỳnh Dương Khang
            </div>
        </div>
    </footer>


</body>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="/assets/js/owlcarousel/owl.carousel.min.js"></script>
    
    @yield('script')

</html>