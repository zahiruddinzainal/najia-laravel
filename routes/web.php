<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dlld', function () {
    return view('welcome');
});

Route::get('/', function () {
    $file = public_path('najia.apk');

    $headers = [
        'Content-Type' => 'application/vnd.android.package-archive',
    ];

    return response()->download($file, 'najia.apk', $headers);
});

