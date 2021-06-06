@extends('_adminView.index')

@section('content')
<section class="right">
	<div class="right__content">
		<div class="right__head d-flex">
			<div class="right__head-post d-flex">
				<h5 class="right__head-post-title">Posts</h5>
				<a href="{{route('get.addProduct')}}" class="right__head-post-add">Add New</a>
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

						@foreach ($products as $product)

						<tr class="right__table-item">
							<td data-label="Email" style="text-align: left;">
								{{$product->title}}
								<div class="right__table-item-change">
									<a class="right__table-item-btn right__table-item-btn--edit" href="/admin/edit-product/{{$product->idPro}}">Edit</a>
									|
									<a class="right__table-item-btn right__table-item-btn--delete" href="/admin/delete-product/{{$product->idPro}}">Delete</button>
								</div>
							</td>
							<td data-label="Số Hoá Đơn">{{$category->title}}</td>
							<td data-label="ID Sản Phẩm">{{$product->created_at}}</td>

						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<span>{!! $products->render() !!}</span>

		{{-- <div class="right_pagination d-flex">

			<span class="right_pagination-item">
				1
			</span>
			<span class="right_pagination-item">
				2
			</span>
			<span class="right_pagination-item">
				3
			</span>

			<span class="right_pagination-item">
				...
			</span>

			<span class="right_pagination-item">
				<i class="fas fa-arrow-right"></i>
			</span>
		</div> --}}
	</div>
</section>
@endsection