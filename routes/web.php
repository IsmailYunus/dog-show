<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware ('auth') -> group (function () {

    Route::get ('/', [DogController::class, 'index']) -> name ('index');

    Route::get ('/dog/{dog}/', [DogController::class, 'show']);
    Route::delete ('/dog/{dog}/', [DogController::class, 'destroy']);

    Route::get ('/dog/', [DogController::class, 'create']);
    Route::post ('/dog/', [DogController::class, 'store']);

    Route::get ('/dog/{dog}/edit', [DogController::class, 'edit']);
    Route::patch ('/dog/{dog}/', [DogController::class, 'update']);

    Route::get ('/dog/{dog}/email', [MailController::class, 'sendDogDetails']);

});
