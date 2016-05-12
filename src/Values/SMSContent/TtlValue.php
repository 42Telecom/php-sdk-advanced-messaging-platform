<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent;

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
                'min' => 0,
                'max' => 172800
            )),
            new Assert\Type('digit')
        );
    }
}
