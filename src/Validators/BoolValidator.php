<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function is_bool;

/**
 * Class BoolValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category BoolValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class BoolValidator implements ValidatorInterface
{
    public function isValid(mixed $toValidate): bool
    {
        return is_bool($toValidate);
    }
}
