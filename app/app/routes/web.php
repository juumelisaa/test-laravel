<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts;
use App\Livewire\Login;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', Login::class);
Route::get('/posts', Posts::class)->middleware('check.token');