@extends('layouts.master')

@section('title')
Show Player Page
@endsection

@section('content')
<div class="page-header">
	<a href="{{ action('PlayerController@edit', $object->id) }}" class="btn btn-info pull-right">Edit</a>
	<h1><p>Name: <?php echo $object->last_name; ?>, <?php echo $object->first_name; ?></p></h1>
</div>
<p>Position: <?php echo $object->position; ?></p>

@endsection