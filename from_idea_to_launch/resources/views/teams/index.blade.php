@extends('layouts.master')

@section('title', "Teams")

@section('content')
<div class="page-header">
	<h1>Teams</h1>
</div>

<div class="list-group">

	@foreach ($objects as $team)
		<a href="{{ url('teams', [$team->id]) }}" class="list-group-item">
			<h2 class="list-group-item-heading">{{ $team->Name }}</h2>
			<p class="list-group-item-text">
				Saved on {{ $team->created_at }}
			</p>
		</a>
	@endforeach

</div>
@endsection