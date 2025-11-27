<?php

use App\Livewire\AdminComponent;
use App\Livewire\AuthComponent;
use App\Livewire\HomeComponent;
use App\Livewire\PlayComponent;
use App\Livewire\UserComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeComponent::class)->name('home');

Route::get('/login',AuthComponent::class)->name('login');

Route::get('/play',PlayComponent::class)->name('play');

Route::middleware('auth')->group(function () {

    Route::middleware('role:user')->group(function(){
        Route::get('/user',UserComponent::class)->name('user');
    });

    Route::middleware('role:admin')->group(function(){
        Route::get('/admin',AdminComponent::class)->name('admin');
    });

    Route::get('logout', function (){
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});

