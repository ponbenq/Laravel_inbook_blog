<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['web']], function () {
  
    //comment
    Route::post('comments/{post_id}', ['uses' => 'App\Http\Controllers\CommentsController@store', 'as' => 'comments.store']);
    //slug
    Route::get('blog/{slug}', ['uses' => 'App\Http\Controllers\BlogController@getSingle', 'as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');
    Route::get('blog', ['uses' => 'App\Http\Controllers\BlogController@getIndex', 'as' => 'blog.index']);

    //contact
    Route::get('contact', [PagesController::class, 'getContact']);
    Route::post('contact', [PagesController::class, 'postContact']);
    //about
    Route::get('about', [PagesController::class, 'getAbout']);
    //welcome
    Route::get('/', [PagesController::class, 'getIndex'])->name('welcome');
    //allpost
    Route::resource('posts', PostController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
