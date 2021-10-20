<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SectionsController;

//rutele pentru paginile publice
Route::get('/section/{slug}', [SectionsController::class, 'showSection'])->name('section');
