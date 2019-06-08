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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reports', 'ReportsController@index')->name('reports');
Route::get('/contacts', 'ContactsController@index')->name('contacts');


Route::resource('members', 'MemberController', [
    'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy'],
]);

Route::resource('categories', 'CategoryController', [
    'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy'],
]);

Route::resource('files', 'FileController', [
    'only' => ['index', 'create', 'show', 'store', 'edit', 'update', 'destroy'],
]);

Route::resource('comments', 'CommentController', [
    'only' => ['index', 'store',  'update', 'destroy'],
]);


Route::resource('flats', 'FlatController', [
    'only' => ['index', 'edit',  'update'],
]);