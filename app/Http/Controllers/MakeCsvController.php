<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MakeCsvController extends Controller
{
    static public function FunctionName(String $date = null)
    {
        dd(Carbon::now());
    }
}
