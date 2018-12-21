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


Route::get('blog2/laravel-admin', 'HomeController@myAdmin');

Route::get('blog2/laravel-users', 'HomeController@myUsers');

// Route::post('blog/contact/submit', 'MessageController@submit');


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ------------

// Route::get('/contact', function () {
//     return view('/email/contact');
// });

Route::get('/contact', function () {
    'uses' => 'ContactUsController@contactUsPage'
});
Route::get('/send', [
	'uses' => 'ContactUsController@send',
	'as' => 'contact.send'
]);