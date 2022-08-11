<?php

//Manage
Route::resource('agency', 'AgencyController');
//Bank
Route::resource('bank', 'BankController');
//Branch
Route::resource('branch', 'BranchController');
//languge
Route::resource('language', 'LangugeController');
//agent
Route::resource('agent', 'AgentController');
//media
Route::resource('media', 'MediaController');
//devise
Route::resource('devise', 'DeviseController');


Route::post('/update/{id}', 'AgencyController@editLogin')->name('Agency.editLogin');


//Route::get('/{id}', 'BranchController@detail')->name('Agency.branch');


?>
