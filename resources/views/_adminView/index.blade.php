<!DOCTYPE html>
<html>
<head>
	<title>Admin nha!! Giết:))</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="refresh" content="{{ route('form.addDetailsService') }}">
</head>
<body>
	<h1>Khu vực admin. Thằng lào láo, diệt tộc!!</h1>

	<li><a class="active-menu" href="#"><i
			class="fa fa-dashboard fa-3x"></i> Dashboard</a></li>
	@foreach ($services as $service)
		<li><a href="/admin/service/{{$service->id}}"><i class="fa fa-desktop fa-3x"></i>
			{{$service->name}}</a></li>
	@endforeach

	@yield('content')
	@csrf

	<!-- đoạn js cho editor -->
	<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
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