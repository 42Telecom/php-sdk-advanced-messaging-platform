<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMAction\TitleValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMAction\TargetUrlValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the Action for an IM message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class IMActionEntity
{
    /**
     * @var string Target URL.
     * @Expose
     */
    private $targetUrl;

    /**
     * @var string Action title.
     * @Expose
     */
    private $title;

    /**
     * Get the target url
     *
     * @return string target url for the action.
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * Set the target url.
     *
     * @param  string $targetUrl Target url.
     * @return  IMActionEntity object.
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = (string)new TargetUrlValue($targetUrl);

        return $this;
    }

    /**
     * Get the action title
     *
     * @return string action title.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title value.
     *
     * @param  string $title Title value.
     * @return  IMActionEntity object.
     */
    public function setTitle($title)
    {
        $this->title = (string)new TitleValue($title);

        return $this;
    }
}
