<?php namespace TrueMe\Image\Facades;

use Illuminate\Support\Facades\Facade;

class IniObjFacade extends Facade
{
    protected static function getFacadeAccessor() 
    { 
        return 'ini-obj';
    }
}
