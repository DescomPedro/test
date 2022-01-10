<?php

namespace App\Console\Commands;

use Maatwebsite\Excel\Excel;
use Illuminate\Console\Command;
use Database\Seeders\ColorSeeder;
use App\Imports\ColorsImport;

class generateColors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:colors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all colors';

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
        $ColorSeeder  = new ColorSeeder();
        $a = $ColorSeeder->run();
        dd($a);
    }
}
