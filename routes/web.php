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



Route::get('/courses', 'CourseController@index')->name('course_index');
Route::get('/contact', 'CourseController@contact')->name('course_contact');

Route::get('/notes', 'NotesController@index')->name('index');
Route::get('/edit_note/{id}', 'NotesController@edit_note')->name('edit_note');
Route::get('/del_note/{id}', 'NotesController@del_note')->name('del_note');
Route::get('/form_add', 'NotesController@form_add')->name('form_add');

Route::get('/all_notes', 'NotesController@all_notes')->name('all_notes');
//Route::get('/fixit', 'CourseController@fixit')->name('fixit ');
Route::post('/notes', 'NotesController@createNote')->name('create_note');
Route::post('/update_note', 'NotesController@update_note')->name('update_note');
Route::post('/karina', 'NotesController@createAction')->name('create_action');
Route::get('/karina', 'NotesController@allAction')->name('all_action');
Route::get('/amo', 'NotesController@AmoCrm')->name('amo');
Route::post('/amo', 'NotesController@AmoCrm')->name('amo');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
