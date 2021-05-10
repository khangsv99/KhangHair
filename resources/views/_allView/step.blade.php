@extends('index')

@section('content')

<main>
      <section class="container-main">
        <div class="banner-main">
          <img src="/assets/img/Steps10/banner.jpg" alt="banner" />
        </div>
        <div class="step10">
          <div class="menu-step">

		 	@foreach ($steps as $step)

			<div class="row-item">
              <div class="item-menu-step">
                <div class="content-item">
                  <h3>{{$step->step}} : {{$step->title}}</h3>
                  <p>
				  	{{$step->content}}
                  </p>
                </div>
              </div>
              <div class="item-menu-step">
                <img src="{{$step->thumbnail}}" alt="" />
              </div>
            </div>
			
			@endforeach
            
            <div class="line"><hr /></div>
          </div>
        </div>
      </section>
    </main>

@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/steps10/steps10.css') }}">
@endsection

@section('script')
@endsection