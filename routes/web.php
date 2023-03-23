<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shiftmanagement\monthlyController;
use App\Http\Controllers\shiftmanagement\semimonthlyController;
use App\Http\Controllers\shiftmanagement\weeklyController;
use App\Http\Controllers\shiftmanagement\dailyController;
use App\Http\Controllers\shiftmanagement\shiftController;
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




Route::get('/post', function () {
    return view('welcome');
});




Route::get('/', function(){
    return view('shift');
});
Route::get('/case', function(){
    return view('frontend.case.case');
});

Route::get('/case/001', function(){
    return view('frontend.case.individual');
});

Route::get('/function', function(){
    return view('frontend.function.index');
});
Route::get('/function/management', function(){
    return view('frontend.function.management');
});
Route::get('/function/timecard', function(){
    return view('frontend.function.timecard');
});
Route::get('/function/help', function(){
    return view('frontend.function.help');
});

Route::get('/cost', function(){
    return view('frontend.cost.index');
});
Route::get('/request', function(){
    return view('frontend.request.index');
});
Route::get('/request/thanks', function(){
    return view('frontend.request.thanks');
});
Route::get('/shift_using_terms', function () {
    return view('shift_using_terms');
});


Route::resource('/shiftmonthly', monthlyController::class);

Route::resource('/shiftdaily', dailyController::class);

Route::resource('/shiftweekly', weeklyController::class);

Route::resource('/shiftsemimonthly', semimonthlyController::class);

Route::resource('/shiftmemo', shiftController::class);
