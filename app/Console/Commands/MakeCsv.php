<?php

namespace App\Console\Commands;

use App\Http\Controllers\MakeCsvController;
use Carbon\Carbon;
use Illuminate\Console\Command;

class MakeCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make CSV file with basic payment and bouns payment dates for the next 12 months, from current date';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $month = $this->ask('Enter the payment month');
        $year = $this->ask('Enter the payment year');
        $date = Carbon::parse(strtotime($month .'-'. $year));

        MakeCsvController::make($date);

        return 0;
    }
}
