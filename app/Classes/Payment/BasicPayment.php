<?php

namespace App\Classes\Payment;

use App\Classes\Payment\PaymentInterface;
use Carbon\Carbon;

class BasicPayment implements PaymentInterface{
    protected $basicPaymentDate = [];

    public function payment_date($dates){
        foreach($dates as $date){
            
        }   
        return $basicPaymentDate;
    }
    
} 