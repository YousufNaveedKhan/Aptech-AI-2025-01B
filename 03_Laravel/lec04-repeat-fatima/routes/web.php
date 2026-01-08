<?php

use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuranController::class, 'getSurahs']);
Route::get('/read/{index}', [QuranController::class, 'surahDetails']);