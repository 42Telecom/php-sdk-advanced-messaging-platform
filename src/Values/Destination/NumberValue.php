<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Number Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class NumberValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Length(
                array(
                    'min' => 0,
                    'max' => 20
                )
            ),
            new Assert\Type(
                'digit'
            )
        );
    }
}
