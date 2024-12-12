<?php
namespace App\Http\Controllers;

class Donation extends Controller{
	public function form(){
		return view('donation.form');
	}
	public function submit(){
		return 'gotovo';
	}
}