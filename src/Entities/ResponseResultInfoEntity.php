<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;
// Import JMS Serializer
use JMS\Serializer\Annotation\Type;

/**
 * Object who define the Result Info response.
 * @license https://opensource.org/licenses/MIT MIT
 */
class ResponseResultInfoEntity
{
    /**
     * @var string $statusCode Status code.
     * @Type("string")
     */
    private $statusCode;

    /**
     * @var string $description Description.
     * @Type("string")
     */
    private $description;

    /**
     * Get the Status code.
     *
     * @return string Status code.
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set the Status Code.
     *
     * @param  string $statusCode Status code.
     * @return  ResponseResultInfoEntity object.
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get the Description.
     *
     * @return string Description.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the Description.
     *
     * @param  string $description Description.
     * @return  ResponseResultInfoEntity object.
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
