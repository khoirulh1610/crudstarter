<?php

namespace khoirulh1610\crudstarter\Commands;

use Illuminate\Console\Command;

class crundstartercommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cs:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'crundstarter Install';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Publishing crudstarter assets...');
        $this->call('vendor:publish', ['--provider' => 'khoirulh1610\crudstarter\CrudStarterServiceProvider']);
        $this->call('vendor:publish', ['--tag' => 'cs-assets']);
    }
}
