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
Route::get('/chat', 'ChatController@chat');
Route::post('/send', 'ChatController@send');

Route::get('/contact', function() {
	return view('contact');
});
// Route::get('email/teacher->id', function ()
// {
// 	return view('user.email');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/file', 'FileController@index');
Route::post('/store', 'FileController@store');
Route::get('/show', 'FileController@show');


// Route::get('admin/home', 'AdminController@index');
Route::GET('admin', 'Admin\LoginController@showloginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login' );               
 Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
 Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
 Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
 Route::GET('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('teacher/home', 'TeacherController@index');
Route::GET('teacher', 'Teacher\LoginController@showloginForm')->name('teacher');
Route::POST('teacher', 'Teacher\LoginController@login' );               
 Route::POST('teacher-password/email', 'Teacher\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
 Route::GET('teacher-password/reset', 'Teacher\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
 Route::POST('teacher-password/reset', 'Teacher\ResetPasswordController@reset');
 Route::GET('teacher-password/reset/{token}', 'Teacher\ResetPasswordController@showResetForm')->name('teacher.password.reset');
 // Route::POST('teacher/register', 'Teacher\RegisterController@register'); 
 // Route::GET('teacher/register', 'Teacher\RegisterController@showRegistrationForm')->name('teacher.register');
 Route::resource('teacher/register', 'NewTeacherRegController');
 // Route::resource('teacher/home','NewTeachHomeController');
 Route::resource('admin/home', 'NewAdminHomeController');
 Route::resource('/home', 'QuestionController');
 Route::resource('teacher/home', 'AnswerController');
 Route::resource('/student', 'CoursesController')->middleware('auth:teacher');
 Route::resource('/get', 'GetController')->middleware('auth');
 Route::resource('/see', 'GetTeacherController')->middleware('auth');
 Route::resource('/message', 'MessageController');
 //user blog routes
 Route::resource('mmublog', 'BlogController');
 Route::get('posts/{post?}','User\PostController@posts')->name('posts');

 //admin blog routes
 Route::resource('admin/posts', 'Admin\PostController');
 Route::resource('admin/tags', 'Admin\TagController');
 Route::resource('admin/categories', 'Admin\CategoryController');
 Route::resource('admin/users', 'Admin\UserController');
 Route::resource('/class', 'JoinsController')->middleware('auth');
 Route::resource('/library', 'LibrariesController');
 Route::resource('/library', 'NoteController');
 Route::resource('/rate', 'RatingController')->middleware('auth');
