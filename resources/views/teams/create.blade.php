@extends('layouts.master')

@section('title', 'Add a new team')

@section('content')

{!! Form::model($team, ['action' => 'TeamController@store']) !!}

	
@include('teams.partials.object_form')

	<button class="btn btn-success" type="submit">Save your team!</button>
	

{!! Form::close() !!}

@endsection