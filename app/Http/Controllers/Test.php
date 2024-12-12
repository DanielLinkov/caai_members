<?php
namespace App\Http\Controllers;

class Test extends Controller{
	public function timezone(){
		return date_default_timezone_get();
	}
}