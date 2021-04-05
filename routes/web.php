<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::redirect('/','/en');

Route::group(['prefix'=>'{language}'],function (){
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    #region all

    #region search
    Route::get('/search','App\Http\Controllers\OfficesController@search')->name('search');
    #endregion

    #region follow
    Route::post('follow/{user}','App\Http\Controllers\FollowsController@store');
    #endregion

    #region out of work
    //Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
    //Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home'); Same as the what i have above it
    #endregion

    #region routes for new items
    Route::get('/myprofile/items/car/add_new_car','App\Http\Controllers\CarsController@create');
    Route::get('/myprofile/items/boat/add_new_boat','App\Http\Controllers\BoatsController@create');
    Route::get('/myprofile/items/office/add_new_office','App\Http\Controllers\OfficesController@create');
    #endregion

    #region routes for exact items
    Route::post('/myprofile/items/car','App\Http\Controllers\CarsController@store');
    Route::post('/myprofile/items/boat','App\Http\Controllers\BoatsController@store');
    Route::post('/myprofile/items/office','App\Http\Controllers\OfficesController@store');
    #endregion

    #region route for item description
    Route::get('/myprofile/items/car/{car}','App\Http\Controllers\CarsController@show');
    Route::get('/myprofile/items/boat/{boat}','App\Http\Controllers\BoatsController@show');
    Route::get('/myprofile/items/office/{office}','App\Http\Controllers\OfficesController@show');
    #endregion

    #region edit&update profile
    Route::get('/myprofile/{user}/edit','App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
    Route::patch('/myprofile/{user}','App\Http\Controllers\ProfilesController@update')->name('profile.update');
    #endregion

    #region item edit&update post
    Route::get('/myprofile/items/car/{car}/edit','App\Http\Controllers\CarsController@edit')->name('car.edit');
    Route::patch('/myprofile/items/car/{car}','App\Http\Controllers\CarsController@update')->name('car.update');

    Route::get('/myprofile/items/office/{office}/edit','App\Http\Controllers\OfficesController@edit')->name('office.edit');
    Route::patch('/myprofile/items/office/{office}','App\Http\Controllers\OfficesController@update')->name('office.update');

    Route::get('/myprofile/items/boat/{boat}/edit','App\Http\Controllers\BoatsController@edit')->name('boat.edit');
    Route::patch('/myprofile/items/boat/{boat}','App\Http\Controllers\BoatsController@update')->name('boat.update');
    #endregion

    #region item destroy
    Route::delete('/myprofile/items/car/{car}','App\Http\Controllers\CarsController@destroy')->name('car.destroy');
    Route::delete('/myprofile/items/office/{office}','App\Http\Controllers\OfficesController@destroy')->name('office.destroy');
    Route::delete('/myprofile/items/boat/{boat}','App\Http\Controllers\BoatsController@destroy')->name('boat.destroy');
    #endregion

    #region profile
    Route::get('/myprofile/{user}','App\Http\Controllers\ProfilesController@index')->name('profile.show');
    //Route::get('/myprofile/{name}','App\Http\Controllers\ProfilesController@index')->name('profile.show'); //more userfriendly
    #endregion

#endregion
});





