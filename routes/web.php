<?php

use Illuminate\Support\Facades\{Auth, Route};

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
Route::get('/','PageController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index') ->name('home');

Route::prefix('admin/',['middleware'=>'roles','roles'=>'admins'])->group(function (){
    Route::resource('users','AdminUserController');
    Route::resource('categories','AdminCategoryController');
});
/*
 Route::group(['prefix'=>'admin','middleware'=>'roles','roles'=>'admins'],function (){
    Route::resource('users','AdminUserController');
    Route::resource('categories','AdminCategoryController');
});*/

 Route::get('/category/{id}','PageController@viewCategory')->name('category');

Route::get('/upload',['uses'=>'UploadController@index','middleware'=>'roles','roles'=>['admins','users']])->name('upload');

Route::post('/upload',['uses'=>'UploadController@upload','middleware'=>'roles','roles'=>['admins','users']])->name('upload.save');

Route::get('/book/{id}','PageController@viewBook')->name('book');

Route::post('comment{id}',['uses'=>'PageController@addComment','middleware'=>'auth'])->name('comment');
