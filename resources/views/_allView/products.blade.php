@extends('index')

@section('content')
 <!-- Begin product -->
 <main class="product">
        <!-- Begin banner -->
        <section class="product__banner">
            <img src="{{asset("./assets/img/Products/banner_image_collection.jpg")}}" alt="" class="img-responsive">
        </section>
        <!-- End banner -->

        <!-- Begin product nav mobile -->
        <section class="product__nav">
            <div class="container">
                <div class="row">
                    <div class="col l-12">
                        <ul class="product__nav-list">

							@foreach ($categories as $category)
								<li class="product__nav-item"><a href="/products-of-categories/{{$category->idCate}}" class="product__nav-link">{{$category->title}}</a></li>
							@endforeach

                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <!-- End product nav mobile -->

        <!-- Begin product main -->
        <section class="product__main">
            <div class="container">
                <!-- product title -->
                <div class="row">
                    <div class="col l-12">
                        <div class="product__title">
                            <h3 class="product__heading">Tất cả sản phẩm</h3>
                        </div>
                    </div>
                </div>
                <!-- product main -->
                <div class="row">
                    <!-- product sidebar -->
                    <div class="col l-3 m-0 xs-0">
                        <div class="product__sidebar">
                            <ul class="product__sidebar-list">

								@foreach ($categories as $category)
									<li class="product__sidebar-item"><a href="/products-of-categories/{{$category->idCate}}" class="product__sidebar-link">{{$category->title}}</a></li>
								@endforeach
                               
                            </ul>
                        </div>
                    </div>
                    <!-- product content -->
                    <div class="col l-9 m-12 xs-12">
                        <div class="row">


							@foreach ($products as $product)
								<div class="col l-4 m-6">
									<div class="product__item">
										<a href="/detail-product/{{$product->idPro}}" class="product__thumb">
											<img src="{{$product->thumbnail}}" alt=""
												class="product__photo img-responsive">
										</a>

										<div class="product__detail">
											<a href="/detail-product/{{$product->idPro}}" class="product__link">Bộ đôi DẦU GỘI - XẢ TIGI RESURRECTION
												{{$product->title}}</a>
											<p class="product__price--new">{{$product->price}}₫</p>
										</div>
									</div>
								</div>
							@endforeach

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End product main -->

    </main>
    <!-- End product -->	
	

@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('assets/css/Products/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Products/style.css') }}">
@endsection

@section('script')
@endsection