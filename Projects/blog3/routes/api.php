<?php

use Illuminate\Http\Request;
use App\Post;
use App\Article;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::group(['prefix' => '/posts', 'as' => 'posts.'], function () {
//     Route::get('/', 'PostController@index')->name('index');
//     Route::post('/', 'PostController@store')->name('store');
//     Route::get('/{id}', 'PostController@show')->name('show');
//     Route::put('/', 'PostController@update')->name('update');
//     Route::delete('/{id}', 'PostController@destroy')->name('destroy');
// });
// ------------------

/*
Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();

    return 204;
});
*/

Route::group([
	'prefix' => 'v2/auth'
], function(){
	Route::post('signin', 'Auth_API\V2\V2_AuthController@signin');  /* use back lash - \ */
	Route::post('signup', 'Auth_API\V2\V2_AuthController@signup');
	// Route::post('signup', 'v2_AuthController@signup');

	Route::group([
		'middleware' => 'auth:api'
	], function(){
		Route::get('signout', array('uses'=>'Auth_API\V2\V2_AuthController@signout'));
		Route::get('user', 'Auth_API\V2\V2_AuthController@user');
	});
});

/*
Ex: http://localhost/blog3/api/v2/auth/signup?name=sang&email=sang@gmail.com&password=123456&password_confirmation=123456 (test on Postman)

*/
// -------------------------------

// Allow other web app to access to get data
Route::group(['prefix' => 'v1', 
	// 'middleware' => 'auth:api'
], function () {
	Route::resource('articles', 'ArticleController', [
		'except' => ['create','edit']
	]);
	Route::resource('articles/registration', 'RegisterController', [
		'only' => ['store','destroy']
	]);
	Route::post('user/register', [
		'uses' => 'V1\V1_AuthController@store'
	]);
	Route::post('/user/signin', [
		'uses' => 'V1\V1_AuthController@signin'
	]);
	Route::get('/articles', 'ArticleController@index');
	Route::get('/articles/show/{article}', 'ArticleController@show');
	Route::post('/articles/add',			'ArticleController@store');
	Route::put('/articles/{article}',	'ArticleController@update');
	Route::delete('/articles/{article}','ArticleController@delete'); // test success with Postman: http://localhost/blog3/api/v1/articles/25
});

