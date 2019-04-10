<?php

Route::get('/retro/comment', 'Retro\CommentController@index');
Route::post('/retro/comment', 'Retro\CommentController@store');

Route::get('/future/comment', 'Future\CommentPageController@show');
Route::get('/future/api/comment', 'Future\CommentController@index');
Route::post('/future/api/comment', 'Future\CommentController@store');
Route::get('/future/api/comment-count', 'Future\CommentCountController@show');
