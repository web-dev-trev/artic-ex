<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;

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

Route::get('/events', function () {
    return view('events', [
        'events' => Event::all()
    ]);
});

Route::get('/events/{id}', function ($id) {
    return view('event', [
        'event' => Event::find($id)
    ]);
});

// Route::get('/dashboard/{type}', function($type) {
//     return view('type', [
//         'type' =>
//     ])
// });
