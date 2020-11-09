<?php

namespace App\Classes\Payment;

class Payment {
    protected $paymentDate;

    public function get_payment_date(Array $dates,PaymentInterface $payment)
    {
        $paymentDate = $payment->payment_date($dates);
        return $paymentDate;
    }
}