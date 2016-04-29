@extends('layouts.master')

@section('title', 'Edit | Teacher\'s Pet')

@section('content')

<h3>
	<span>Edit Question</span>
	
</h3>

{!! Form::model($question, array('url' => 'questions/' . $question->id . '/edit', 'method' => 'patch'), $question->id) !!}
	@include('forms.question')
	<div class="form-group">
		{!! Form::submit('Save changes', array('class' => 'btn btn-primary btn-block')) !!}
	</div>
{!! Form::close() !!}

@endsection