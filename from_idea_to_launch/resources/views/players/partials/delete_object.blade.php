
<h2>Delete this player:</h2>

{!! Form::open(	[
		'action' => ['PlayerController@destroy', $player->id],
		'method' => 'delete',
		'class' => 'delete-object'
	]) !!}



	<button class="btn btn-danger" type="submit">DELETE this player!</button>

{!! Form::close() !!}