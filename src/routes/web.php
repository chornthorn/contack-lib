<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Thorn\Contact\Http\Controllers'],function (){
    Route::get('contact','ContactController@index');
    Route::post('contact','ContactController@send')->name('contact');
});
