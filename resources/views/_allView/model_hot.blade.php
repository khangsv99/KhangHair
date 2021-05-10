@extends('index')

@section('content')
<main>
    @foreach ($models_hot as $model)
                                    <a href="#"><img src="{{$model->thumbnail}}" alt=""
                                        class="img-responsive"></a>
                                @endforeach

    <div class="container">

        <div class="gallery-container w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png?nature" alt="nature">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2 ">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?people" alt="people">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?sport" alt="sport">
                </div>
            </div>
            </div>

            <div class="gallery-container w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?fitness" alt="fitness">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2 ">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?food" alt="food">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?travel" alt="travel">
                </div>
            </div>
            </div>

            <div class="gallery-container w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?art" alt="art">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2 ">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?cars" alt="cars">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?door" alt="door">
                </div>
            </div>
            </div>


            <div class="gallery-container w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?door" alt="windows">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?door" alt="windows">
                </div>
            </div>
            </div>

            <div class="gallery-container w-1 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?door" alt="windows">
                </div>
            </div>
            </div>

            <div class="gallery-container w-2 h-2">
            <div class="gallery-item">
                <div class="image">
                <img src="https://source.unsplash.com/1600x900/?door" alt="windows">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('css')
	<link rel="stylesheet" href="assets/css/Models/grid-gallery.css">
@endsection

@section('script')
	
@endsection