<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Promotional flag value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class PromotionalValue extends AbstractValue implements ValueInterface
{

    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Type(
                array('bool')
            )
        );
    }
}
