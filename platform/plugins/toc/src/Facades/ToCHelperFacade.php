<?php

namespace Platform\ToC\Facades;

use Platform\ToC\ToCHelper;
use Illuminate\Support\Facades\Facade;

class ToCHelperFacade extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ToCHelper::class;
    }
}
