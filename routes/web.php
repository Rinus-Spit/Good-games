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

Route::get('/', 'GameController@home');

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/logout', function () {
//     return redirect('login')->with(Auth::logout());
// });

/*Route::get('/about', function () {
    //$profiel = App\Game::paginate(4);
    
    return view('profiel', ['Game' => App\Game::get()]);

    return view('Game');
});*/

Route::get('/games', 'GameController@index')
    ->name('games.index')
    ->middleware('auth');
Route::post('/games', 'GameController@store')
    ->name('games.store')
    ->middleware('auth');
Route::get('/games/create', 'GameController@create')
    ->name('games.create')
    ->middleware('auth');
Route::get('/games/showgames', 'GameController@indexedit')
    ->name('games.indexedit')
    ->middleware('auth');
Route::get('/games/{game}', 'GameController@show')
    ->name('games.show')
    ->middleware('auth');
Route::get('/games/{game}/edit', 'GameController@edit')
    ->name('games.edit')
    ->middleware('auth');
Route::put('/games/{game}', 'GameController@update')
    ->name('games.update')
    ->middleware('auth');
Route::delete('/games/{game}', 'GameController@destroy')
    ->name('games.destroy')
    ->middleware('auth');
Route::get('/games/{game}/star', 'GameController@star')
    ->name('games.star')
    ->middleware('auth');
Route::get('/categories', 'CategoryController@index')
    ->name('categories.index')
    ->middleware('auth');
Route::get('/categories/create', 'CategoryController@create')
    ->name('categories.create')
    ->middleware('auth');
Route::post('/categories', 'CategoryController@store')
    ->name('categories.store')
    ->middleware('auth');
Route::get('/categories/{category}/edit', 'CategoryController@edit')
    ->name('categories.edit')
    ->middleware('auth');
Route::put('/categories/{category}', 'CategoryController@update')
    ->name('categories.update')
    ->middleware('auth');
Route::delete('/categories/{category}', 'CategoryController@destroy')
    ->name('categories.destroy')
    ->middleware('auth');

Auth::routes();

Route::get('/home', 'GameController@home')->name('home');
