<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseResultInfoEntity;
// Import JMS Serializer
use JMS\Serializer\Annotation\Type;

/**
 * Object who define the main body response.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class ResponseBodyEntity
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
     * @var array List of object Result.
     * @Type("array")
     */
    private $results;

    /**
     * @var ResponseResultInfoEntity $resultInfo Result info object.
     * @Type("Fortytwo\SDK\AdvancedMessagingPlatform\Entities\ResponseResultInfoEntity")
     */
    private $resultInfo;

    /**
     * Get the API job
     *
     * @return string API Job
     */
    public function getApiJobId()
    {
        return $this->apiJobId;
    }

    /**
     * Set the API Job ID.
     *
     * @param  string $apiJobId API Job ID.
     * @return  ResponseBodyEntity object.
     */
    public function setApiJobId($apiJobId)
    {
        $this->apiJobId = $apiJobId;

        return $this;
    }

    /**
     * Get the Client job ID
     *
     * @return string Clien job ID
     */
    public function getClientJobId()
    {
        return $this->clientJobId;
    }

    /**
     * Set the Client API Job ID.
     *
     * @param  string $clientApiJobId Client API Job ID.
     * @return  ResponseBodyEntity object.
     */
    public function setClientApiJobId($clientApiJobId)
    {
        $this->clientJobId = $clientApiJobId;

        return $this;
    }

    /**
     * Get Result
     *
     * @return array Results
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set the response results.
     *
     * @param  string $results Results.
     * @return  ResponseBodyEntity object.
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get Result Info
     *
     * @return ResponseResultInfoEntity Results Info
     */
    public function getResultInfo()
    {
        return $this->resultInfo;
    }

    /**
     * Set the response  Results information.
     *
     * @param  ResponseResultInfoEntity $resultInfo Results information.
     * @return  ResponseBodyEntity object.
     */
    public function setResultInfo(ResponseResultInfoEntity $resultInfo)
    {
        $this->resultInfo = $resultInfo;

        return $this;
    }
}
