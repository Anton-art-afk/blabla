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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/about', action: 'MainController@home');
Route::get('/katalog', action: 'MainController@katalog');
Route::get('/knigi', action: 'MainController@ida');
Route::post('/knigi1', action: 'MainController@knigi1');
Route::get('/adminka',function () {
echo 'Доступ получен! Для продолжения перейдите по ссылке: http://example-app/adminkaa';
})->middleware('admin'); 
Route::get('/adminkaa', action: 'MainController@adminkaa');
Route::get('/postupleniaa', action: 'MainController@postupleniaa')->name(name: 'erwe');
Route::post('/erwe/check', action: 'MainController@check');

Route::get('/zapis', action: 'MainController@zapis');
Route::get('/zapisdva', action: 'MainController@zapisdva');
Route::get('/search', action: 'Search@searchTerm;');