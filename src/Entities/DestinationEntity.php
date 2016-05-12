<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination\ParamsValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination\CustomIdValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination\NumberValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the destination.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class DestinationEntity
{
    /**
     * @var string Destination Number.
     * @Expose
     */
    private $number;

    /**
     * @var string Destination Custom Id.
     * @Expose
     */
    private $customId;

    /**
     * @var string Destination parameters.
     * @Expose
     */
    private $params;

    /**
     * Get the Number
     *
     * @return string destination number.
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the destination number.
     *
     * @param  string $number Destination number.
     * @return  DestinationEntity object.
     */
    public function setNumber($number)
    {
        $this->number = (string)new NumberValue($number);

        return $this;
    }

    /**
     * Get the Custom ID
     *
     * @return string destination custom ID.
     */
    public function getCustomId()
    {
        return $this->customId;
    }

    /**
     * Set the destination custom ID.
     *
     * @param  string $customId Destination custom ID.
     * @return  DestinationEntity object.
     */
    public function setCustomId($customId)
    {
        $this->customId = (string)new CustomIdValue($customId);

        return $this;
    }

    /**
     * Get the Number
     *
     * @return string destination parameters.
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set the destination parameters.
     *
     * @param  string $params Destination parameters.
     * @return  DestinationEntity object.
     */
    public function setParams($params)
    {
        $this->params = (string)new ParamsValue($params);

        return $this;
    }
}
