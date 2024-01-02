<?php namespace TrueMe\Image\Providers;

use Illuminate\Support\ServiceProvider;
use TrueMe\Image\ZipImg;
use TrueMe\Image\Support\IniObj;

class ImageProcessingProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind('zip-img', function() {
            return new ZipImg();
        });
        $this->app->bind('ini-obj', function() {
            return new IniObj();
        });
    }

    public function provides()
    {
        return ['zip-img', 'ini-obj'];
    }
}
