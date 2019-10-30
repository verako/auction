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

Route::get('/',['as'=>'home', function () {
    return view('welcome');
}]);
Route::get('/card', function () {
    return view('card');
});
Route::get('/cabinet', function () {
    return view('cabinet');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/add_lot', function () {
    return view('add_lot');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/regulations', function () {
    return view('regulations');
});
Route::get('/questions', function () {
    return view('questions');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin_cat', function () {
    return view('admin_cat');
});
Route::get('/admin_lot', function () {
    return view('admin_lot');
});
Route::get('/admin_comment', function () {
    return view('admin_comment');
});
Route::get('/admin_pages_questions', function () {
    return view('admin_pages_questions');
});
Route::get('/admin_pages_regulations', function () {
    return view('admin_pages_regulations');
});
Route::get('/admin_users', function () {
    return view('admin_users');
});
Route::get('/admin_mailbox', function () {
    return view('admin_mailbox');
});
Route::get('/admin_compose', function () {
    return view('admin_compose');
});
Route::get('/read_mail', function () {
    return view('read_mail');
});
Route::get('/formpurse', function () {
    return view('formpurse');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
