<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/koding', function () {
    return "halo koding disini";
});

Route::get('/aplikasi', function () {
    return view('aplikasi');
});

Route::get('/app1', function () {
    return view('app');
});

Route::get('/blog','BlogController@index');
Route::get('/blog/{id}','BlogController@show');
