<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Callback URL Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class CallbackUrlValue extends AbstractValue implements ValueInterface
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
