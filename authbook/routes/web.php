<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cek-intl', function () {
    return response()->json([
        'php_version' => PHP_VERSION,
        'php_ini' => php_ini_loaded_file(),
        'intl_aktif' => extension_loaded('intl'),
    ]);
});