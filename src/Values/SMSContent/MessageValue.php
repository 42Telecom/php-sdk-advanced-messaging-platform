<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class MessageValue extends AbstractValue implements ValueInterface
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
                    'min' => 1
                )
            )
        );
    }
}
