<?php

use App\Http\Controllers;

Route::post('/brief/send', 'BriefController@addBrief');
Route::get('/', 'BriefController@index');
