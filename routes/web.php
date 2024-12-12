<?php

use App\Http\Controllers\Donation;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/timezone',[Test::class,'timezone']);
Route::get('/form',[Donation::class,'form']);
Route::post('/submit',[Donation::class,'submit'])->name('submit');
