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

Route::get('/','HomePageController@index');
//Route::get('/about','AboutController@index');
Route::get('/category/{id}', 'ListingPageController@listing1');
Route::get('/author/{id}', 'ListingPageController@listing');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details/{slug}','DetailsPageController@index');
/////////////////////////////////////////
Route::group(['prefix' => 'back','middleware'=>'auth'], function () {
Route::get('/','Admin\DashboardController@index');
Route::get('/category','Admin\CategoryController@index');
Route::get('/category/create','Admin\CategoryController@create');
Route::get('/category/edit','Admin\CategoryController@edit');
/////premissions//////////
// Route::get('/permission','Admin\PermissionController@index');
Route::get('/permission', ['uses'=>'Admin\PermissionController@index','as'=>'permission-list', 'middleware'=> 'permission:Permission List|All'] );
Route::get('/permission/create',['uses'=>'Admin\PermissionController@create','as'=>'permission-create','middleware'=>'permission:Permission List|All']);
Route::post('/permission/store',['uses'=>'Admin\PermissionController@store','as'=>'permission-store','middleware'=>'permission:Permission List|All']);
Route::get('/permission/edit/{id}',['uses'=>'Admin\PermissionController@edit','as'=>'permission-edit','middleware'=>'permission:Permission List|All']);
Route::put('/permission/edit/{id}',['uses'=>'Admin\PermissionController@update','as'=>'permission-update','middleware'=>'permission:Permission List|All']);
Route::get('/permission/delete/{id}',['uses'=>'Admin\PermissionController@delete','as'=>'permission-delete','middleware'=>'permission:Permission List|All']);
/////////roles/////////////////
Route::get('/roles','Admin\RoleController@index');
Route::get('/roles/create','Admin\RoleController@create');
Route::post('/roles/store','Admin\RoleController@store');
Route::get('/roles/edit/{id}',['uses'=>'Admin\RoleController@edit','as'=>'role-edit']);
Route::put('/roles/edit/{id}',['uses'=>'Admin\RoleController@update','as'=>'role-update']);
Route::get('/roles/delete/{id}',['uses'=>'Admin\RoleController@destroy','as'=>'role-delete']);
///////Authors/////////////
Route::get('/authors','Admin\AuthorController@index');
Route::get('/authors/create','Admin\AuthorController@create');
Route::post('/authors/store','Admin\AuthorController@store');
Route::get('/authors/edit/{id}',['uses'=>'Admin\AuthorController@edit','as'=>'author-edit']);
Route::put('/authors/edit/{id}',['uses'=>'Admin\AuthorController@update','as'=>'author-update']);
Route::get('/authors/delete/{id}',['uses'=>'Admin\AuthorController@destroy','as'=>'author-delete']);
////////////////////category////////////////
Route::get('/categories',['uses'=>'Admin\CategoryController@index','as'=>'category-list', 'middleware'=> 'permission:Category List|All'] );
Route::get('/category/create',['uses'=>'Admin\CategoryController@create','as'=>'category-create', 'middleware'=> 'permission:Category Create|All'] );
Route::post('/category/store',['uses'=>'Admin\CategoryController@store','as'=>'category-store', 'middleware'=> 'permission:Category Store|All'] );
Route::put('/category/status/{id}',['uses'=>'Admin\CategoryController@status','as'=>'category-status', 'middleware'=> 'permission:Category Store|All'] );
Route::get('/category/edit/{id}',['uses'=>'Admin\CategoryController@edit','as'=>'category-edit', 'middleware'=> 'permission:Category edit|All'] );
Route::put('/category/edit/{id}',['uses'=>'Admin\CategoryController@update','as'=>'category-update', 'middleware'=> 'permission:Category update|All'] );
Route::get('/category/delete/{id}',['uses'=>'Admin\CategoryController@destroy','as'=>'category-delete', 'middleware'=> 'permission:Category delete|All'] );
/////////////posts///////////////////
Route::get('/posts',['uses'=>'Admin\PostController@index','as'=>'post-list', 'middleware'=> 'permission:Post List|All'] );
Route::get('/posts/create',['uses'=>'Admin\PostController@create','as'=>'post-create','middleware'=>'permission:Post List|All']);
Route::post('/posts/store',['uses'=>'Admin\PostController@store','as'=>'post-store','middleware'=>'permission:Post List|All']);
Route::put('/posts/status/{id}',['uses'=>'Admin\PostController@status','as'=>'post-status', 'middleware'=> 'permission:Post Store|All'] );
Route::put('/posts/hot/{id}',['uses'=>'Admin\PostController@hot','as'=>'post-hot', 'middleware'=> 'permission:Post Store|All'] );
Route::get('/posts/edit/{id}',['uses'=>'Admin\PostController@edit','as'=>'post-edit','middleware'=>'permission:Post List|All']);
Route::put('/posts/edit/{id}',['uses'=>'Admin\PostController@update','as'=>'post-update','middleware'=>'permission:Post List|All']);
Route::get('/posts/delete/{id}',['uses'=>'Admin\PostController@destroy','as'=>'post-delete','middleware'=>'permission:Post List|All']);
//Comment////
Route::get('/comment/{id}',['uses'=>'Admin\CommentController@index','as'=>'comment-list','middleware'=>'permission:Post List|All']);
Route::get('/comment/replay/{id}',['uses'=>'Admin\CommentController@replay','as'=>'comment-view','middleware'=>'permission:Post List|All']);
Route::post('/comment/replay',['uses'=>'Admin\CommentController@store','as'=>'comment-reply','middleware'=>'permission:Post List|All']);
Route::put('/comment/status/{id}',['uses'=>'Admin\CommentController@status','as'=>'comment-status', 'middleware'=> 'permission:Post List|All'] );
///Settings//////
Route::get('/settings',['uses'=>'Admin\SettingController@index','as'=>'setting', 'middleware'=> 'permission:Post List|All'] );
Route::put('/settings/update',['uses'=>'Admin\SettingController@update','as'=>'setting-update','middleware'=>'permission:Post List|All']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
