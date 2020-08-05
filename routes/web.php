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

Route::get('/', 'HomeController@index');
Route::get('/news/{id}.html', 'NewsController@show')
	->where('id', '\d+')
	->name('news.show');

Route::get('/hello', 'HelloController@index');

Route::get('/newscategories', 'NewsCategoriesController@index');
Route::get('/newscategories/{id}.html', 'NewsCategoriesController@showNews')
	->where('id', '\d+')
	->name('newscategories.shownews');
Route::get('/newscategories/item{id}.html', 'NewsCategoriesController@showItem')
	->where('id', '\d+')
	->name('newscategories.showitem');

Route::get('/addnews', 'AddNewsController@index');

Route::get('/admin', 'Admin\IndexController@index');

Route::get('/admin/test1', 'Admin\IndexController@test1')
	->name('admin.test1');
Route::get('/admin/test2', 'Admin\IndexController@test2')
	->name('admin.test2');


//for admin
Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'Admin\IndexController@index')
		->name('admin');
	Route::get('/news', 'Admin\NewsController@index')
		->name('admin.news');
	Route::get('/news/create', 'Admin\NewsController@create')
		->name('admin.news.create');
	Route::get('/news/{id}/edit', 'Admin\NewsController@edit')
		->where('id', '\d+')
		->name('admin.news.edit');
});
