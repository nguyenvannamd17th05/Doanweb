@extends('admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Edit Brand
			</header>	
			<div class="panel-body">
				@foreach($data as $k=>$v)
				<div class="position-center">
					<form role="form" action="{{URL::to('edited-brand/'.$v->id)}}" method="post">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Brand</label>
							<input type="text" value="{{$v->name}}" name="brand_name" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Description</label>
							<input type="text" value="{{$v->desc}}" name="brand_desc" class="form-control" id="exampleInputPassword1" >
						</div>
						<button type="submit" name="brand_add" class="btn btn-info">Submit</button>
					</form>
				</div>
				@endforeach
			</div>
		</section>
	</div>
</div>
@endsection