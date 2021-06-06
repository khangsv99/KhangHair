@extends('index')

@section('content')
@if (session('status'))
<div class="alert alert-info">{{session('status')}}</div>
@endif
@if (isset($result))
{{$result}}

@endif
<main>
    <div class="container">
        <div class="wrap-form">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#log-in">Đăng Nhập</a></li>
                <li class=""><a href="{{route('getRegister')}}">Đăng Kí</a></li>
            </ul>
            <div class="logo">
                <img src="assets/img/Log/log-30shine-white.9945e644.jpg" alt="" />
            </div>
            <div class="tab-content">
                <div id="log-in" class="tab-pane fade in active">
                    <div class="form-container sign-in-container">
                        <form action="{{route('postLogin')}}" id="sign-in-page" method="POST">
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
                                <input name="password" type="password" placeholder="Mật Khẩu" />
                            </div>
                            <div class="cappcha-input">
                                <div id="divGenerateRandomValues-page"></div>
                                <input type="text" id='txtInput-page' />
                            </div>
                            <p class="forgot" id="slidedown">Forgot your password?</p>
                            <button class="signIn-form-button" id="btn-log-in-page" type="button">Sign In</button>
                        </form>
                    </div>
                    <div class="hide" id="forgot">
                        <form action="" class="form-container">
                            <div class="enter-email">
                                <div class="enter-email-detail">
                                    <h3>Quên mật khẩu</h3>
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
                                <input type="text" placeholder="Họ Tên" id="name" />
                            </div>
                            <div class="account-input">
                                <div class="icon-form">
                                    <img src="{{asset('assets/img/Log/icon_phone.png')}}" alt="">
                                </div>
                                <input type="text" placeholder="Số Điện Thoại" id="phone" />
                            </div>
                            <div class="account-input">
                                <div class="icon-form">
                                    <img src="{{asset('assets/img/Log/icon_letter.png')}}" alt="">
                                </div>
                                <input type="email" placeholder="Email" id="email" />
                            </div>
                            <div class="account-input">
                                <div class="icon-form">
                                    <img src="{{asset('/assets/img/Log/icon_lock.png')}}" alt="">
                                </div>
                                <input type="password" placeholder="Mật Khẩu" id="pass" />
                            </div>
                            <div class="account-input">
                                <div class="icon-form">
                                    <img src="{{asset('/assets/img/Log/icon_lock.png')}}" alt="">
                                </div>
                                <input type="password" placeholder="Nhập Lại Mật Khẩu" class="last-child" id="repass" />
                            </div>
                            <div class="cappcha-input">
                                <div id="divGenerateRandomValues1"></div>
                                <input type="text" id='txtInput1' />
                            </div>
                            <button class="mt-3 signUp-form-button" id="btn-sign-up" type="button">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@section('css')
@endsection

@section('script')
@endsection