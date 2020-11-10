<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\FormatMonths;
use App\Http\Controllers\Controller;
use App\Classes\Payment\BasicPayment;
use App\Classes\Payment\BonusPayment;
use App\Classes\Payment\PaymentDates;
use Illuminate\Support\Facades\Storage;

class MakeCsvController extends Controller
{
    static public function make($date)
    {
        $dates = FormatMonths::months($date);
        $basic = PaymentDates::get_payment_date($dates, new BasicPayment);
        $bonus = PaymentDates::get_payment_date($dates, new BonusPayment);

        $merge = collect([$dates, $basic, $bonus]);

        $merge->each(function($date, $key){
            dd($date);
        });

        Storage::put('payment.csv', $dates);
        return;
    }
}
