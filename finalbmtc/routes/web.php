<?php
use Illuminate\Http\Request;
use App\post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/conductor', 'PagesController@conductor');
Route::get('/cbusnumber','PagesController@cbusnumber');
Route::post('/conductor','PagesController@generateTicket');

Route::group(['middleware' =>['web']], function(){
//Authentication

	Route::get('auth/login', 'Auth\LoginController@getLogin');
	Route::post('auth/login', 'Auth\LoginController@postLogin');
	Route::get('auth/logout', 'Auth\LoginController@getLogout');
//Registration
	Route::get('auth/register', 'Auth\RegisterController@getRegister');
	Route::post('auth/register', 'Auth\RegisterController@postRegister');
//Password reset
	Route::get('password/reset/{token?}', 'Auth\ForgotPasswordController@showResetForm');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
	Route::post('passwords/reset', 'Auth\ForgotPasswordController@reset');

	Route::post('/update','HomeController@update');
	Route::get('profile', 'Auth\UsersController@profile');
	Route::get('welcome', 'PagesController@getWelcome');
	Route::get('/', 'PagesController@getIndex');
	Route::post('/', 'PagesController@postContact');
	Route::resource('posts','PostController');
	Route::post('/update_address','HomeController@address');

	Route::get('/home', 'HomeController@index');

	Route::get('profile', 'UserController@profile');
	Route::post('profile', 'UserController@update_avatar');
	Route::get('/transaction','HomeController@getAmount');
	Route::post('/transaction','HomeController@postTransaction');
	Route::get('/settings','HomeController@userSettings');
	Route::get('/tickets', 'PagesController@mailticket');
});
