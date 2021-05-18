<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function is_numeric;

/**
 * Class NumericValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category NumericValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class NumericValidator implements ValidatorInterface
{
    public function isValid(mixed $toValidate): bool
    {
        return is_numeric($toValidate);
    }
}
