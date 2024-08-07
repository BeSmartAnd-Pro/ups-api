<?php

namespace BesmartandPro\UpsApi\Generated\Model;

class NotificationEMail extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The destination email address of the receiver returns notification email.
     *
     * @var string[]
     */
    protected $eMailAddress;
    /**
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable.  Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @var string
     */
    protected $undeliverableEMailAddress;
    /**
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @var string
     */
    protected $fromEMailAddress;
    /**
     * The name the receiver return notification will appear to be from.  Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @var string
     */
    protected $fromName;
    /**
     * User defined text that will be included in the email.  Only allowed at the first package.
     *
     * @var string
     */
    protected $memo;
    /**
     * The destination email address of the receiver returns notification email.
     *
     * @return string[]
     */
    public function getEMailAddress() : array
    {
        return $this->eMailAddress;
    }
    /**
     * The destination email address of the receiver returns notification email.
     *
     * @param string[] $eMailAddress
     *
     * @return self
     */
    public function setEMailAddress(array $eMailAddress) : self
    {
        $this->initialized['eMailAddress'] = true;
        $this->eMailAddress = $eMailAddress;
        return $this;
    }
    /**
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable.  Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @return string
     */
    public function getUndeliverableEMailAddress() : string
    {
        return $this->undeliverableEMailAddress;
    }
    /**
     * The e-mail address where an undeliverable email message is sent if the Receiver Return Notification email is undeliverable.  Defaults to FromEMailAddress. Only allowed at the first package.
     *
     * @param string $undeliverableEMailAddress
     *
     * @return self
     */
    public function setUndeliverableEMailAddress(string $undeliverableEMailAddress) : self
    {
        $this->initialized['undeliverableEMailAddress'] = true;
        $this->undeliverableEMailAddress = $undeliverableEMailAddress;
        return $this;
    }
    /**
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @return string
     */
    public function getFromEMailAddress() : string
    {
        return $this->fromEMailAddress;
    }
    /**
     * The email address listed in the Reply To field of the message header, includes name and e-mail address of sender. The "From" field of the message header contains pkginfo@ups.com.  Only allowed at the first package.
     *
     * @param string $fromEMailAddress
     *
     * @return self
     */
    public function setFromEMailAddress(string $fromEMailAddress) : self
    {
        $this->initialized['fromEMailAddress'] = true;
        $this->fromEMailAddress = $fromEMailAddress;
        return $this;
    }
    /**
     * The name the receiver return notification will appear to be from.  Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @return string
     */
    public function getFromName() : string
    {
        return $this->fromName;
    }
    /**
     * The name the receiver return notification will appear to be from.  Defaults to the Shipper Name. Only allowed at the first package.
     *
     * @param string $fromName
     *
     * @return self
     */
    public function setFromName(string $fromName) : self
    {
        $this->initialized['fromName'] = true;
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * User defined text that will be included in the email.  Only allowed at the first package.
     *
     * @return string
     */
    public function getMemo() : string
    {
        return $this->memo;
    }
    /**
     * User defined text that will be included in the email.  Only allowed at the first package.
     *
     * @param string $memo
     *
     * @return self
     */
    public function setMemo(string $memo) : self
    {
        $this->initialized['memo'] = true;
        $this->memo = $memo;
        return $this;
    }
}