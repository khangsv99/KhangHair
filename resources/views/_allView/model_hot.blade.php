@extends('index')

@section('content')
<main>
    {{-- @foreach ($models_hot as $model)
        <a href="#"><img src="{{$model->thumbnail}}" alt="" class="img-responsive"></a>
    @endforeach --}}

    <div class="container">
        <div class="hair-hot__content">
            <h3>Tóc mẫu</h3>
            <div class="wrap-hot">
                <div class="hair-hot__thumb">
                    @foreach ($models_hot as $model)
                    	<a href="#" class="hair-hot__item"><img src="{{$model->thumbnail}}" alt="" class="img-responsive"></a>
					@endforeach
                </div>
            </div>
        </div>        
    </div>
</main>
@endsection
@section('css')
	<link rel="stylesheet" href="assets/css/Home/responsive.css">
    <link rel="stylesheet" href="assets/css/Home/style.css">
@endsection

@section('script')
@endsection
