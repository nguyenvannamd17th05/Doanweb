@extends('admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Add Brand
			</header>
			<div class="panel-body">
				<div class="position-center">
					<form role="form" action="{{URL::to('added-brand')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Brand</label>
							<input type="text" name="brand_name" class="form-control" id="exampleInputEmail1" placeholder="Apple, Samsung, Huawei, ...">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Description</label>
							<input type="text" name="brand_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả hãng">
						</div>
						<button type="submit" name="brand_add" class="btn btn-info">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection