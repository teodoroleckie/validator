<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function is_float;

/**
 * Class FloatValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category FloatValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class FloatValidator implements ValidatorInterface
{
    public function isValid(mixed $toValidate): bool
    {
        return is_float($toValidate);
    }
}
