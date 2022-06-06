<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromesController;
use App\Http\Controllers\TimeSinceController;
use App\Http\Controllers\ResponseTextController;
use App\Http\Controllers\RandomBeerController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\NomineeController;

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

Route::get('/palindromes', [PalindromesController::class, 'palindromes'])->name('plaindromes-count');
Route::get('/timesince', [TimeSinceController::class, 'timesince'])->name('time-since');
Route::get('/responsetext', [ResponseTextController::class, 'responseText'])->name('response-text');
Route::get('/randombeer', [RandomBeerController::class, 'randomBeer'])->name('random-beer');
Route::get('/groups', [GroupsController::class, 'groupsGenerator'])->name('groups-generator');
Route::post('/nominee', [NomineeController::class, 'nomineeSelector'])->name('nominee-selector');