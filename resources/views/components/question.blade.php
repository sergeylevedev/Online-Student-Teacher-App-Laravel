<div class="panel panel-primary">
  <div class="panel-heading">
    <a href="{{ url('questions', $question->id) }}" class="question-title"><h3 class="panel-title">{{ $question->title }}</h3></a>
  </div>
  <div class="panel-body">
    {{ $question->body }}
  </div>
  <div class="panel-footer"><small>Posted by <a href="#">{{ $question->user->username }}</a> {{ $question->created_at->diffForHumans() }}</small></div>
</div>