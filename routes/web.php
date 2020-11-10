<?php

use Carbon\Carbon;
use App\Classes\FormatMonths;
use App\Classes\Payment\BasicPayment;
use App\Classes\Payment\BonusPayment;
use App\Classes\Payment\PaymentDates;
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
    // $start = Carbon::now();
    // $end   = Carbon::today()->addYear(1);
    // $bonusPaymentDate = 0;
    // $lastDay = [];

    // do {
    //     $months[] = $start->format('d-m-Y');
    // } while ($start->addMonth() <= $end);

    // foreach ($months as $month) {
    //     $cbDate = Carbon::parse($month);

    //     $bonusPaymentDate = $cbDate->day(10)->isWeekday()
    //         ? $cbDate->day(10)->format('d m y')
    //         : $cbDate->day(10)->previous(Carbon::FRIDAY)->format('d m y');

    //     $lastDay[] = $bonusPaymentDate;
    // }

    // return $lastDay;

    $dates = ['10-11-2020','10-12-2020'];

    $date =  FormatMonths::months('2020-11-09 23:58:13');

    $basic = PaymentDates::get_payment_date($date, new BasicPayment);
    $bonus = PaymentDates::get_payment_date($date, new BonusPayment);

    return $bonus;
    
});
