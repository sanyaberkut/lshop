<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    logger()
        ->channel('telegram')
        ->debug('Hello!');

    //throw new \App\Services\Telegram\Exceptions\TelegramBotApiException('12345');

    return view('welcome');
});


Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});


Route::get('/123', function () {
    Log::debug('Message');

    // logger()
    //     ->channel('telegram')
    //     ->debug('Test Log');

    return view('welcome');
});

