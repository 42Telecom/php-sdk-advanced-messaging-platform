<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMImageEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMActionEntity;

#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Abstract object who define a message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
abstract class AbstractMessageEntity
{
    /**
     * @var array Images.
     * @Expose
     */
    private $images;

    /**
     * @var array Actions.
     * @Expose
     */
    private $actions;

    /**
     * Get the images
     *
     * @return array list of images objects.
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add an image.
     *
     * @param  IMImageEntity $image iamge object.
     * @return  AbstractMessageEntity object.
     */
    public function addImage(IMImageEntity $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Get the actions
     *
     * @return array list of actions objects.
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Add an action.
     *
     * @param  IMActionEntity $action action object.
     * @return  AbstractMessageEntity object.
     */
    public function addAction(IMActionEntity $action)
    {
        $this->actions[] = $action;

        return $this;
    }
}
