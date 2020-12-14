<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<head>
	<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{asset('./styling/css/bootstrap.min.css')}}" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{asset('./styling/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('./styling/css/style-responsive.css')}}" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('./styling/css/font.css')}}" type="text/css"/>
	<link href="{{asset('./styling/css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome icons -->
	<script src="{{asset('./styling/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
	<div class="log-w3">
		<div class="w3layouts-main">
			<h2>Sign In Now</h2>
			<?php
			$message=Session::get('message');
			if($message){
				echo $message;
				Session::put('message',null);
			}
			?>
			<form action="{{URL::to('/admin-dashboard')}}" method="post">
				@csrf
				<input type="email" name="admin_email" class="ggg" name="Email" placeholder="E-MAIL" required="">
				<input type="password" name="admin_password" class="ggg" name="Password" placeholder="PASSWORD" required="">
				<span><input type="checkbox" />Remember Me</span>
				<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
			</form>
			<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
		</div>
	</div>
	<script src="{{asset('./styling/js/bootstrap.js')}}"></script>
	<script src="{{asset('./styling/js/jquery.dcjqaccordion.2.7.js')}}"></script>
	<script src="{{asset('./styling/js/scripts.js')}}"></script>
	<script src="{{asset('./styling/js/jquery.slimscroll.js')}}"></script>
	<script src="{{asset('./styling/js/jquery.nicescroll.js"')}}></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('./styling/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('./styling/js/jquery.scrollTo.js')}}"></scrippublic/styling></body>
</html>