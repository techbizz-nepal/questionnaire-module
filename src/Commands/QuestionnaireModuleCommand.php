<?php

namespace Techbizz\QuestionnaireModule\Commands;

use Illuminate\Console\Command;

class QuestionnaireModuleCommand extends Command
{
    public $signature = 'questionnaire-module';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
