@extends('layouts.master')

@section('title', 'Teacher\'s Pet')

@section('content')

@if(Session::has('flash_message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{ Session::get('flash_message') }}
	</div>
@endif

<h3>Recent Questions</h3>

@foreach($questions as $question)
	@include('components.question')
@endforeach

@endsection