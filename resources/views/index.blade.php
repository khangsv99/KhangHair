<!doctype html>
<html>

<head>
    <title>Trang chu</title>
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/js/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font, Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('assets/css/Log/log.css')}}" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <style>
        .remove-padding-left[style] {
            padding-right:0 !important;
        }
        .remove-padding-left.modal-open {
            overflow: auto;
        }

    </style>
    <!-- JS -->
    <script src="{{asset('assets/js/login.js')}}"></script>
    @yield('css')
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="row header__content">
                <div class="col l-2 m-11 xs-6">
                    <a href="http://localhost:8000/" class="header__logo"><img src="/assets/img/Home/logo.png" alt="" class="header__logo-img img-responsive"></a>
                </div>
                <div class="col l-10 m-1 xs-6">
                    <div class="header__menu-bars">
                        <input id='item-dropdown' type='checkbox'>
                        <label for='item-dropdown'>
                            <span class="header__navbar-bars">
                                <i class="fas fa-bars header__navbar-bars-times"></i>
                            </span>
                        </label>
                        <nav class="header__navbar">
                            <a href="http://localhost:8000/" class="header__logo header__navbar-logo"><img src="/assets/img/Home/logo.png" alt="" class="header__logo-img img-responsive"></a>
                            <label for='item-dropdown'>
                                <span class="header__navbar-bars header__navbar-bars--remove">
                                    <i class="fas fa-times"></i>
                                </span>
                            </label>
                            <ul class="header__navbar-list">
                                <li class="header__navbar-item"><a href="http://localhost:8000/" class="header__navbar-link">Trang ch???</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/products" class="header__navbar-link">S???n ph???m</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/modelHot" class="header__navbar-link">M???u t??c</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/service" class="header__navbar-link">D???ch v??? kh??c</a></li>
                                <li class="header__navbar-item" id="booking"><a href="http://localhost:8000/book" class="header__navbar-link" >?????t v??</a></li>
                                <li class="header__navbar-item"><a href="http://localhost:8000/contact" class="header__navbar-link">Li??n h???</a></li>
                            </ul>


                            <!-- <a class="header__login" data-toggle="modal" href="#myModal">
                                <i class="fas fa-crown header__login-icon"></i>
                                ????ng nh???p
                            </a> -->


                            @if (session('user'))

                                    <div class="header__account">
                                        <a href="/authLogout" class="header__logout-mobile"><img src="/assets/img/Log/logout.png" alt="" class="header__cart-img img-responsive"></a>

                                        <a href="/cart" class="header__cart">
                                            <div class="header__cart-wp">
                                                <span class="header__cart-count"><i>
                                                    <?php
                                                        if(session('countCart') == 0)
                                                        {
                                                            echo 0;
                                                        } else {
                                                            echo session('countCart');

                                                        }
                                                    ?>
                                                </i></span>
                                                <img src="/assets/img/Log/shopping-cart.png" alt="" class="header__cart-img img-responsive">
                                            </div>
                                        </a>
                                        <div class="header__user-wp">
                                            <div class ="header__info">
                                                <a href="#" class="header__user"><img src="/assets/img/Log/profile-user.png" alt="" class="header__cart-img img-responsive"></a>
                                                <span class="header__info-text">{{session('user')->name}}</span>
                                                <ul class="header__popup">
                                                    <li class="header__popup-item"><a href="#" class="header__popup-link"><img class="header__popup-thumb" src="/assets/img/Log/profile-user.png" alt="" class="img-responsive">Th??ng tin kh??ch h??ng</a></li>
                                                    <li class="header__popup-item"><a href="{{route('getLogout')}}" class="header__popup-link"><img class="header__popup-thumb" src="/assets/img/Log/logout.png" alt="" class="img-responsive">????ng xu???t</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                            @else

                                <a class="header__login" data-toggle="modal" href="#myModal">
                                    <i class="fas fa-crown header__login-icon"></i>
                                    ????ng nh???p
                                </a>

                            @endif

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- login start -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="close off-log" data-dismiss="modal">&times;</button>
                    <div class="wrap-form">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#log-in">????ng Nh???p</a></li>
                            <li><a data-toggle="tab" href="#sign-up">????ng K??</a></li>
                        </ul>
                        <div class="logo">
                            <img src="{{asset('assets/img/Log/log-30shine-white.9945e644.jpg')}}" alt="" />
                        </div>
                        <div class="tab-content">
                            <div id="log-in" class="tab-pane fade in active">
                                <div class="form-container sign-in-container">
                                    <form action="{{route('postLogin')}}" id="sign-in-container" method="POST">
                                        @csrf
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('assets/img/Log/icon_letter.png')}}" alt="">
                                            </div>
                                            <input type="email" name="email" placeholder="Email" />
                                        </div>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('assets/img/Log/icon_lock.png')}}" alt="">
                                            </div>
                                            <input name="password" type="password" placeholder="M???t Kh???u" />
                                        </div>
                                        <div class="cappcha-input">
                                            <div id="divGenerateRandomValues"></div>
                                            <input type="text" id='txtInput' />
                                        </div>
                                        <p class="forgot" id="slidedown">Forgot your password?</p>
                                        <button class="signIn-form-button" id="btn-log-in" type="button">Sign In</button>
                                    </form>
                                </div>
                                <div class="hide" id="forgot">
                                    <form action="" class="form-container">
                                        <div class="enter-email">
                                            <div class="enter-email-detail">
                                                <h3>Qu??n m???t kh???u</h3>
                                                <div class="account-input">
                                                    <div class="icon-form">
                                                        <img src="{{asset('assets/img/Log/icon_letter.png')}}" alt="">
                                                    </div>
                                                    <input type="email" placeholder="Email" />
                                                </div>
                                                <div class="">
                                                    <button class="signIn-form-button">Send</button>
                                                    <p id="slideup" style="cursor: pointer"><u>close</u></p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="sign-up" class="tab-pane fade">
                                <div class="form-container sign-up-container">
                                    <form action="{{route('post.Register')}}" id="sign-up-form" method="POST">
                                        @csrf
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('assets/img/Log/icon_user.png')}}" alt="">
                                            </div>
                                            <input type="text" placeholder="H??? T??n" id="name" name="name"/>
                                        </div>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('assets/img/Log/icon_phone.png')}}" alt="">
                                            </div>
                                            <input type="text" placeholder="S??? ??i???n Tho???i" id="phone" name="phone"/>
                                        </div>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('assets/img/Log/icon_letter.png')}}" alt="">
                                            </div>
                                            <input type="email" placeholder="Email" id="email" name="email"/>
                                        </div>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('/assets/img/Log/icon_lock.png')}}" alt="">
                                            </div>
                                            <input type="password" placeholder="M???t Kh???u" id="pass" name="password" />
                                        </div>
                                        <div class="account-input">
                                            <div class="icon-form">
                                                <img src="{{asset('/assets/img/Log/icon_lock.png')}}" alt="">
                                            </div>
                                            <input type="password" placeholder="Nh???p L???i M???t Kh???u" class="last-child" id="repass" />
                                        </div>
                                        <div class="cappcha-input">
                                            <div id="divGenerateRandomValues1"></div>
                                            <input type="text" id='txtInput1' />
                                        </div>

                                        <button class="mt-3 signUp-form-button" id="btn-sign-up" type="button">Sign Up kjlklklk</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- login end -->
    @yield('content')

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-wp">
                <div class="row">
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Gi???i thi???u</h4>
                            <p class="footer__desc">30ShineStore S??? 1 V??? M??? Ph???m </p>
                            <ul class="footer__list-icon">
                                <li class="footer__item-icon"><a href="" class="footer__link-icon facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon instagram"><i class="fab fa-instagram"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon youtube"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__item-icon"><a href="" class="footer__link-icon twitter"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Li??n k???t</h4>
                            <ul class="footer__list">
                                <li class="footer__item"><a href="" class="footer__link">Th????ng Hi???u ?????c Quy???n</a>
                                </li>
                                <li class="footer__item"><a href="" class="footer__link">T???o ki???u t??c</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Ch??m s??c da</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Ch??m s??c c?? th???</a></li>
                                <li class="footer__item"><a href="" class="footer__link">M??? ph???m</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Ph??? ki???n</a></li>
                                <li class="footer__item"><a href="" class="footer__link">Th???c ph???m ch???c n??ng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title"> Th??ng tin li??n h???</h4>
                            <p class="footer__desc"><i class="fas fa-map-marker-alt"></i> C??ng ty c??? ph???n 30 Shide
                            </p>
                            <p class="footer__desc"><i class="fas fa-phone"></i>0904.600.500 - 0898.586.335</p>
                            <p class="footer__desc"><i class="fas fa-envelope"></i>30shinestore@30shine.com </p>
                        </div>
                    </div>
                    <div class="col l-3 m-6 xs-12">
                        <div class="footer__wp">
                            <h4 class="footer__title">Gi??? ph???c v???</h4>
                            <p class="footer__desc">Gi??? ph???c v??? 8h30 - 20h30 (k??? c??? th??? 7 v?? CN)</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright ?? 2021 30Shine Store. Powered by Hu???nh D????ng Khang
            </div>
        </div>
    </footer>


</body>
<script >
$('#myModal').on('show.bs.modal', function (e) {
    $('body').addClass('remove-padding-left');
})
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<script src="/assets/js/owlcarousel/owl.carousel.min.js"></script>
<script></script>
<script src="/assets/js/main.js"></script>
@yield('script')
</html>
