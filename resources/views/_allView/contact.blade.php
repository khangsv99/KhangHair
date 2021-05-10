@extends('index')

@section('content')
        <main id="contact">
            <div class="container">
                <div class="wrap-contact">
                    <div class="wrap-content">
                        <div class="wrap-map">
                            <div class="title-contact"><b> Địa chỉ </b>: 86 Chu Văn An - P.26 - Bình Thạnh</div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.008500458135!2d106.70740961533426!3d10.810660361515689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752897d84afee7%3A0x8379470bd61ad378!2zODYgQ2h1IFbEg24gQW4sIFBoxrDhu51uZyAyNiwgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1598722145188!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
    
                        <div class="wrap-input">
                            <form action="/contact" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="wrap-item-contact">
                                    <input type="text" placeholder="Họ và tên" name="fullName">
                                </div>
                                <div class="wrap-item-contact">
                                    <input type="text" placeholder="Địa chỉ mail" name="mail">
                                </div>
                                <div class="wrap-item-contact">
                                    <input type="text" placeholder="Số điệnt thoại" name="phone">
                                </div>
                                <div class="wrap-item-contact">
                                    <textarea id="" cols="55" rows="10" placeholder="Nội dung" name="description"></textarea>
                                </div>

                                <div class="wrap-button-contact">
                                    <button>Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
@section('css')
	<!-- <link rel="stylesheet" href="css/test.css">  -->
	<link rel="stylesheet" href="assets/css/Contact/contact.css">
    <link rel="stylesheet" href="assets/css/Contact/reponsive.css">
@endsection

@section('script')
	<!-- <script type="text/javascript" src="js/test.js"></script> -->
@endsection