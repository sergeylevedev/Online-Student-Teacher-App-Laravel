<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{ asset('images/graduation-cap-64.png') }}">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>@yield('title')</title>
</head>
<body>
	<div class="full-width-bg">
		<header class="main-header">
			<nav class="container main-nav">
			  <div class="main-nav--container">
					<a class="logo--main-nav white-text hover-blue" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>
					
					<div class="main-nav--links col-md-2">
						<a href="{{ url('register') }}" class="white-text hover-blue">Register</a>
						<a href="{{ url('login') }}" class="white-text hover-blue">Log In</a>
					</div>

			  </div>
			</nav>
		</header>

		<div class="container">
			@include('components.errors')
			@yield('content')
		</div>
	</div>
</body>