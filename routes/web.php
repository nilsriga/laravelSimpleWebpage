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

Route::get('/', 'ViewController@index');
Route::get('/articles', 'ViewController@articles');
Route::get('/articles2', 'ViewController@articles2');
Route::get('/articles3', 'ViewController@articles3');
Route::get('/article1', 'ViewController@article1');
Route::get('/chat', 'ViewController@chat');
Route::post('/chat', 'ViewController@chatStore');
Route::get('/register', 'ViewController@register');
Route::get('/aboutUs', 'ViewController@aboutUs');
Route::get('/clicker', 'ViewController@clicker');
Route::get('/calculator', 'ViewController@calculator');
Route::get('/userData', 'ViewController@userData')  ;

Route::get('/moviesearcher', function () {
    return response()->download(public_path('downloadsForPortfolio/'.'movie_searcher.7z'));
});

Route::get('/tictactoe', function () {
    return response()->download(public_path('downloadsForPortfolio/'.'desas.7z'));
});

Route::get('/tv', function () {
    return response()->download(public_path('downloadsForPortfolio/'.'tv.zip'));
});

// Route::post('/create', 'MessageController@create');

// Route::get('/', function() {
//     return view ('catpage/home')->with(['page' => 'index']);
// });

// Route::get('/articles', function() {
//     return view ('catpage/articles')->with(['page' => 'articles']);
// });

// Route::get('/articles1', function() {
//     return view ('catpage/articles1')->with(['page' => 'articles1']);
// });

// Route::get('/chat', function() {
//     return view ('catpage/chat')->with(['page' => 'chat']);
// });

// Route::get('/about_us', function() {
//     return view ('catpage/about_us')->with(['page' => 'about_us']);
// });

// Route::get('/404', function() {
//     return view ('catpage/404')->with(['page' => '404']);
// });

// Route::get('/register', function() {
//     return view ('catpage/register')->with(['page' => 'register']);
// });


// Route::post('/register', 'AccountController@storeUser');

// Route::post('/chat/save-message', 'AccountController@saveChatMessage');

// Route::get('/chat/get-messages', 'AccountController@getChatMessages');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function() {
//     return 'articles page';
// });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
