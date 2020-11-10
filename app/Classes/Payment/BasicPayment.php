<?php

namespace App\Classes\Payment;

use App\Classes\Payment\PaymentInterface;
use Carbon\Carbon;

class BasicPayment implements PaymentInterface
{

    public function payment_date($dates)
    {
        $lastWorkingDays = collect();
        foreach ($dates as $month) {
            $carbonDate = Carbon::parse($month);

            $lastWeekday = $carbonDate->lastOfMonth()->isWeekday()
                ? $carbonDate->lastOfMonth()->format('Y-m-d')
                : $carbonDate->lastOfMonth(Carbon::FRIDAY)->format('Y-m-d');

            $lastWorkingDays[] = $lastWeekday;
        }

        return $lastWorkingDays;
    }
}
