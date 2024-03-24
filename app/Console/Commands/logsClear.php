<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class logsClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:logs-clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     */

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //
        $files = glob('storage/logs/laravel*.log');

        foreach($files as $file) {
            if (file_exists ( $file )) {
                unlink ( $file );
            }
        }
    }
}
