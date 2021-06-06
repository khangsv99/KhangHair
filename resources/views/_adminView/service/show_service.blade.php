@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Posts</h5>
				<a href="{{route('form.addDetailsService')}}" class="right__head-post-add">Add New</a>
			</div>
			<div class="right__head-search">
				{{-- <input type="text" class="right__head-search-input">
				<button type="button" class="right__head-search-btn">Search Posts</button> --}}
			</div>
		</div>
		<div class="right__head-bar d-flex">
			<div class="right__head-bar-select">
				{{-- <input type="checkbox" id="all" class="right__head-bar-checkbox">
				<label for="all" class="right__head-bar-label">All</label>
				<button class="right__head-bar-delete">Delete</button> --}}
			</div>
			<span class="right__head-bar-count">2 items</span>
		</div>

		<div class="right__table">
			<div class="right__tableWrapper">
				<table>
					<thead>
						<tr>
							<th style="text-align: left;">Title</th>
							<th>Categories</th>
							<th>Date</th>
						</tr>
					</thead>

					<tbody>

						@foreach ($steps as $step)

						<tr class="right__table-item">
							<td data-label="Email" style="text-align: left;">
								{{$step->step}} {{$step->title}}
								<div class="right__table-item-change">
									<a class="right__table-item-btn right__table-item-btn--edit" href="/admin/edit-step/{{$step->id}}">Edit</a>
									|
									<a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-step/{{$step->id}}">Delete</button>
								</div>
							</td>
							<td data-label="Số Hoá Đơn">{{$service->title}}</td>
							<td data-label="ID Sản Phẩm">{{$step->created_at}}</td>

						</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
		<span>{!! $steps->render() !!}</span>
	</div>
</section>
@endsection
