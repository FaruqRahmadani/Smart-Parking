<?php
  Route::GET('', 'UserController@Parkir')->name('Status-Parkir');
  Route::GET('data-parkir', 'UserController@DataParkir')->name('Data-Parkir');
  Route::POST('data-parkir', 'UserController@FilterDataParkir')->name('Filter-Data-Parkir');
  Route::GET('/print-parkir/{tanggalawal}/{tanggalakhir}/{nomorparkir}/{statusparkir}', 'UserController@PrintDataParkir')->name('Print-Data-Parkir');
  Route::GET('statistik-parkir', 'UserController@StatistikParkir')->name('Statistik-Parkir');
