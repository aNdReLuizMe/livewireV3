<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleAppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', [ExampleAppController::class, 'app']);
Route::get('/app2', [ExampleAppController::class, 'app2']);
