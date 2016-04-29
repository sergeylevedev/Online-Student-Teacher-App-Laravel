@extends('layouts.auth')
@section('title', 'Register | Teacher\'s Pet')
@section('content')
<div class="row">
	<div class="col-lg-6 col-lg-offset-3 col-xs-12">
		<div class="jumbotron">
		  <h2>Register</h2>
		  {!! Form::open() !!}
			<div class="form-group">
				{!! Form::text('username', '', array('class'=>'form-control','placeholder'=>'Username')) !!}
			</div>
		    <div class="form-group">
		    	{!! Form::email('email', null, array('class'=>'form-control','placeholder'=>'Email'))  !!}
		    </div>
		    <div class="form-group">
		    	{!! Form::password('password', array('class'=>'form-control','placeholder'=>'Password')) !!}
		    </div>

		    <div class="form-group">
		    	{!! Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password')) !!}
		    </div>

		    {!! Form::submit('Register', array('class'=>'btn btn-primary btn-block')) !!}
		  {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection