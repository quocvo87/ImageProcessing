<?php namespace TrueMe\Image;

use IniObj;

class ZipImg extends BaseImage
{
    public function __call($method, $params)
    {
        try {
            $this->typeName = ucfirst($method);
            $ref = 'TrueMe\\Image\\ZipType\\' . $this->typeName;

            if (!$this->path) $this->setPath(@$params[0]);

            if (!$this->type = IniObj::new($ref)) return $this->type;
            if (@$this->iniValidation()->isValid()) return $this->type->compress($this->path);

            \Log::info('ImageProcessing package: ' . $ref . ' is not valid image'); return false;

        } catch (Exception $e) {
            \Log::info('ImageProcessing package: ' . json_encode($e));
        }
        return false;
    }

    protected function iniValidation()
    {
        $ref = 'TrueMe\\Image\\Support\\Validation\\' . $this->typeName . 'Validation';

        if (!$this->type->validation = IniObj::new($ref)) return false;

        $this->type->validation->image = $this->type->image = $this;

        return $this->type->validation;
    }
}
