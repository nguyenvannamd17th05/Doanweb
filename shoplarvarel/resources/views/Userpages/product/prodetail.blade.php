@extends('welcome')
@section('content')
<div class="product-details"><!--product-details-->
<div class="col-sm-5">
	<div class="view-product">
		@foreach($product as $v)
		<img src="{{URL::to('./upload/product/'.$v->image)}}" alt="" />
	</div>
</div>
<div class="col-sm-7">
	<div class="product-information"><!--/product-information-->
	<img src="images/product-details/new.jpg" class="newarrival" alt="" />
	<h2>{{$v->name}}</h2>
	<p>{{$v->id}}</p>
	<img src="images/product-details/rating.png" alt="" />
	<form action="{{URL::to('add-cart')}}" method="POST">
		@csrf
	<span>
		<span>{{number_format($v->price,0,',','.').' '.'VND'}}</span>
		<label>Quantity:</label>
		<input name="qty"type="number" min="1" value="1" />
		<input name="id_hidden"type="hidden"  value="{{$v->id}}" />
		<button type="submit" class="btn btn-fefault cart">
		<i class="fa fa-shopping-cart add_to_cart"></i>
		Add to cart
		</button>
	</span>
</form>
	<p><b>Availability:</b> In Stock</p>
	<p><b>Condition:</b> New</p>
	<p><b>Brand:</b> {{$v->brand_name}}</p>
	<p><b>Category:</b> {{$v->category_name}}</p>
	<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
	</div><!--/product-information-->
</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
<div class="col-sm-12">
	<ul class="nav nav-tabs">
		<li class="active">  <a href="#details" data-toggle="tab">Details</a></li>

	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane fade active in" id="details" >
		<table class="table">
			<tr style="display: table-row;">
				<td>CPU: </td>
				<td>{{$v->cpu}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>RAM: </td>
				<td>{{$v->ram}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>SCREEN: </td>
				<td>{{$v->screen}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>SD Card: </td>
				<td>{{$v->SDcard}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>SIM: </td>
				<td>{{$v->SIM}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>CAMERA: </td>
				<td>{{$v->camera}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>PIN: </td>
				<td>{{$v->pin}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>OPERA SYSTEM: </td>
				<td>{{$v->os}}</td>
			</tr>
			<tr style="display: table-row;">
				<td>Storage: </td>
				<td>{{$v->storage}}</td>
			</tr>
		</table>
	</div>
	<div class="tab-pane fade" id="companyprofile" >
			
	</div>
	
</div>
</div><!--/category-tab-->
@endforeach
<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">recommended items</h2>
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active">
			@foreach($relate as $k=>$v)
			<a href="{{URL::to('prodetail/'.$v->id)}}">
			<div class="col-sm-4">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{URL::to('./upload/product/'.$v->image)}}" alt="" />
							<h2>{{number_format($v->price,0,',','.').' '.'VND'}}</h2>
							<p>{{$v->name}}</p>
							 <a href="{{URL::to('prodetail/'.$v->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>View detail</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>		
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
</div><!--/recommended_items-->
@endsection