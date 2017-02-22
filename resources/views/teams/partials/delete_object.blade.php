
<h2>Delete this team:</h2>

{!! Form::open(	[
		'action' => ['TeamController@destroy', $team->id],
		'method' => 'delete',
		'class' => 'delete-object'
	]) !!}


	<button class="btn btn-danger" type="submit">DELETE this team!</button>

{!! Form::close() !!}