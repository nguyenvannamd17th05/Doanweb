@extends('admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">@foreach($data as $v)
			<header class="panel-heading">
				{{$v->name}}
			</header>
			<div class="panel-body">
				<div class="position-center">
					<form role="form" action="{{URL::to('added-prodetail/'.$v->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">CPU</label>
							<input type="text" name="CPU" class="form-control" id="exampleInputEmail1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Ram</label>
							<input type="text" name="Ram" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Screen</label>
							<input type="text" name="Screen" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">SD card</label>
							<input type="text" name="SDcard" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Sim</label>
							<input type="text" name="Sim" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Camera</label>
							<input type="text" name="Camera" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Pin</label>
							<input type="text" name="Pin" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">OS</label>
							<input type="text" name="OS" class="form-control" id="exampleInputPassword1" >
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Storage</label>
							<input type="text" name="Storage" class="form-control" id="exampleInputPassword1" >
						</div>
						<button type="submit" name="product_add" class="btn btn-info">Submit</button>
					</form>
				</div>
			</div>
			@endforeach
		</section>
	</div>
</div>
@endsection