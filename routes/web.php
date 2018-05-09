<?php
  Route::GET('', 'UserController@Parkir')->name('Status-Parkir');
  Route::GET('data-parkir', 'UserController@DataParkir')->name('Data-Parkir');
