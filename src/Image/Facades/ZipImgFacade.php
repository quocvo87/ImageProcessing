<?php namespace TrueMe\Image\Facades;

use Illuminate\Support\Facades\Facade;

class ZipImgFacade extends Facade
{
    protected static function getFacadeAccessor() 
    { 
        return 'zip-img';
    }
}
