<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces;

/**
 * Value Object allow to set and validate specific values.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
interface ValueInterface
{
    /**
     * Constructor - Used to set the value of the object.
     *
     * @param mixed $value Value of the object.
     */
    public function __construct($value);

    /**
     * Return the value of the object
     */
    public function __toString();
}
