<?php
use App\Http\Controllers\TestController;

Route::get('/', [TestController::class, 'welcome']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
