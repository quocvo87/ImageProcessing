<?php namespace TrueMe\Image\Support\Validation;

class PngValidation extends Validation
{
    public function process()
    {
        $this->isValidName();
    }

    public function isValidName()
    {
        if (stripos($this->image->path, ';') === false) return $this->isValid = true;

        \Log::info(PngValidation::class . ' has image name: '. $this->image->path .' is not valid');
        return $this->isValid = false;
    }
}
