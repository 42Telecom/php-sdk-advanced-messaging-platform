<?php

namespace Fortytwo\SDK\AdvancedMessagingPlatform\Entities;

use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMImageEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Entities\IMActionEntity;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent\ContentValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent\ChannelValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent\ExpiryTextValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent\TtlValue;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent\SenderIdValue;
#Serializer:
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Object who define the Content for an IM message.
 *
 * @ExclusionPolicy("all")
 * @license https://opensource.org/licenses/MIT MIT
 */
class IMContentEntity
{

    /**
     * @var string Channel.
     * @Expose
     */
    private $channel;

    /**
     * @var string Sender ID.
     * @Expose
     */
    private $senderId;

    /**
     * @var string Content.
     * @Expose
     */
    private $content;

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
     * @var string Time to live.
     * @Expose
     */
    private $ttl;

    /**
     * @var string Expiry text.
     * @Expose
     */
    private $expiryText;

    /**
     * Get the channel
     *
     * @return string channel.
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set the channel provider.
     *
     * @param  string $channel Channel.
     * @return  IMContentEntity object.
     */
    public function setChannel($channel)
    {
        $this->channel = (string)new ChannelValue($channel);

        return $this;
    }

    /**
     * Get the channel
     *
     * @return string channel.
     */
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set the sender ID.
     *
     * @param  string $senderId Sender ID.
     * @return  IMContentEntity object.
     */
    public function setSenderId($senderId)
    {
        $this->senderId = (string)new SenderIdValue($senderId);

        return $this;
    }

    /**
     * Get the content
     *
     * @return string content.
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the Content.
     *
     * @param  string $content Content.
     * @return  IMContentEntity object.
     */
    public function setContent($content)
    {
        $this->content = (string)new ContentValue($content);

        return $this;
    }

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
     * @return  IMContentEntity object.
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
     * @return  IMContentEntity object.
     */
    public function addAction(IMActionEntity $action)
    {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * Get the Time to live
     *
     * @return string Time to live
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * Set the ttl.
     *
     * @param  string $ttl time ot live.
     * @return  IMContentEntity object.
     */
    public function setTtl($ttl)
    {
        $this->ttl = (string)new TtlValue($ttl);

        return $this;
    }

    /**
     * Get the Expiry text
     *
     * @return string Expiry text
     */
    public function getExpiryText()
    {
        return $this->expiryText;
    }

    /**
     * Set the Expiry text.
     *
     * @param  string $expiryText Expiry text.
     * @return  IMContentEntity object.
     */
    public function setExpiryText($expiryText)
    {
        $this->expiryText = (string)new ExpiryTextValue($expiryText);

        return $this;
    }
}
