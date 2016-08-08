<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Text Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class TextValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Type('string')
        );
    }
}
