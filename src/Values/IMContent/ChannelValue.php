<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Channel Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class ChannelValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Choice(
                array(
                    'choices' => array('VIBER')
                )
            )
        );
    }
}
