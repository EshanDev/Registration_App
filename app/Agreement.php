<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model {
	protected $fillable = ['username', 'registration_code', 'email'];
}
