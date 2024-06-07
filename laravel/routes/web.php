<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pages', PagesController::class);