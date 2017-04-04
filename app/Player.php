<?php

namespace App;

use \Esensi\Model\Model;

class Player extends Model
{
	protected $rules = [
		'first_name' => ['required'],
		'last_name' => ['required'],
		'position' => ['required'],
	];
}
