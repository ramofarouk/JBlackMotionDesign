<?php

Route::match(['get', 'post'], '/', 'FrontendController@index');
Route::match(['get', 'post'], '/qui-sommes-nous', 'FrontendController@quiSommesNous');
Route::match(['get', 'post'], '/realisations', 'FrontendController@realisations');
Route::match(['get', 'post'], '/services', 'FrontendController@services');
Route::match(['get', 'post'], '/services/creation-graphique', 'FrontendController@servicesCG');
Route::match(['get', 'post'], '/services/conception-applications', 'FrontendController@servicesCA');
Route::match(['get', 'post'], '/services/fournitures-materiels', 'FrontendController@servicesFM');
Route::match(['get', 'post'], '/contact', 'FrontendController@contact');
