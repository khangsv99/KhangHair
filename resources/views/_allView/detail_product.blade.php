@extends('index')

@section('content')


<section class="detail-product" id="detail-product">
        <section class="container detail-product-wp">
            <div class="row">
                <div class="col l-6 m-12">
                    <div class="detail-product__left">
                        <img src="{{$product->thumbnail}}" alt="" class="detail-product__img img-responsive">
                    </div>
                </div>
                <div class="col l-6 m-12 detail-product__right">
                    <div class=" detail-product__right--fixed">
                        <h3 class="detail-product__right-title">
							{{$product->title}}
                        </h3>
                        {{-- <div class="detail-product__right-price">
                            <span class="detail-product__right-price-new">Giá tiền: {{$product->price}}đ</span>
                        </div> --}}
                        <div class="detail-product__right-quality">
                            <div class="detail-product__right-value">
                                {{-- <div class="detail-product__right-price-new"></div> --}}
                                <div class="detail-product__right-price">
                                    <span>Giá tiền:</span><span class="detail-product__right-price-new">{{$product->price}}đ</span>
                                </div>
                            </div>
                            <div class="detail-product__right-submit">
                                    <a href="/cart/{{$product->idPro}}" class="detail-product__right-btn">THÊM VÀO GIỎ</a>
                            </div>
                        </div>

                        <div class="detail-product__right-label">
                            <i class="fas fa-check-circle"></i>
                            <span>CHẤT LƯỢNG ĐẢM BẢO Hơn 200 Thương Hiệu hàng đầu Thế Giới</span>
                        </div>

                        <div class="detail-product__right-label">
                            <i class="fas fa-shipping-fast"></i>
                            <span>VẬN CHUYỂN TỨC THỜI Giao Nhanh Nội Thành Hà Nội - Hồ Chí Minh</span>
                        </div>
                        <div class="detail-product__right-label">
                            <i class="fas fa-redo"></i>
                            <span>ĐỔI TRẢ TRÊN TOÀN HỆ THỐNG Miễn Phí Trong Vòng 30 Ngày</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-12 m-12">
                    <div class="detail-product-desc">
                        <p class="detail-product-desc-title">
                            MÔ TẢ SẢN PHẨM
                        </p>
                        <p class="detail-product-desc-detail">
							{{$product->detailed_description}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container product-related">

            <h3 class="product-related-title">Sản phẩm liên quan</h3>
            <div class="row">
                <div class="col l-12">
                    <div class="row">
                        <div class=" owl-carousel owl-theme">
							@foreach ($products as $product)
								<div class="product__item">
									<a href="#" class="product__thumb">
										<img src="{{$product->thumbnail}}" alt=""
											class="product__photo img-responsive">
									</a>

									<div class="product__detail">
										<a href="#" class="product__link">{{$product->title}}</a>
										<p class="product__price--new">{{$product->price}}₫</p>
									</div>
								</div>
							@endforeach
                        </div>
                    </div>
                </div>
        </section>
    </section>
@endsection
@section('css')
	<link rel="stylesheet" href="{{ asset('assets/css/Detail/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Detail/style.css') }}">
@endsection

@section('script')
<script type="text/javascript" src="/assets/js/product-detail.js"></script>
@endsection
