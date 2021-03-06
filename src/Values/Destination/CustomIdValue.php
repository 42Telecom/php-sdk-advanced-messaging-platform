<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Job ID Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class CustomIdValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(new Assert\Type('string'));
    }
}
