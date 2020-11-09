<?php

use Carbon\Carbon;
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

Route::get('/', function () {
    $start = Carbon::now();
    $end   = Carbon::today()->addYear(1);

    // do {
    //     $months[$start->format('d-m-Y')] = $start->format('D F Y');
    // } while ($start->addMonth() <= $end);

    return $start->lastOfMonth()->isWeekday();
});
