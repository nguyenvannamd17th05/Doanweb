@extends('welcome')
@section('content')
<section id="cart_items">
			<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('index')}}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<?php
			$data=Cart::content(); 

			?>
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
		</div>
	</section> <!--/#cart_items-->
	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				
			</div>
			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{Cart::total().' '.'VND'}}</span></li>
							<li>Tax <span>{{Cart::tax().' '.'VND'}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{Cart::total().' '.'VND'}}</span></li>
						</ul>
							<a class="btn btn-default update" href="{{asset('index')}}">Home</a>
							 <?php
                                    $user_id=Session::get('user_id');
                                    $ship_id=Session::get('ship_id');
                                    if($user_id !=NULL && $ship_id==NULL){
                                ?>  <a class="btn btn-default check_out" href="{{asset('checkout')}}">Check Out</a>
                                <?php 
                                	}elseif ($user_id !=NULL && $ship_id!=NULL) {
                                ?> <a class="btn btn-default check_out" href="{{asset('payment')}}">Check Out</a>
                                <?php }else{ ?>
                                <a class="btn btn-default check_out" href="{{asset('login')}}">Check Out</a>
                                      <?php } ?>  
							
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection