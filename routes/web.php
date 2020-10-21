<?php

use Illuminate\Support\Facades\Route;

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

//UI
Route::get('/','UiController@index');
Route::get('/posts','UiController@PostsIndex');
Route::get('/posts/{id}/details','UiController@postDetailsIndex');

// search
Route::get('/search_posts','UiController@search');

// search by category 
Route::get('/search_posts_by_category/{catId}','UiController@searchByCategory');



// likedislike
Route::post('/post/like/{postId}','LikeDislikeControlle@like');
Route::post('/post/dislike/{postId}','LikeDislikeControlle@dislike');
// comment

Route::post('/post/comment/{postId}','CommentController@comment');

//Admin 

Route::group(['prefix'=>'admin','middleware'=>['auth','isAdmin']],
function(){
    Route::get('/dashboard','admin\AdminDashboardController@index');
    Route::get('/users','admin\UserController@index');
    Route::get('/users/{id}/edit','admin\UserController@edit');
    Route::post('/users/{id}/update','admin\UserController@update');
    Route::post('/users/{id}/delete','admin\UserController@delete');

    Route::resource('skills','admin\SkillController');
    Route::resource('projects','admin\ProjectController');
    Route::resource('categories','admin\CategoryController');
    Route::resource('posts','admin\PostController');
    // showhidecomment
    Route::post('comment/{commentId}/show_hide','admin\PostController@showHideComment');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
