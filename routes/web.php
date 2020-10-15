<?php

use App\Http\Controllers\PagesController;
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


/*Route::get('about', function () {
    return view('pages.about');
});*/

Route::get('/', 'PostsController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
