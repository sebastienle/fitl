@extends('layouts.master')

@section('title', "Players")

@section('content')
<div class="page-header">
	<h1>Players</h1>
</div>

<div class="list-group">

	@foreach ($objects as $player)
		<a href="{{ url('players', [$player->id]) }}" class="list-group-item">
			<h2 class="list-group-item-heading">{{ $player->last_name }}, {{ $player->first_name }}</h2>
			<p class="list-group-item-text">
				Saved on {{ $player->created_at }}
			</p>
		</a>
	@endforeach

</div>
@endsection