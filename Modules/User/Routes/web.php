<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class,'index'])->name('user.index');
    Route::post('/', [UserController::class,'store'])->name('user.store');
});
