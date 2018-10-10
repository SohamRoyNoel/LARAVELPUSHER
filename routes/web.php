<?php


use App\Events\Event;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listen', function (){
   return view('listenBroadCast');
});

Route::get('/event', function (){

    event(new Event('Youre a dick'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
