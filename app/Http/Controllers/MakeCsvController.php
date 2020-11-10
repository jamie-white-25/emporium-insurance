<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Classes\FormatMonths;
use App\Http\Controllers\Controller;
use App\Classes\Payment\BasicPayment;
use App\Classes\Payment\BonusPayment;
use App\Classes\Payment\PaymentDates;
use Illuminate\Support\Facades\Storage;

class MakeCsvController extends Controller
{
    static public function make()
    {
        $dates = FormatMonths::months();
        $basic = PaymentDates::get_payment_date($dates, new BasicPayment);
        $bonus = PaymentDates::get_payment_date($dates, new BonusPayment);

        $dates = collect($dates)->prepend('Period');
        $basic = collect($basic)->prepend('Basic');
        $bonus = collect($bonus)->prepend('Bonus');

        Storage::disk('local')->exists('payment.csv') 
            ? Storage::delete('payment.csv')
            : '';

        Storage::put('payment.csv', '');

        $filePath = Storage::path('payment.csv');

        $arr = collect();
        for ($i = 0; $i < count($dates); $i++) {
            $arr->push($dates[$i] . ', ' . $basic[$i] . ', ' . $bonus[$i]);
        }

        $file = fopen($filePath, 'a'); 

        foreach ($arr as $date) {
            fputcsv($file, explode(', ', $date));
        }

        fclose($file); 

        return;
    }
}
