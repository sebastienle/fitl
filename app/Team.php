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
}