@extends('admin_layout')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Add Category Product
			</header>
			<div class="panel-body">
				<div class="position-center">
					<form role="form" action="{{URL::to('added-category')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Category</label>
							<input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Điện thoại, máy tính bảng, laptop, ...">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Description</label>
							<input type="text" name="category_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">
						</div>
						<button type="submit" name="category_add" class="btn btn-info">Submit</button>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection