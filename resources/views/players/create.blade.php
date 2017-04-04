@extends('layouts.master')

@section('title', 'Add a new player')

@section('content')

{!! Form::open(['route' => ['players.store', $object->id]]) !!}
	
@include('players.partials.object_form')

	<button class="btn btn-success" type="submit">Save your player!</button>

{!! Form::close() !!}

@endsection