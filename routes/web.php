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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/timeline',function(){
    return view('timeline');
});

Route::get('/profile',function(){
    return view('profile');
});
Route::get('/profile-depth',function(){
    return view('profiledepth');
});
// Route::get('/post',function(){
//     return view('post');
// });
Route::get('/post-detail',function(){
    return view('detailpost');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');