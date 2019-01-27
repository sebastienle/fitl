@extends('layouts.master')

@section('title', 'Edit a team')

@section('content')

<div class="page-header">
	<h1>Edit a team</h1>
</div>

{!! Form::model($team, 
	[
		'action' => ['TeamController@update', $team->id],
		'method' => 'put'
	]) !!}

	@include('teams.partials.object_form')

	<button class="btn btn-success" type="submit">Update the team!</button>

{!! Form::close() !!}

@include('teams.partials.delete_object')

@endsection