<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoPageController;

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
    return view('front.main.home');
});

Route::get('/{slug}', [InfoPageController::class, 'get_page'])->name('infopage');


