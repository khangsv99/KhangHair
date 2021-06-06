<!DOCTYPE html>
<html>
<head>
	<title>Admin nha!! Giết:))</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="refresh" content="{{ route('form.addDetailsService') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="/assets/admin/css/main.css">


    <link rel="stylesheet" href="/assets/admin/css/booking.css">
    <link rel="stylesheet" href="/assets/admin/css/popup.css">

</head>
<body>
	{{-- <h1>Khu vực admin. Thằng lào láo, diệt tộc!!</h1>

	<li><a class="active-menu" href="#"><i
			class="fa fa-dashboard fa-3x"></i> Dashboard</a></li>
	@foreach ($services as $service)
		<li><a href="/admin/service/{{$service->id}}"><i class="fa fa-desktop fa-3x"></i>
			{{$service->title}}</a></li>
	@endforeach

	@yield('content')
	@csrf --}}



	
<div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__profile">
                            <div class="left__image"><img src="/assets/admin/assets/avatar.jpg" alt=""></div>
                            <p class="left__name">Tên User</p>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <div class="left__title">Bảng điều khiển
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">
									Sản Phẩm<i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
                                    @foreach ($categories as $cate)
                                        <a class="left__link" href="/admin/product/{{$cate->idCate}}">{{$cate->title}}</a>
                                    @endforeach
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">
									Dịch vụ<i class="fas fa-plus"></i>
                                </div>
                                <div class="left__text">
									@foreach ($services as $service)
										<a class="left__link" href="/admin/service/{{$service->id}}">{{$service->title}}</a>
									@endforeach
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">Mẫu tóc
                            </li>

                            <li class="left__menuItem">
                                <a class="left__title" href="/admin/order">Quản lý đơn hàng</a>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title">Đặt vé
                            </li>
							
                            <li class="left__menuItem">
                                <div class="left__title">Đăng xuất
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')
	            @csrf 
            </div>
        </div>
    </div>




	<!-- đoạn js cho editor -->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/assets/admin/js/main.js"></script>
    <script src="/assets/admin/js/popup.js"></script>

	<script>
		$('#lfm').filemanager('image');
	  var options = {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
	  };
	  
	</script>
	@yield('js-editor')
</body>
</html>