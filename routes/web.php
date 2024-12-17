<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login', [
        "image" => "Logo SMAN 11 Pangkep.png",
    ]);
});