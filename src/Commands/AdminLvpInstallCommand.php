<?php

namespace Osamasu\AdminLvp\Commands;

use Illuminate\Console\Command;

class AdminLvpInstallCommand extends Command
{
    public $signature = 'adminlvp:install';

    public $description = 'Install the AdminLvp package';

    public function handle(): int
    {
        $this->comment('Publishing the AdminLvp config file');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-config']);

        $this->comment('Publishing the AdminLvp views');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-views']);

        $this->comment('Publishing the AdminLvp assets');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-assets']);

        $this->comment('Publishing the AdminLvp migrations');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-migrations']);

        $this->comment('Publishing the AdminLvp routes');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-routes']);

        $this->comment('Publishing the AdminLvp service provider');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-provider']);

        $this->comment('Publishing the AdminLvp lang files');
        $this->callSilent('vendor:publish', ['--tag' => 'admin-lvp-lang']);


        $this->comment('All done');

        return self::SUCCESS;
    }
}
