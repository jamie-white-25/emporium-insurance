<?php

namespace App\Console\Commands;

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
        $this->info('this ran');

        return 0;
    }
}
