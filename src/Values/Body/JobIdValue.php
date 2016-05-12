<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Job ID Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class JobIdValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Length(array(
                'min' => 0,
                'max' => 255
            ))
        );
    }
}
