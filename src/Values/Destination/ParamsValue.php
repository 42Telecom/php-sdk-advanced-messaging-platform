<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Destination;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Params Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class ParamsValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(new Assert\Type('array'));
    }

    /**
     * Return the value.
     *
     * @return $value the current value
     */
    public function getValue()
    {
        return $this->value;
    }
}
