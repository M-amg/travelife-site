<?php
/**
 * Created by PhpStorm.
 * User: HAYATE TOUBALI
 * Date: 1/29/2019
 * Time: 3:25 PM
 */

Route::post('/updateActivite/{id}', 'ActiviteController@updateActivite')->name('admin.activite.updateActivite');
Route::get('/', 'ActiviteController@index')->name('admin.activite.index');
Route::get('/activite', 'ActiviteController@newActivite')->name('admin.activite.newActivite');
Route::post('/activite', 'ActiviteController@newActivite')->name('admin.activite.newActivite');
Route::post('/photoActivite', 'ActiviteController@photoActivite')->name('admin.activite.photoActivite');
Route::delete('/photoDestroy/{id}', 'ActiviteController@photoDestroy')->name('admin.activite.photoDestroy');
Route::get('/activite/{id}', 'ActiviteController@detailActivite')->name('admin.activite.activite');
Route::get('/destroy/{id}', 'ActiviteController@destroyActivite')->name('admin.activite.destroy');
//politic age
Route::resource('activitePolitics', 'PoliticAgeController');
