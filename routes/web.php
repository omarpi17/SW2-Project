<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Home@getHome');

Route::get('/login', 'AuthController@LoginView');
Route::post('/login', 'AuthController@Login');

Route::get('/register', 'AuthController@RegisterView');
Route::post('/register', 'AuthController@Register');

Route::get('/profile', 'AuthController@Profile');

Route::get('/logout', 'AuthController@Logout');

Route::post('/edit-post/{id}', 'UserPostManagement@Update');
Route::get('/edit-post/{id}', 'UserPostManagement@GetEditView');

Route::get('/add-post', 'TagController@AddPostViewWithAllTags');
Route::post('/add-post', 'UserPostManagement@CreatePost');

Route::get('/add-tag', 'TagController@AddTagView');
Route::get('/add-tag/{id}', 'TagController@DeleteTag');
Route::post('/add-tag', 'TagController@CreateTag');

Route::get('/delete-post/{id}', 'UserPostManagement@Delete');

Route::get('user/single_post/{postId}&{userId}', 'SinglePostController@LikePost');
Route::get('/user/single_post/{id}', 'SinglePostController@GetSinglePostView');
Route::get('/user/single_post/{id}/{liked}', 'SinglePostController@GetSinglePostView');

Route::post('/user/single_post/{id}/UnlikePost', 'SinglePostController@UnlikePost');

Route::post('/user/single_post/comment', 'SinglePostController@Comment');
Route::post('/user/single_post/{id}/comment', 'SinglePostController@Comment');

Route::get('/show_users', 'UsersManagement@showUsers');

Route::get('/delete-user/{id}', 'UsersManagement@deleteUser');

Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/user/video_post', function () {
    return view('user.video_post');
});

