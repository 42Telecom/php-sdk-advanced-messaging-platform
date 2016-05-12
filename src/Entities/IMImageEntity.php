<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMImage\UrlValue;
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
class IMImageEntity
{
    /**
     * @var string URL of the image.
     * @Expose
     */
    private $url;

    /**
     * Get the image url
     *
     * @return string image url.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the image url.
     *
     * @param  string $url image url.
     * @return  IMImageEntity object.
     */
    public function setUrl($url)
    {
        $this->url = (string)new UrlValue($url);

        return $this;
    }
}
