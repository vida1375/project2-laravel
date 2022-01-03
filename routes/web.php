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

Route::get('/','PageController@homepage');
// Route::get('/abouts/create','AboutController@about');
Route::resource('posts','PostController');
Route::resource('usellists','UserlistController');
Route::resource('archives','ArchiveController');
Route::get('/archive','PageController@archive');
Route::get('/userlist','PageController@userlist');
Route::resource('comments','CommentController');
Route::resource('contacts','ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('api/posts', function(){
    return new \App\Http\Resources\PostCollection(\App\Post::all());
});
Route::get('/ccomment', 'CcommendController@index');
Route::get('api/comments', function(){
    return new \App\Http\Resources\CommentCollection(\App\Comment::all());
});
Route::get('/car', 'CarController@index');

Route::get('api/posts/{post}', function(\App\Post $post){
    // return $post;
    return new \App\Http\Resources\Singlepost($post);
});

Route::get('/setting', function () {
    return view('setting');
})->middleware('auth');

Route::post('/setting', function (Illuminate\Http\Request $request) {
    $user = \App\User::find(Auth::id());
    // validation here
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    $product = [];
    $product->decrement('quantity', 1);
    $product->save();

    return back();
})->middleware('auth');