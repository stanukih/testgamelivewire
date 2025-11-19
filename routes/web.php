<?php

use App\Livewire\AdminComponent;
use App\Livewire\AuthComponent;
use App\Livewire\HomeComponent;
use App\Livewire\PlayComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',HomeComponent::class)->name('home');

Route::get('/auth',AuthComponent::class)->name('auth');
Route::get('/user',UserComponent::class)->name('user');
Route::get('/play',PlayComponent::class)->name('play');
Route::get('/admin',AdminComponent::class)->name('admin');/*

Route::middleware('auth')->group(function () {
    
});*/