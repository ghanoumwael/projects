<?php





Route::get('/a','rr@show_login');
Route::get('c','rr@show');
Route::get('mainpage','rr@mainpage')->middleware('age');
Route::get('a3','rr@show_reges');
Route::get('create_board','rr@create_board');
Route::get('qqq','rr@qqq');
Route::get('forget_password','rr@forget_password');
Route::post('reset_pass','rr@reset_pass');
Route::post('a2','rr@store');
Route::get('/', ['uses' => 'GithubController@index', 'as' => 'index']);

Route::get('/finder', ['uses' => 'GithubController@finder', 'as' => 'finder']);

Route::get('/edit', ['uses' => 'GithubController@edit', 'as' => 'edit_file']);

Route::post('/update', ['uses' => 'GithubController@update', 'as' => 'update_file']);

Route::get('/commits', ['uses' => 'GithubController@commits', 'as' => 'commits']);

