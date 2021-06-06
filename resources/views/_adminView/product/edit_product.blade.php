@extends('_adminView.index')

@section('content')
	<form action="{{route('post.editProduct')}}" method="POST"> <!-- sua action  --> 
		@csrf
		<div>
			<label>Title</label>
			<input type="text" name="title" value='{{ $product->title }}'><br><br>
		</div>
		<div>
			<label>Price</label>
			<input type="text" name="price" value='{{ $product->price }}'><br><br>
		</div>
		<div>
			<div class="input-group">
		   <span class="input-group-btn">
		     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
		       <i class="fa fa-picture-o"></i> Choose
		     </a>
		   </span>
		   <input id="thumbnail" class="form-control" type="text" name="thumbnail" value='{{ $product->thumbnail }}'>
	 	</div>
	 	<img id="holder" style="margin-top:15px;max-height:100px;">
		</div>
		<input type="hidden" name="idCate" value="{{$idCate}}">
		<input type="hidden" name="idPro" value="{{ $product->idPro }}">

		<textarea id="my-editor" name="detailed_description"  class="form-control">{{ $product->detailed_description }}</textarea>
		<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
               {{ __('Edit') }}
            </button>
        </div>
	</form>
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection