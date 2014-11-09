<!DOCTYPE html>
		<html lang="">
		
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@yield('title')
		<!-- Bootstrap CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		</head>
		
		<body>
			<div class="navbar navbar-inverse">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

		<a class="navbar-brand" href="/">Healthy Style</a>
		</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse">
		
		<ul class="nav navbar-nav navbar-right">
		
		<li class="active"><a href="/article">บทความ</a></li>
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">ค่าแคลอรี่<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="/food">อาหาร</a></li>
				<li><a href="/sport">กิจกรรมการเผาผลาญพลังงาน</a></li>
				</ul>
		</li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">โปรแกรมการคำนวณ<b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="/bmi">BMI</a></li>
				<li><a href="/bmr">BMR</a></li>
			</ul>
		</li>
			@if(Auth::guest())
				<li><a href="/signup">สมัครสมาชิก</a></li>
				<li><a href="/signin">Log In</a></li>
			@else
				<li><a href="/profile">Profile</a></li>
				<li><a href="/signout">Log out</a></li>
			@endif
			<!--i><a href="/signup">Register</a></li>
			<li><a href="/signin">Log In</a></li>-->

		</ul>
		</div>
		</div>
		
		<div class="container">
		@yield('body')
		</div>
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="/js/bootstrap.min.js"></script>
		</body>

		<footer>
		@yield('footer')
		</footer>

</html>