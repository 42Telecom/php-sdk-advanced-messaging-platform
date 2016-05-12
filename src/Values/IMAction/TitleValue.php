<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMAction;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Action Title Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class TitleValue extends AbstractValue implements ValueInterface
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
