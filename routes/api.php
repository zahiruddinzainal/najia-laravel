<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Models\User;
use App\Models\PrayerTimes;
use App\Models\Donation;
use App\Models\SelectedContent;
use App\Models\EventCalendar;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/account/{id}', function ($mosque_id) {
    $account = User::where('id', $mosque_id)->get();
    $prayerTimes = PrayerTimes::where('mosque_id', $mosque_id)->get();
    $donation = Donation::where('mosque_id', $mosque_id)->get();
    $selectedContent = SelectedContent::where('mosque_id', $mosque_id)->get();
    $event = EventCalendar::where('mosque_id', $mosque_id)->get();
    return response()->json([
        'account' => $account,
        'prayer_times' => $prayerTimes,
        'donation' => $donation,
        'selected_content' => $selectedContent,
        'event' => $event,
    ]);
});
