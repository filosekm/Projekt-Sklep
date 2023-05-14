<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CzescSamochodowaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::post('/subscribe', 'HomeController@subscribe')->name('subscribe');
    Route::group(['middleware' => ['guest']], function() {

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/dodaj', [CzescSamochodowaController::class, 'dodaj'])->name('dodaj');
        Route::post('/dodaj-rekord', [CzescSamochodowaController::class, 'dodajRekord'])->name('dodaj-rekord');
    });
    Route::get('/kontakt', [PagesController::class, 'kontakt'])->name('kontakt');
    Route::get('/o-nas', [PagesController::class, 'onas'])->name('onas');
    Route::get('/opony', [PagesController::class, 'opony'])->name('opony');
    Route::get('/silnik', [PagesController::class, 'silnik'])->name('silnik');
    Route::get('/zawieszenie', [PagesController::class, 'zawieszenie'])->name('zawieszenie');
    Route::get('/skrzynia-biegow', [PagesController::class, 'skrzynia'])->name('skrzynia-biegow');

});


