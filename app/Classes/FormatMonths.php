<?php

namespace App\Classes;

use Carbon\Carbon;

class FormatMonths
{
    static public function months()
    {
        $months = collect();
        $start = Carbon::now();
        $end = Carbon::today()->addYear(1);

        do {
            $months[] = $start->format('M-y');
        } while ($start->addMonth() <= $end);

        return $months;
    }
}
