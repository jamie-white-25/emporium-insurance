<?php

namespace App\Classes;

use Carbon\Carbon;
use Symfony\Component\VarDumper\Cloner\Data;

class FormatMonths
{
    static public function months(Data $data = null)
    {
        $start = Carbon::now();
        $end   = Carbon::today()->addYear(1);

        do {
            $months[$start->format('d-m-Y')] = $start->format('D F Y');
        } while ($start->addMonth() <= $end);

        return $months;
    }
}
