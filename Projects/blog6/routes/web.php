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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', 'DashboardController@index');

Route::get('/blog6/laravel-admin', 'HomeController@myAdmin');

Route::get('/blog6/laravel-users', 'HomeController@myUsers');

// Route::post('blog/contact/submit', 'MessageController@submit');

Route::resource('student','StudentController');

Route::get('/student', 'StudentController@index');
// Route::get('/student/index', 'StudentController@index');

// Route::get('/create', 'StudentController@create');

Route::get('/student/create', 'StudentController@create');

// Route::get('/edit', 'StudentController@edit');

// Route::get('/student/', function () {
//     return view('/student/index');
// });

// ---------------------------------

Route::resource('blog','PostsController');

Route::get('/blog_crud', 'PostsController@crud');

Route::get('/blog', 'PostsController@index');

Route::get('/blog/create', 'PostsController@create');
// ---------------------------------

Route::get('/', function () {
    return view('home');
});

Route::get ('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');



Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// ------------

// Route::get('/contact', function () {
//     return view('/emails/contact');
// });

Route::get('/contact', 'ContactUsController@contactUsPage');

// Route::get('/contact', function () {
//     'uses' => 'ContactUsController@contactUsPage'
// });
Route::post('/send', [
	'uses' => 'ContactUsController@send',
	'as' => 'contact.send'
]);
