<?php namespace TrueMe\Image\Support\Validation;

class Validation
{
    protected $isValid = true;

    public function isValid()
    {
        $this->process();

        return $this->isValid;
    }
}
