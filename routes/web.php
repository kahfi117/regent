<?php

use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('welcome');
});

//route user
 
Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'UserController@index')->name('index');
Route::get('/index-user', 'UserController@indexUser')->name('user');
Route::get('/tempat-wisata', 'UserController@tempatWisataUser')->name('tempatWisata');
Route::get('/tour-guide', 'UserController@tourGuide')->name('tourGuide');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/destinasi', 'UserController@destinasi')->name('destinasi');
Route::get('/detail-destinasi', 'UserController@detailDestinasi')->name('detail');
Route::get('/detail-tour-guide', 'UserController@detailTourGuide')->name('detailTourGuide');



//route Admin

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin-login','AdminController@login')->name('loginAdmin');
Route::get('/admin-content', 'AdminController@content')->name('content');
Route::get('/admin-content/tambah-content', 'AdminController@tambahContent')->name('tambahContent');
Route::get('/admin-tour-guide', 'AdminController@tourGuide')->name('adminTourGuide');
Route::get('/proses-tambah', 'AdminController@addProsesContent')->name('prosesTambah');

// local route

Route::get('/local-register', 'LocalController@register')->name('localRegister');
Route::get('/local-profile', 'LocalController@profile')->name('localProfile');