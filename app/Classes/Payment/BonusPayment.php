<?php

namespace App\Classes\Payment;

use App\Classes\Payment\PaymentInterface;
use Carbon\Carbon;

class BonusPayment implements PaymentInterface
{
    public function payment_date($dates)
    {
        $bonusPaydays = collect([]);
        foreach ($dates as $month) {
            $carbonDate = Carbon::parse($month);

            $lastWeekday = $carbonDate->day(10)->isWeekday()
                ? $carbonDate->day(10)->format('Y-m-d')
                : $carbonDate->day(10)->next(Carbon::MONDAY)->format('Y-m-d');

            $bonusPaydays[] = $lastWeekday;
        }

        return $bonusPaydays;
    }
}
