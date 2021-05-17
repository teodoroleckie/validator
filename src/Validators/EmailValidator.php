<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function preg_match;

/**
 * Class EmailValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category EmailValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class EmailValidator implements ValidatorInterface
{
    /**
     * @var string
     */
    protected string $regx = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    /**
     * @inheritdoc
     */
    public function isValid(mixed $toValidate): bool
    {
        return (bool)preg_match($this->regx, $toValidate);
    }
}