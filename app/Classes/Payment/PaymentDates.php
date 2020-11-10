<?php

namespace App\Classes\Payment;

use Illuminate\Database\Eloquent\Collection;

class PaymentDates
{

    static public function get_payment_date($dates, PaymentInterface $payment)
    {
        return $payment->payment_date($dates);
    }
}
