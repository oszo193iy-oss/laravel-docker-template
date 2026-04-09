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
Route::post('/todo', 'TodoController@store')->name('todo.store');
// 登録
Route::get('/todo/create', 'TodoController@create')->name('todo.create');
// 表示
Route::get('/todo', 'TodoController@index')->name('todo.index');
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');
// {}は変数
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
// /edit データベースから特定のデータを取り出し、HTMLの <form> に流し込んで表示する。この {id} は「どのデータを編集するか」を特定するための識別子。
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');
// PUT ToDoを更新するルート
Route::delete('/todo/{id}', 'TodoController@delete')->name('todo.delete');