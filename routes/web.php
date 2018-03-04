<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// create route
Route::get('tutorials', function () {
    return 'tutorials';
});
// Required Parameters
Route::get('tutorials/{name}', function ($name) {
    return $name . ' là tôi';
});
# Regular Expression
Route::get('regularExpression/{name}', function($name) {
    return $name . ' là tôi, max cute';
})->where(['name' => '[a-zA-Z0-9]+']); 



# Named Routes
Route::get('route-01',['as' => 'myRoute-01', function() {
    echo 'route 01';
}]);
Route::get('route-02', function() {
    echo 'route 02';
})->name('myRoute-02');
# http://localhost:..../goiten => http://localhost:..../route01
Route::get('returnRoute', function() {
    return redirect()->route('myRoute-01'); 
    # return redirect()->route('myRoute-02');
});



# Group -> need perfix
Route::group(['prefix' => 'myGroup'], function() {
    # http://localhost:..../myGroup/user01
    Route::get('user01', function() {
        echo 'user 01';
    });

    # http://localhost:..../myGroup/user02
    Route::get('user02', function() {
        echo 'user 02';
    });

    # http://localhost:..../myGroup/user03
    Route::get('user03', function() {
        echo 'user 03';
    });
});



# Controller function -> route
Route::get('getParameters/{name}', 'usersController@getParameters')->where('name', '[a-z]+');
Route::get('postUpController', 'usersController@postUpController');




# form method(post) in resources/views/tutorials.php
Route::get('getUser', function() {
    return view('postUser');
});
# Route::post('postUser', ['as' => 'postOneUser',  'uses' => 'usersController@postUser']);
Route::post('postUser', 'usersController@postUser')->name('postOneUser');




# Cookie
Route::get('setCookie', 'usersController@setCookie')->name('setCookie');
Route::get('getCookie', 'usersController@getCookie')->name('getCookie');




# Upload file
Route::get('fileUpload', function () {
    return view('postUpload');
});
Route::post('postUpload', 'usersController@postUpload')->name('postUpload');




# output JSON
Route::get('getJSON', 'usersController@getJSON')->name('getJSON');




# VIEW
Route::get('viewTutorial', 'usersController@viewTutorial')->name('viewTutorial');
Route::get('viewTutorial/{user}', 'usersController@viewTutorialUser')->name('viewTutorialUser');
view()->share('userViewShare', 'pinnguyen208');




#  Blade template
Route::get('bladeTemplate', function () {
    # return view('components.php');       # => return component
    # return view('components.laravel'); # => return component
    return view('layouts.viewMaster'); # => return layout master
});
Route::get('bladeTemplate/{nameView}', 'usersController@bladeTemplate');