<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:task';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "/r/n Prints a message for the cron my:task";

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
        echo 'Test';

        $file = base_path('app/Console/Commands/mytest_output.txt');
        file_put_contents($file, $this->description, FILE_APPEND );

        return 0;
    }
}
