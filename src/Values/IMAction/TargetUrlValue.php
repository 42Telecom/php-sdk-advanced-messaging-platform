<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMAction;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Action Target Url value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class TargetUrlValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Url(null)
        );
    }
}
