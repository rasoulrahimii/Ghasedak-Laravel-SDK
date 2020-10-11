<?php


namespace Ghasedak\Laravell;


use Illuminate\Support\Facades\Facade;

class GhasedakFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laravel';
    }

}
