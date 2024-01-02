<?php namespace TrueMe\Image\Support;

class IniObj
{
    public function new($clsPath='')
    {
        if (!$clsPath) return false;

        if (class_exists($clsPath)) return new $clsPath;

        \Log::info('ImageProcessing package: Class ' . $clsPath . ' is not found'); return false;
    }
}