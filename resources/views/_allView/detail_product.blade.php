@extends('index')

@section('content')


<section class="detail-product">
        <section class="container detail-product-wp">
            <div class="row">
                <div class="col l-6 m-12">
                    <div class="detail-product__left">
                        <img src="{{$product->thumbnail}}" alt="" class="detail-product__img img-responsive">
                    </div>
                </div>
                <div class="col l-6 m-12">
                    <div class="detail-product__right">
                        <h3 class="detail-product__right-title">
							{{$product->title}}
                        </h3>
                        <div class="detail-product__right-price">
                            <span class="detail-product__right-price-new">{{$product->price}}đ</span>
                        </div>
                        <div class="detail-product__right-quality">
                            <div class="detail-product__right-value">
                                <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                                <input type="number" id="quantity" name="quantity" value="1" min="1"
                                    class="detail-product__right-selector" aria-label="Quantity input">
                                <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                            </div>
                            <button class="detail-product__right-btn">
                                <a href="http://localhost:8000/cart">THÊM VÀO GIỎ</a> 
                            </button>
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
                <div class="col l-6 m-12">
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