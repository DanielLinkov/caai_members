<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonationForm extends Model
{
	protected $fillable = [
		'email',
		'name',
		// 'address',
		// 'city'
	];
}
