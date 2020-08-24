<?php

use GuzzleHttp\Middleware;
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


Route::get('/', 'NewsController@index');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/category/{category}', 'CategoryController@show')->name('category');
Route::get('/news/{id}.html', 'NewsController@show')
	->where('id', '\d+')
	->name('news');


//for admin
Route::group(['middleware' => 'auth'], function() {
  Route::get('/account', 'Account\IndexController@index')->name('account');

  Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'Admin\IndexController@index')
       ->name('admin');
    //news
    Route::resource('/news', 'Admin\NewsController');
    Route::get('/news', 'Admin\NewsController@index')->name('admin.news');
    Route::get('/destroy/{id}','Admin\NewsController@destroy');
    //Category
    Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories');
    Route::resource('/category', 'Admin\CategoryController');
    Route::get('/category/destroy/{id}','Admin\CategoryController@destroy');
    //Feedback
    Route::get('/feedback', 'Admin\FeedbackController@index')->name('admin.feedback');
    Route::resource('/feedback', 'Admin\FeedbackController');
    Route::get('/feedback/destroy/{id}','Admin\FeedbackController@destroy');
  
  });
});

Route::get('/admin/feedback', 'Admin\FeedbackController@index')->name('admin.feedback');
//Route::get('/admin/feedback', 'Admin\FeedbackController@index')->name('feedback.index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/collections', function() {
	$collection = collect([
		100,
		200,
		500,
		900,
		1200
	]);

	$collection->dd(1);
});
