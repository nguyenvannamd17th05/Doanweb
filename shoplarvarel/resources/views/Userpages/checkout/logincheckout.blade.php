@extends('welcome')
@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<?php
			$message=Session::get('message');
			if($message){
				echo $message;
				Session::put('message',null);
			}
			?>
						<form action="{{asset('logined')}}" method="post">
							@csrf
							<input type="text" name="username" placeholder="Username" />
							<input type="password" name="password" placeholder="Password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{asset('add-user')}}" method="post">
							@csrf
							<input type="text" name="user_name" placeholder="Name"/>
							<input type="email" name="user_email" placeholder="Email Address"/>
							<input type="password" name="user_pass" placeholder="Password"/>
							<input type="text" name="user_phone" placeholder="Phone"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection