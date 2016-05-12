<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Route Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class RouteValue extends AbstractValue implements ValueInterface
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
