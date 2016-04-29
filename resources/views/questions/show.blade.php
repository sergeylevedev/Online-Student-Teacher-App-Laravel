@extends('layouts.master')

@section('title', 'Question | Teacher\'s Pet')

@section('content')

@if(Session::has('flash_message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{ Session::get('flash_message') }}
	</div>
@endif

<h3>
	<span>Question {{ $question->id }}</span>
	@if(Auth::user()->id === $question->user_id)
		<div class="pull-right">
			<a href="{{ url('questions/' . $question->id . '/delete') }}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
			<a href="{{ url('questions/' . $question->id . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
		</div>
	@endif
</h3>

@include('components.question')
	
@endsection