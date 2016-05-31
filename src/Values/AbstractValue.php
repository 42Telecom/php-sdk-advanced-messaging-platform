<?php
namespace Fortytwo\SDK\AdvancedMessagingPlatform\Values;

use Fortytwo\SDK\AdvancedMessagingPlatform\Interfaces\ValueInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validation;

/**
 * Abstract Value object
 *
 * @license https://opensource.org/licenses/MIT MIT
 */
abstract class AbstractValue implements ValueInterface
{
    /**
     * @var mixed Value of the object.
     */
    protected $value;

    /**
     * @var mixed Temporary value before Sanitization/Validation
     */
    protected $tmp;

    /**
     * @var string Constraint for validation
     */
    protected $constraint = null;

    /**
     * @inheritDoc
     */
    public function __construct($value)
    {
            $this->tmp = $value;

            $this
                ->sanitize()
                ->validate();

            $this->value = $this->tmp;
    }

    /**
     * @inheritDoc
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * Sanitize the value.
     *
     * @return $this the current instance
     */
    protected function sanitize()
    {
        if (is_array($this->tmp)) {
            foreach ($this->tmp as $key => $value) {
                $this->tmp[$key] = trim($value);
            }
        } else {
            $this->tmp = trim($this->tmp);
        }
        return $this;
    }

    /**
     * Call the assert option and instanciate a constraint.
     *
     * @return $this the current instance
     */
    protected function assert()
    {
        return array(
            new Assert\NotBlank()
        );
    }

    /**
     * Validate the value.
     *
     * @return $this the current instance
     */
    protected function validate()
    {
        $constraints = $this->assert();

        $validator = Validation::createValidatorBuilder()->getValidator();

        foreach ($constraints as $constraint) {
            // use the validator to validate the value
            $errorList = $validator->validate(
                $this->tmp,
                $constraint
            );
        }

        if (0 != count($errorList)) {
            throw new \Exception($errorList[0]->getMessage(), 1);
        }

        return $this;
    }
}
