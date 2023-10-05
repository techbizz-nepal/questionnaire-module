<?php

namespace Techbizz\QuestionnaireModule\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Techbizz\QuestionnaireModule\QuestionnaireModule
 */
class QuestionnaireModule extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Techbizz\QuestionnaireModule\QuestionnaireModule::class;
    }
}
