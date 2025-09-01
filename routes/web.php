<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
    route::get('/dashboard', function(){
        return view('dashboard',['nama' => 'DPR AJG']);
        
    });

