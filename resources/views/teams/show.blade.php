@extends('layouts.master')

@section('title')
Show Team Page
@endsection

@section('content')
<h1>Show Team Page</h1>
<p>ID: <?php echo $object->id; ?></p>
<p>Name: <?php echo $object->Name; ?></p>
<p>Sport: <?php echo $object->Sport; ?></p>
<p>Nb Players: <?php echo $object->NbPlayers; ?></p>
@endsection