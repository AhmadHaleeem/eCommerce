<?php
Route::group(['prefix' => 'admin'], function () {
   Route::get('/home', function () {
     return view('admin.home');
   });
});