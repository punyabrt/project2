<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index')->name('index');

/*Route::get('/post', function () {
    return view('post');
})->name('post');*/

Route::get('/post', 'PostController@index')->name('post');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    
    //route for user profile
    Route::get('/users2/profile', 'ProfilesController@index')->name('users2.profile');
    Route::post('/users2/profile/update', 'ProfilesController@update')->name('users2.profile.update');
    Route::get('/users2/profile/create', 'ProfilesController@create')->name('users2.profile.create'); 

});



    






    