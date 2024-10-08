<?php

namespace BesmartandPro\Ups\Api\Model;

class IncludeCriteriaMerchantAccountNumberList extends \ArrayObject
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
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @var string[]
     */
    protected $merchantAccountNumber;
    /**
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @return string[]
     */
    public function getMerchantAccountNumber() : array
    {
        return $this->merchantAccountNumber;
    }
    /**
     * Account number to be used for a private network access point search where a UPS access point candidate list is obtained in search by address or geocode search.
     *
     * @param string[] $merchantAccountNumber
     *
     * @return self
     */
    public function setMerchantAccountNumber(array $merchantAccountNumber) : self
    {
        $this->initialized['merchantAccountNumber'] = true;
        $this->merchantAccountNumber = $merchantAccountNumber;
        return $this;
    }
}