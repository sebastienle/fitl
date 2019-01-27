	<div class="form-group">
		{!! Form::label('Name', 'Enter your team name:') !!}
		{!! Form::text('Name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Sport', 'Enter your sport:') !!}
		{!! Form::select('Sport', ['Baseball' => 'Baseball', 'Football' => 'Football'], null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('NbPlayers', 'Number of Players:') !!}
		{!! Form::selectRange('NbPlayers', 1, 20, null, ['class' => 'form-control']) !!}
	</div>