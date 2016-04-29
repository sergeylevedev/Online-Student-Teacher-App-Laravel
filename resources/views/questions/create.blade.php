@extends('layouts.master')

@section('title', 'Ask | Teacher\'s Pet')

@section('content')

<h3>Ask a new question</h3>

{!! Form::open() !!}
	@include('forms.question')
	<div class="form-group">
		{!! Form::submit('Ask this question!', array('class' => 'btn btn-primary btn-block')) !!}
	</div>
{!! Form::close() !!}

@endsection