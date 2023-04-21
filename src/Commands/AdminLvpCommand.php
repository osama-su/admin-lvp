<?php

namespace Osamasu\AdminLvp\Commands;

use Illuminate\Console\Command;

class AdminLvpCommand extends Command
{
    public $signature = 'admin-lvp';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
