<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

Route::get('/', function () {
    return view('welcome');
});

route::get('form', [Users::class, 'index'])->name('form');

route::post('store', [Users::class, 'store'])->name('store');

// form  to check if he user admin or not

route::get('log_in', action: [Users::class, 'log_in'])->name('log_in');

route::post('sign_in', [Users::class, 'sign_in'])->name('sign_in');
