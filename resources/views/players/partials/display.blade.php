<div class="list-group">
@foreach ($object->players as $player)
	<a href="{{ url('players', [$player->id]) }}" class="list-group-item">
		{{ $player->last_name }}, {{ $player->first_name }}
		<div class="text-muted">
			<p><small>Position: {{ $player->position }}</small></p>
		</div>
	</a>
@endforeach
</div>