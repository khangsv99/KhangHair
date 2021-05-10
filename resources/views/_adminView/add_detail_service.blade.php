@extends('_adminView.root')

@section('content')
	<form action="/admin/add-details-service" method="POST">
		@csrf
		<div>
			<label>Step</label>
			<input type="text" name="step">
		</div>
		<div>
			<label>Name Step</label>
			<input type="text" name="nameStep"><br><br>
		</div>
		<div>
			<div class="input-group">
		   <span class="input-group-btn">
		     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
		       <i class="fa fa-picture-o"></i> Choose
		     </a>
		   </span>
		   <input id="thumbnail" class="form-control" type="text" name="image">
	 	</div>
	 	<img id="holder" style="margin-top:15px;max-height:100px;">
		</div>
		<input type="hidden" name="idService" value="{{$idService}}">

		<textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
		<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
               {{ __('Add') }}
            </button>
        </div>
	</form>
@endsection

@section('js-editor')
	<script>
		CKEDITOR.replace('my-editor', options);
		
	</script>
@endsection