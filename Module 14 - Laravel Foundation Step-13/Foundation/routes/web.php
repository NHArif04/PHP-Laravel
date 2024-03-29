<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::put('/hello', function(){
    return 'Hello Laravel from API';
});

Route::get('/',[DemoController::class, 'DemoAction']);

Route::get('/info/{name}/{age}', [DemoController::class, 'GetInfo']);

Route::get('/info', [DemoController::class, 'GetJSON']);

