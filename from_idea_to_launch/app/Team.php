<?php

namespace App;

use \Esensi\Model\Model;

class Team extends Model
{
	protected $rules = [
		'Name' => ['required'],
		'Sport' => ['required'],
		'NbPlayers' => ['required'],
	];

	// access players using $team->players
	public function players() {
		return $this->hasMany('App\Player')->orderBy('last_name', 'desc');
	}
}