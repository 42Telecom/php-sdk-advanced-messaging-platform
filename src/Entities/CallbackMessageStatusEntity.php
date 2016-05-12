<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

// Import JMS Serializer
use JMS\Serializer\Annotation\Type;

/**
 * Object who define the main body response.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class CallbackMessageStatusEntity
{
    /**
     * @var string $apiJobId Api Job ID.
     * @Type("string")
     */
    private $apiJobId;

    /**
     * @var string $clientJobId Client Job ID.
     * @Type("string")
     */
    private $clientJobId;

    /**
     * @var array $data payload with all the data for each message.
     * @Type("array<Fortytwo\SDK\AdvancedMessagingPlatform\Entities\CallbackMessageStatusInfoEntity>")
     */
    private $data;

    /**
     * Get the API Job ID
     *
     * @return string API Job ID
     */
    public function getApiJobId()
    {
        return $this->apiJobId;
    }

    /**
     * Set the API Job ID.
     *
     * @param  string $apiJobId API Job ID.
     * @return  CallbackMessageStatusEntity object.
     */
    public function setApiJobId($apiJobId)
    {
        $this->apiJobId = $apiJobId;

        return $this;
    }

    /**
     * Get the Client job ID
     *
     * @return string Client job ID
     */
    public function getClientJobId()
    {
        return $this->clientJobId;
    }

    /**
     * Set the Client job ID.
     *
     * @param  string $clientJobId Client job ID.
     * @return  CallbackMessageStatusEntity object.
     */
    public function setClientJobId($clientJobId)
    {
        $this->clientJobId = $clientJobId;

        return $this;
    }

    /**
     * Get the data
     *
     * @return array data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Add data
     *
     * @param  CallbackMessageStatusInfoEntity $item Client job ID.
     * @return  CallbackMessageStatusEntity object.
     */
    public function setData($item)
    {
        $this->data[] = $item;

        return $this;
    }
}
