<?php

namespace App\Classes\Payment;

class Payment {
    protected $payment_date;

    public function get_payment_date(Array $dates,PaymentInterface $payment)
    {
        $payment_date = $payment->payment_date($dates);
        return $payment_date;
    }
}