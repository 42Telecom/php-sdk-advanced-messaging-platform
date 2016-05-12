<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\TtlValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\PidValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\MessageValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\SenderIdValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\EncodingValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\RouteValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent\UdhValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the Content for a SMS message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class SMSContentEntity
{
    /**
     * @var string Message.
     * @Expose
     */
    private $message;

    /**
     * @var string Encoding.
     * @Expose
     */
    private $encoding;

    /**
     * @var string Route.
     * @Expose
     */
    private $route;

    /**
     * @var string Sender ID.
     * @Expose
     */
    private $senderId;

    /**
     * @var string UDH.
     * @Expose
     */
    private $udh;

    /**
     * @var string PID.
     * @Expose
     */
    private $pid;

    /**
     * @var string TTL.
     * @Expose
     */
    private $ttl;

    /**
     * Get the message.
     *
     * @return string message.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the message.
     *
     * @param  string $message message.
     * @return  SMSContentEntity object.
     */
    public function setMessage($message)
    {
        $this->message = (string)new MessageValue($message);

        return $this;
    }

    /**
     * Get the encoding.
     *
     * @return string encoding.
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set the message encoding.
     *
     * @param  string $encoding encoding.
     * @return  SMSContentEntity object.
     */
    public function setEncoding($encoding)
    {
        $this->encoding = (string)new EncodingValue($encoding);

        return $this;
    }

    /**
     * Get the route.
     *
     * @return string route.
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set the message route.
     *
     * @param  string $route route.
     * @return  SMSContentEntity object.
     */
    public function setRoute($route)
    {
        $this->route = (string)new RouteValue($route);

        return $this;
    }

    /**
     * Get the sender ID.
     *
     * @return string Sender ID.
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set the Sender ID.
     *
     * @param  string $senderId Sender ID.
     * @return  SMSContentEntity object.
     */
    public function setSenderId($senderId)
    {
        $this->senderId = (string)new SenderIdValue($senderId);

        return $this;
    }

    /**
     * Get the UDH.
     *
     * @return string UDH.
     */
    public function getUdh()
    {
        return $this->udh;
    }

    /**
     * Set the UDH.
     *
     * @param  string $udh UDH.
     * @return  SMSContentEntity object.
     */
    public function setUdh($udh)
    {
        $this->udh = (string)new UdhValue($udh);

        return $this;
    }

    /**
     * Get the pid.
     *
     * @return string pid.
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set the PID.
     *
     * @param  string $Pid PID.
     * @return  SMSContentEntity object.
     */
    public function setPid($pid)
    {
        $this->pid = (string)new PidValue($pid);

        return $this;
    }

    /**
     * Get the Time to live.
     *
     * @return string Time to live.
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Set the TTL.
     *
     * @param  string $ttl TTL.
     * @return  SMSContentEntity object.
     */
    public function setTtl($ttl)
    {
        $this->ttl = (string)new TtlValue($ttl);

        return $this;
    }
}
