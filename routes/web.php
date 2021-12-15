<?php

Route::get('/', function() {
  $ip       = $_SERVER['REMOTE_ADDR'];
  $referer  = $_SERVER['HTTP_REFERER'];
  $agent    = $_SERVER['HTTP_USER_AGENT'];
  
  return view('welcome', [
    'ip' => $ip,
    'referer' => $referer,
    'agent' => $agent,
  ]);
});

Route::post('/form-todo-submit', 'App\Http\Controllers\FormTodoController@submit');
