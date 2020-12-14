@extends('welcome')
@section('content')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{asset('/')}}">Home</a></li>
				  <li class="active">Payment</li>
				</ol>
			</div><!--/breadcrums-->
			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
		
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						@foreach($data as $v)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('./upload/product/'.$v->options->image)}}" height="60" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">	
								<p>{{number_format($v->price,0,',','.').' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
							
								<div class="cart_quantity_button">
									<form action="{{asset('update-cart/'.$v->rowId)}}" method="post">
										@csrf
									<input class="cart_quantity_input" type="number" name="qty" value="{{$v->qty}}" autocomplete="off" size="2">
									<input type="submit" value="Update" name="updateqty" class="btn btn-sm">
									
							</form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									
									{{
									number_format($v->price*$v->qty,0,',','.').' '.'VND'}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('delete-procart/'.$v->rowId	)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
						<div class="review-payment">
							<h2 style="margin:40px 0; font-size: 20px;">Payment Options
								
						</h2>
					</div>
					<form action="{{URL::to('order')}}" method="POST">
						@csrf
			<div class="payment-options" >
					<span>
						<label><input name="payment_option" value="ATM" type="checkbox"> ATM</label>
					</span>
					<span>
						<label><input name="payment_option" value="COD" type="checkbox"> COD</label>
					</span>

					<input style="margin-bottom: 20px " type="submit" name="sendpayment" value="Send" class="btn btn-primary ">
					
				</div>
			</form>
		</div>
	</section> <!--/#cart_items-->

	</section> <!--/#cart_items-->
	@endsection