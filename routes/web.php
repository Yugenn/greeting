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
    return '<h1>はじまりのぺーじ</h1>';
});


Route::get('/comments/freeword/{msg}', function($msg) {
    return view('message.free', ['msg' => $msg]);
});


Route::get('/comments/{greeting}', [App\Http\Controllers\GreetController::class, 'result']);
