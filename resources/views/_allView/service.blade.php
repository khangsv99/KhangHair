@extends('index')

@section('content')

<main id="service">
<!-- Begin service -->
<section class="service">
        <div class="grid full service-wrapper">
            <div class="service__combo-10step">
                <div class="service__title mb-30">
                    <h3>SHINE COMBO CẮT GỘI 10 BƯỚC</h3>
                </div>

                <div class="combo-10step__content">
                    <div class="combo-10step__banner">
                        <a href="#" class="combo-10step__link"><img src="./assets/img/Service/shine-combo-10-buoc.jpg"
                                alt="" class="combo-10step__img img-responsive"></a>
                    </div>
                </div>
            </div>
        

            <div class="service__hair-curling mb-50">
                <div class="service__title mb-30">
                    <h3>DỊCH VỤ UỐN</h3>
                </div>
                <div class="hair-curling-content">
                    <div class="grid">
                        <div class="row">
                            <div class="owl-carousel owl-theme">

                            	@foreach ($services_uon as $service)
									<a href="#"><img src="{{$service->thumbnail}}" alt=""
                                        class="img-responsive"></a>
								@endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service__hair-dyeing mb-50">
                <div class="service__title mb-30">
                    <h3>DỊCH VỤ NHUỘM</h3>
                </div>
                <div class="hair-dyeing__content">
                    <div class="grid">
                        <div class="row">
                            <div class="owl-carousel owl-theme">

                            	@foreach ($services_nhuom as $service)
									<a href="#"><img src="{{$service->thumbnail}}" alt=""
                                        class="img-responsive"></a>
								@endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('css')
	<link rel="stylesheet" href="{{ asset('assets/css/Service/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Service/style.css') }}">
@endsection

@section('script')
<script type="text/javascript" src="assets/js/service.js"></script>
@endsection