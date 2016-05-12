<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

// Import JMS Serializer
use JMS\Serializer\Annotation\Type;

/**
 * Object who define the callback info for the message status.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class CallbackMessageStatusInfoEntity
{
    /**
     * @var string $type Channel.
     * @Type("string")
     */
    private $type;

    /**
     * @var string $messageId Message ID.
     * @Type("string")
     */
    private $messageId;

    /**
     * @var string $status Message state.
     * @Type("string")
     */
    private $status;

    /**
     * @var string $timestamp Delivery timestamp.
     * @Type("string")
     */
    private $timestamp;

    /**
     * @var string $microTimestamp Delivery microtimestamp.
     * @Type("string")
     */
    private $microTimestamp;

    /**
     * @var string $to Destination number.
     * @Type("string")
     */
    private $to;

    /**
     * @var string $from Origin number/Id.
     * @Type("string")
     */
    private $from;

    /**
     * @var string $clientMessageId Client message Id.
     * @Type("string")
     */
    private $clientMessageId;

    /**
     * @var string $errorCode Error code returned.
     * @Type("string")
     */
    private $errorCode;

    /**
     * Get the Type
     *
     * @return string type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param  string $type Type.
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the Message ID
     *
     * @return string Message ID
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set the message ID.
     *
     * @param  string $messageId Message Id.
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get the Status
     *
     * @return string Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status.
     *
     * @param  string $status status.
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the timestamp
     *
     * @return string timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set the timestamp.
     *
     * @param  string $timestamp timestamp.
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get the micro timestamp
     *
     * @return string micro timestamp
     */
    public function getMicroTimestamp()
    {
        return $this->microTimestamp;
    }

    /**
     * Set the micro timestamp.
     *
     * @param  string $microTimestamp micro timestamp.
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setMicroTimestamp($microTimestamp)
    {
        $this->microTimestamp = $microTimestamp;

        return $this;
    }

    /**
     * Get the to (destination number)
     *
     * @return string to (destination number)
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set the to (destination number)
     *
     * @param  string $to to (destination number)
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get the from (origin number/id)
     *
     * @return string from (origin number/id)
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the from (origin number/id)
     *
     * @param  string $from from (origin number/id)
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get the Client Message ID
     *
     * @return string Client Message ID
     */
    public function getClientMessageId()
    {
        return $this->clientMessageId;
    }

    /**
     * Set the Client Message ID
     *
     * @param  string $clientMessageId Client Message ID
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setClientMessageId($clientMessageId)
    {
        $this->clientMessageId = $clientMessageId;

        return $this;
    }

    /**
     * Get the Error Code
     *
     * @return string Error Code
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set the Error Code
     *
     * @param  string $errorCode Error Code
     * @return  CallbackMessageStatusInfoEntity object.
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }
}
