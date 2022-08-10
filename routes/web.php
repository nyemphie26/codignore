<?php

use TCG\Voyager\Facades\Voyager;
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
//     return view('landing-page');
// });


Route::get('/', ['uses' => 'App\Http\Controllers\HomeController@index', 'as' => 'home']);
Route::get('/posts/{slug}', ['uses' => 'App\Http\Controllers\BlogController@index', 'as' => 'blog.browse']);
Route::get('/posts/{slug}/{prdSlug}', ['uses' => 'App\Http\Controllers\BlogController@read', 'as' => 'blog.read']);

// Route::get('/posts/{slug}', function () {
//     return view('blog.detail');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
