<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

Route::resource('posts.comments', PostController::class)->parameters([
    'posts' => 'admin_post',
    'comments' => 'admin_comments'
]);