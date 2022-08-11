<?php
//booking
Route::resource('devis', 'DevisController');
Route::resource('lineDevis', 'LineDevisController');
Route::resource('rules-devis', 'RulesDevisController');
Route::resource('facture-devis', 'BillDevisController');
Route::get('/editDevis/{id}/changeEtat/{etat}', 'DevisController@changeEtat')->name('devis.changeEtat');
?>