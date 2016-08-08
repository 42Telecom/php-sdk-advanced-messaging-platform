<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\TextEntity;

#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the Content for an Ubiquity message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class UbiquityContentEntity extends AbstractMessageEntity
{
    /**
     * @var array Texts.
     * @Expose
     */
    private $texts;

    /**
     * Get the texts
     *
     * @return array list of text objects.
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * Add a text
     *
     * @param  TextEntity $text Text object.
     * @return  UbiquityContentEntity object.
     */
    public function addText(TextEntity $text)
    {
        $this->texts[] = $text;

        return $this;
    }
}
