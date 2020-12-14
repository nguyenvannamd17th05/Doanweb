@extends('admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Edit Product
			</header>
			<div class="panel-body">
				<div class="position-center">
					@foreach($data as $key=>$v)
					<form role="form" action="{{URL::to('edited-product/'.$v->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Product</label>
							<input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$v->name}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Description</label>
							<input type="text" name="product_desc" class="form-control" id="exampleInputPassword1" value="{{$v->desc}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Info</label>
							<textarea style="resize: none" rows="8" name="product_info" class="form-control" id="exampleInputPassword1"> {{$v->info}}</textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input type="text" name="product_price" class="form-control" id="exampleInputPassword1" value="{{$v->price}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Status</label>
							<select name="product_status" class="form-control">
								<option value="0">Còn hàng</option>
								<option value="1">Hết hàng</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Image</label>
							<input type="file" name="product_img" class="form-control" id="exampleInputPassword1" >
							<img src="{{URL::to('./upload/product/'.$v->image)}}" height="100" width="100" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Category</label>
							<select name="cate" class="form-control" >
								@foreach($cate as $k=>$value)
								@if($value->id==$v->cate_id)
								<option selected value="{{$value->id}}">{{$value->name}}</option>
								@else 
								<option value="{{$value->id}}">{{$value->name}}</option>
								@endif
									@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Brand</label>
							<select name="brand" class="form-control" >
								@foreach($brand as $k=>$value)
								@if($value->id==$v->brand_id)
								<option selected value="{{$value->id}}">{{$value->name}}</option>
								@else 
								<option value="{{$value->id}}">{{$value->name}}</option>
								@endif
								@endforeach
							</select>
						</div>

						<button type="submit" name="product_add" class="btn btn-info">Submit</button>
					</form>
					@endforeach
				</div>
			</div>
		</section>
	</div>
</div>
@endsection