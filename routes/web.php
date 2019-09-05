<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directory', function(){
	return view('directory');
});

Route::get('/activity', function(){
	return view('activity');
});

Route::redirect("/here","/welcome");