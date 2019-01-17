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
// Route::group(['prefix' => 'v1'], function () {
// 	Route::resource('articles', 'ArticleController', [
// 		'except' => ['create','edit']
// 	]);
// 	Route::resource('articles/registration', 'RegisterController', [
// 		'only' => ['store','destroy']
// 	]);
// 	Route::post('user/register', [
// 		'uses' => 'AuthController@store'
// 	]);
// 	Route::post('/user/signin', [
// 		'uses' => 'AuthController@signin'
// 	]);
// 	Route::get('/articles', 'ArticleController@index');
// 	Route::get('/articles/show/{article}', 'ArticleController@show');
// 	Route::post('/articles/add',			'ArticleController@store');
// 	Route::put('/articles/{article}',	'ArticleController@update');
// 	Route::delete('/articles/{article}','ArticleController@delete'); // test success with Postman: http://localhost/blog3/api/v1/articles/25
// });

