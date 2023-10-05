<?php

namespace Techbizz\QuestionnaireModule;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Techbizz\QuestionnaireModule\Commands\QuestionnaireModuleCommand;

class QuestionnaireModuleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('questionnaire-module')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_questionnaire-module_table')
            ->hasCommand(QuestionnaireModuleCommand::class);
    }
}
