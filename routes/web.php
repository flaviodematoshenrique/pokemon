<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

/*Route::get('/', function() {
    return view ('welcome')
});


Route::get('/pokemon/{nome}', function($nome) {

    return view ('/pokemon/{nome}').$nome;
});*/

Route::get('/pokemon/{nome}', [HomeController::class, 'pokemon'] );
