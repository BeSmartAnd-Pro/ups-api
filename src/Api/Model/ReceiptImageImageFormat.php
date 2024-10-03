<?php

namespace BesmartandPro\Ups\Api\Model;

class ReceiptImageImageFormat extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Code representing the format in which a receipt is returned. Valid values:
    - HTML = HTML format
    - PDF = pdf
    
    *
    * @var string
    */
    protected $code;
    /**
     * Description of the form image format code.
     *
     * @var string
     */
    protected $description;
    /**
    * Code representing the format in which a receipt is returned. Valid values:
    - HTML = HTML format
    - PDF = pdf
    
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Code representing the format in which a receipt is returned. Valid values:
    - HTML = HTML format
    - PDF = pdf
    
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of the form image format code.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Description of the form image format code.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}