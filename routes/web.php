<?php

use App\Events\BroadcastEvent;
use App\Events\BroadcastWithPusherEvent;
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
    return view('welcome');
});


Route::get('/event', function () {
    event(new BroadcastEvent());
    return view('broadcast');
});


Route::get('/pusher', function () {
    event(new BroadcastWithPusherEvent());
    return view('broadcasting-with-pusher');
});
