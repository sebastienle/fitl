@extends('layouts.master')

@section('title', 'Edit a player')

@section('content')

<div class="page-header">
	<h1>Edit a player</h1>
</div>

{!! Form::model($player, 
	[
		'action' => ['PlayerController@update', $player->id],
		'method' => 'put'
	]) !!}

	@include('players.partials.object_form')

	<button class="btn btn-success" type="submit">Update the player!</button>

{!! Form::close() !!}

@include('players.partials.delete_object')

@endsection