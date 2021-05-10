@extends('index')

@section('content')


<main class="content">

<!-- Begin sidebar -->
<section class="sidebar">
    <div class="container">
        <div class="owl-carousel owl-theme">
            <a href="#"><img src="./assets/img/Home/banner1.png" alt="" class="img-responsive"></a>
            <a href="#"><img src="./assets/img/Home/banner2.png" alt="" class="img-responsive"></a>
            <a href="#"><img src="./assets/img/Home/banner3.png" alt="" class="img-responsive"></a>
        </div>
    </div>
</section>
<!-- End sidebar -->

<!-- Begin service -->

<section class="service">
    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">DỊCH VỤ 30 SHIDE</h3>
            <a href="" class="heading-more">Xem thêm >></a>
        </div>
        <div class="service__content">
            <a href="" class="service__content-link"><img src="./assets/img/Home/service.png" alt=""
                    class="service__content-img img-responsive"></a>
        </div>
    </div>
</section>
<!-- End service -->

<!-- Begin ten-step -->
<section class="ten-step">
    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">QUY TRÌNH 10 BƯỚC</h3>
        </div>
        <div class="row">
            <div class="col l-6 m-6 s-0">
                <div class="ten-step__sidebar">
                    <div class="ten-step__sidebar-list">
						<?php 
							$count = 1;
							?>
								@foreach ($steps as $step)
								<div class="ten-step__sidebar-item" onclick="currentSlide(<?php echo $count;?>)">
									<p class="ten-step__sidebar-desc">{{$step->step}}: {{$step->title}}</p>
								</div>
								<?php $count ++; ?>
								@endforeach
							<?php
						?>
						
                    </div>
                </div>
            </div>
            <div class="col l-6 m-6 s-0">
                <div class="wrap-images">
					@foreach ($steps as $step)
						<div class="mySlides">
							<img src="{{$step->thumbnail}}">
						</div>
					@endforeach
                </div>
            </div>


        </div>
    </div>
</section>

<section class="ten-step-mobile">
    <div class="container">
        <div class="owl-carousel owl-theme">

			<?php 
				$count = 1;
				?>
					@foreach ($steps as $step)
					<div class="ten-step-mobile-box">
						<div class="ten-step__sidebar-item" onclick="currentSlide(1)">
							<p class="ten-step__sidebar-desc">{{$step->step}}: {{$step->title}}</p>
						</div>
						<div class=" img-responsive">
							<img src="{{$step->thumbnail}}">
						</div>
					</div>
						<?php $count ++; ?>
					@endforeach
				<?php
			?>

        </div>
    </div>
</section>
<!-- End ten-step -->

<!-- Begin hair-hot -->
<section class="hair-hot">

    <div class="container">
        <div class="heading-content">
            <h3 class="heading-title">TÓC HOT</h3>
            <a href="" class="heading-more">Xem thêm >></a>
        </div>
        <div class="hair-hot__content">
            <div class="wrap-hot">
                <div class="hair-hot__thumb">
					@foreach ($models_hot as $model)
                    	<a href="#" class="hair-hot__item"><img src="{{$model->thumbnail}}" alt="" class="img-responsive"></a>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hair-hot -->
      <!-- Begin branch -->
      <section class="brand">
                <div class="container">
                    <div class="heading-content">
                        <h3 class="heading-title">THƯƠNG HIỆU ĐỘC QUYỀN</h3>
                        <a href="" class="heading-more">Xem thêm >></a>
                    </div>


                    <div class="home-carousel owl-carousel owl-theme">

                    @foreach ($products as $product)

                        <div class="product__item ">
                        <a href="/detail-product/{{$product->idPro}}" class="product__thumb">
                        <img src="{{$product->thumbnail}}" alt=""
                            class="product__photo img-responsive">
                            </a>

                            <div class="product__detail">
                                <a href="/detail-product/{{$product->idPro}}" class="product__link">{{$product->title}}</a>
                                <p class="product__price--new">{{$product->price}}₫ </p>
                            </div>
                        </div>



                    @endforeach

                        
                    </div>

                </div>
            </section>
            <!-- End branch -->

</main>

@endsection

@section('css')
	<link rel="stylesheet" href="assets/css/Home/responsive.css">
    <link rel="stylesheet" href="assets/css/Home/style.css">
@endsection

@section('script')
	<script type="text/javascript" src="assets/js/home.js"></script>
@endsection
