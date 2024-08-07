<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;


Route::get('/ ', function () {
    return view('index');
});
