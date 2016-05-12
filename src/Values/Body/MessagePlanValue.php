<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\Body;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message plan value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class MessagePlanValue extends AbstractValue implements ValueInterface
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
                    'choices' => array('FEATURE_RICH', 'LOW_COST')
                )
            )
        );
    }
}
