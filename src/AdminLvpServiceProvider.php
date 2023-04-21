<?php

namespace Osamasu\AdminLvp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Osamasu\AdminLvp\Commands\AdminLvpCommand;

class AdminLvpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-lvp')
            ->hasConfigFile()
            ->hasRoutes(['web'])
            ->hasViews()
            ->hasMigration('create_admin-lvp_table')
            ->hasCommand(AdminLvpCommand::class)
            ->publishesServiceProvider('AdminLvpServiceProvider');
    }
}
