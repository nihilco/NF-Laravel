<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Goutte Facade
 */
class GoutteFacade extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */    
    protected static function getFacadeAccessor()
    {
        return 'goutte';
    }
}