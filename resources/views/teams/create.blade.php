@extends('layouts.master')

@section('title', 'Add a new team')

@section('content')

{!! Form::model($team, ['action' => 'TeamController@store']) !!}

	
	<div class="form-group">
		{!! Form::label('Name', 'Enter your team name:') !!}
		{!! Form::text('Name', '', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('Sport', 'Enter your sport:') !!}
		{!! Form::select('Sport', ['Baseball' => 'Baseball', 'Football' => 'Football'], ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('NbPlayers', 'Number of Players:') !!}
		{!! Form::selectRange('NbPlayers', 1, 20, ['class' => 'form-control']) !!}
	</div>

	<button class="btn btn-success" type="submit">Save your team!</button>
	

{!! Form::close() !!}

@endsection