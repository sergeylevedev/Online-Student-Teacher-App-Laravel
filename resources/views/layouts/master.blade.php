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
	<header class="main-header">
		<nav class="container main-nav">
		  <div class="main-nav--container">
				
				<a class="logo--main-nav blue-text hover-grey" href="{{ url('/') }}"><i class="fa fa-graduation-cap"></i> Teacher's Pet</a>
				
				<div class="main-nav--links col-md-2">
						<a href="{{ url('ask') }}" class="blue-text hover-grey col-md-6">Ask</a>
						
						<div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->username }} <span class="caret"></span></button>
						  <ul class="dropdown-menu pull-right">
						    <li><a href="#" class="hover-grey">Settings</a></li>
						    <li role="separator" class="divider"></li>
						    <li><a href="{{ url('logout') }}" class="hover-grey"><i class="fa fa-sign-out"></i>Log Out</a></li>
						  </ul>
						</div>
				</div>

		  </div>
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@yield('content')
			</div>	
			<div class="col-md-4">
				@include('search.bar')
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>