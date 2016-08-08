<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Values\TextValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the Image for an IM message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class TextEntity
{
    /**
     * @var string Text of the message.
     * @Expose
     */
    private $text;

    /**
     * Get the text of the message
     *
     * @return string text of the message.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the text.
     *
     * @param  string $text text of the message.
     * @return  TextEntity object.
     */
    public function setText($text)
    {
        $this->text = (string)new TextValue($text);

        return $this;
    }
}
