<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values\SMSContent;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Fortytwo\SDK\AdvancedMessagingPlatform\Values\AbstractValue;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sender ID Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
class SenderIdValue extends AbstractValue implements ValueInterface
{
    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        $asserts = array();
        if (ctype_digit($this->tmp)) {
            $asserts = array(
                new Assert\Length(
                    array(
                        'min' => 1,
                        'max' => 20
                    )
                ),
                new Assert\Type('digit')
            );
        } else {
            $asserts = array(
                new Assert\Length(
                    array(
                        'min' => 1,
                        'max' => 11
                    )
                ),
                new Assert\Type('string')
            );
        }

        return $asserts;
    }
}
