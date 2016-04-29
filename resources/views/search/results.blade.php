@extends('layouts.master')

@section('title', 'Results | Teacher\'s Pet')

@section('content')
    
<h3>Search Results for: {{ $query }}</h3>

@if (count($questions) === 0)
<h4>No Results Found: WOMP WOMP</h4>
@elseif (count($questions) >= 1)
  @foreach($questions as $question)
      @include ('components.question')
  @endforeach
@endif  

{!! $questions->render() !!}

@endsection
