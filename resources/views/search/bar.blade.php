{!! Form::open(array('action' => 'QueryController@search'))!!}
	<div class="col-md-8">
		@include('forms.searchText')
	</div>
	<div class="col-md-4">
		<div class="form-group">
			{!! Form::submit('Search', array('class' => 'btn btn-primary btn-block')) !!}
		</div>
	</div>
	
{!! Form::close() !!}