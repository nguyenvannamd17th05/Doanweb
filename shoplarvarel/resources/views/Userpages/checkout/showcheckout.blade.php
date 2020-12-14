@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{asset('/')}}">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">

					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill Info</p>
							<div class="form-one">
								<form action="{{asset('add-checkout')}}" method="post">
									@csrf
									<input type="text" name="ship_email" placeholder="Email*">
								
									<input type="text" name="ship_name" placeholder="Name ">
									
									<input type="text" name="ship_add" placeholder="Address*">
									<input type="text" name= "ship_phone" placeholder="Phone">
									<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="10"></textarea>
									<input type="submit" value="Submit" name="order" class="btn btn-primary btn-sm">
								</form>
							</div>
							
						</div>
					</div>
									
				</div>
			</div>

	</section> <!--/#cart_items-->
	@endsection