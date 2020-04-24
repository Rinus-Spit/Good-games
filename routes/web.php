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

Route::middleware(['auth','roles.auth'])->group(function () {
    Route::get('/games', 'GameController@index')
        ->name('games.index');
    Route::post('/games', 'GameController@store')
        ->name('games.store');
    Route::get('/games/create', 'GameController@create')
        ->name('games.create');
    Route::get('/games/showgames', 'GameController@indexedit')
        ->name('games.indexedit');
    Route::get('/games/{game}', 'GameController@show')
        ->name('games.show');
    Route::get('/games/{game}/edit', 'GameController@edit')
        ->name('games.edit');
    Route::put('/games/{game}', 'GameController@update')
        ->name('games.update');
    Route::delete('/games/{game}', 'GameController@destroy')
        ->name('games.destroy');
    Route::get('/games/{game}/star', 'GameController@star')
        ->name('games.star');
    Route::get('/games/{game}/review', 'ReviewController@create')
        ->name('reviews.create');
    Route::get('/categories', 'CategoryController@index')
        ->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')
        ->name('categories.create');
    Route::post('/categories', 'CategoryController@store')
        ->name('categories.store');
    Route::get('/categories/{category}/edit', 'CategoryController@edit')
        ->name('categories.edit');
    Route::put('/categories/{category}', 'CategoryController@update')
        ->name('categories.update');
    Route::delete('/categories/{category}', 'CategoryController@destroy')
        ->name('categories.destroy');
    Route::post('/reviews', 'ReviewController@store')
        ->name('reviews.store');
    Route::get('/reviews/{game}/{review}/edit', 'ReviewController@edit')
        ->name('reviews.edit');
    Route::put('/reviews/{review}', 'ReviewController@update')
        ->name('reviews.update');
    Route::delete('/reviews/{review}', 'ReviewController@destroy')
        ->name('reviews.destroy');
    Route::get('image', 'ImageController@index')
        ->name('images.index');
    Route::get('store', 'ImageController@store')
        ->name('images.index');
});

Auth::routes();

Route::get('/home', 'GameController@home')->name('home');
