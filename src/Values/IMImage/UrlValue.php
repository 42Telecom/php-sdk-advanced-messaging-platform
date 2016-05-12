<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMImage;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image Url value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class UrlValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Url(null)
        );
    }
}
