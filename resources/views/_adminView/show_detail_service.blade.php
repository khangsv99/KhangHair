@extends('_adminView.root')

@section('content')
	<h3>Chi tiet ca buoc nha may con di!</h3>
	<li><a href="/admin/add-details-service"><i class="fa fa-desktop fa-3x"></i>
			Add new</a></li>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Title</th>
				<th>Categories</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($steps as $step)
				<tr>
					<td>
						
					</td>
					<td>
						{{$step->step}}: {{$step->nameStep}}
						<a href="admin/edit-step/{{$step->id}}">Edit</a> | <a 
						href="admin/delete-step/{{$step->id}}">Delete</a>
					</td>
					<td>
						{{$service->name}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	
	{{$step->step}} : {{$step->nameStep}}
	<p>{{$step->content}}</p>
    	<img src="{{$step->image}}" alt="Loi anh roi!" width="500" height="500">
    <h5>------------------------</h5>
	
@endsection