@extends('layouts.master')

@section('title')
Show Team Page
@endsection

@section('content')
<div class="page-header">
	<a href="{{ action('TeamController@edit', $object->id) }}" class="btn btn-info pull-right">Edit</a>
	<h1><p>Name: <?php echo $object->Name; ?></p></h1>
</div>
<p>ID: <?php echo $object->id; ?></p>
<p>Sport: <?php echo $object->Sport; ?></p>
<p>Nb Players: <?php echo $object->NbPlayers; ?></p>
@endsection