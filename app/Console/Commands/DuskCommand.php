<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DuskCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dusk:fail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dusk';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return $this->call('dusk');
    }
}
