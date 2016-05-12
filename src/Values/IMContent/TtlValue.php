<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\IMContent;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ttl Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class TtlValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\Range(array(
                'min' => 15,
                'max' => 86400
            )),
            new Assert\Type('digit')
        );
    }
}
