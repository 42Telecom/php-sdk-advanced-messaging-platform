<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;
# Fortytwo
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\DestinationEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\SMSContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMContentEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body\JobIdValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body\ReplyUrlValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body\CallbackUrlValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body\MessagePlanValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the the body request for IM
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class RequestBodyEntity
{
    /**
     * @var array $destinations Array of destination object
     * @Expose
     */
    private $destinations;

    /**
     * @var string $jobId Job Id
     * @Expose
     */
    private $jobId;

    /**
     * @var object $smsContent Object Sms Content
     * @Expose
     */
    private $smsContent;

    /**
     * @var object $imContent Object IM Content
     * @Expose
     */
    private $imContent;

    /**
     * @var string $messagePlan Message plan
     * @Expose
     */
    private $messagePlan;

    /**
     * @var string $callbackUrl Callback URL
     * @Expose
     */
    private $callbackUrl;

    /**
     * @var string $replyUrl Reply URL
     * @Expose
     */
    private $replyUrl;

    /**
     * Get the list of destinations
     *
     * @return array Array of destination objects.
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Add destinations.
     *
     * @param  DestinationEntity $destination DestinationEntity object.
     * @return  RequestBodyEntity object.
     */
    public function addDestinations(DestinationEntity $destination)
    {
        $this->destinations[] = $destination;

        return $this;
    }

    /**
     * Get the job ID.
     *
     * @return string Job Id.
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set the jobId.
     *
     * @param  string $jobId Job ID.
     * @return  RequestBodyEntity object.
     */
    public function setJobId($jobId)
    {
        $this->jobId = (string)new JobIdValue($jobId);

        return $this;
    }

    /**
     * Get the SMS Content object
     *
     * @return object SMS Content object
     */
    public function getSmsContent()
    {
        return $this->smsContent;
    }

    /**
     * Set SMS Content.
     *
     * @param  SMSContentEntity $smsContent SMS Content.
     * @return  RequestBodyEntity object.
     */
    public function setSmsContent(SMSContentEntity $smsContent)
    {
        $this->smsContent = $smsContent;

        return $this;
    }

    /**
     * Get the IM Content object
     *
     * @return object IM Content object
     */
    public function getImContent()
    {
        return $this->imContent;
    }

    /**
     * Set IM Content.
     *
     * @param  IMContentEntity $imContent IM Content.
     * @return  RequestBodyEntity object.
     */
    public function setImContent(IMContentEntity $imContent)
    {
        $this->imContent = $imContent;

        return $this;
    }

    /**
     * Get the Message plan
     *
     * @return string Message plan
     */
    public function getMessagePlan()
    {
        return $this->messagePlan;
    }

    /**
     * Set Mesasge plan
     *
     * @param  string $messagePlan Message plan.
     * @return  RequestBodyEntity object.
     */
    public function setMessagePlan($messagePlan)
    {
        $this->messagePlan = (string)new MessagePlanValue($messagePlan);

        return $this;
    }

    /**
     * Get the Callback URL
     *
     * @return string Callback URL
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * Set Callback URL.
     *
     * @param  string $callbackUrl Callback URL.
     * @return  RequestBodyEntity object.
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = (string)new CallbackUrlValue($callbackUrl);

        return $this;
    }

    /**
     * Get the Reply URL
     *
     * @return string Reply URL
     */
    public function getReplyUrl()
    {
        return $this->replyUrl;
    }

    /**
     * Set Reply URL.
     *
     * @param  string $replyUrl Reply URL.
     * @return  RequestBodyEntity object.
     */
    public function setReplyUrl($replyUrl)
    {
        $this->replyUrl = (string)new ReplyUrlValue($replyUrl);

        return $this;
    }

    /**
     * Convert the current object to JSON format.
     *
     * @return string serialized object to JSON format.
     */
    public function toJSON()
    {
        $serializer = SerializerBuilder::create()->build();

        return $serializer->serialize($this, 'json');
    }
}
