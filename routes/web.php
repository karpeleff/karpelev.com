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

Route::get('/info', function () {
    phpinfo();
});



Route::get('/courses', 'CourseController@index')->name('course_index');
Route::get('/contact', 'CourseController@contact')->name('course_contact');

Route::get('/notes', 'NotesController@index')->name('index');
Route::get('/form_add', 'NotesController@form_add')->name('form_add');
Route::get('/ajax', 'NotesController@ajax')->name('ajax');

Route::get('/all_notes', 'NotesController@all_notes')->name('all_notes');
//Route::get('/fixit', 'CourseController@fixit')->name('fixit ');
Route::post('/notes', 'NotesController@createNote')->name('create_note');

Route::post('/karina', 'NotesController@createAction')->name('create_action');
Route::get('/karina', 'NotesController@allAction')->name('all_action');
Route::get('/amo', 'NotesController@AmoCrm')->name('amo');
Route::post('/amo', 'NotesController@AmoCrm')->name('amo');
Route::get('/get_key', 'NotesController@AuthRequest')->name('get_key');
Route::get('/resume', 'NotesController@resume')->name('resume');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('upload',['as' => 'upload_form', 'uses' => 'NotesController@getForm']);
Route::post('upload',['as' => 'upload_file','uses' => 'NotesController@upload']);
