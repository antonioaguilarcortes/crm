<?php

Route::get('/', function () {
    return view('home');
});


Route::get('/directory', function(){
	return view('directory');
});

Route::get('/activity', function(){
	return view('activity', ["activity"=>"Dato"]);
});

// Route::get('/directory/{id}', function($id){
// 	return view('directory', ["directory"=>$id]);
// });

Route::redirect("/here","/home");