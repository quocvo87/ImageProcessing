<?php namespace TrueMe\Image;

class BaseImage
{
    protected $path;
    protected $type;
    protected $typeName;

    protected function setPath($path='')
    {
        $this->path = $path;
    }

    public function __get($key)
    {
        if (property_exists($this, $key)) return $this->$key;

        \Log::info('Property is not exist');
    }
}
