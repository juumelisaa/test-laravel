<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', Posts::class);