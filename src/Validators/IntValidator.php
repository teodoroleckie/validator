<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function is_int;

/**
 * Class IntValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category IntValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class IntValidator implements ValidatorInterface
{
    public function isValid(mixed $toValidate): bool
    {
        return is_int($toValidate);
    }
}
