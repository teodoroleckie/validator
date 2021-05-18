<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

use function is_string;

/**
 * Class StringValidator
 *
 * @package  Tleckie\Validator\Validators
 * @category StringValidator
 * @author   Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class StringValidator implements ValidatorInterface
{
    public function isValid(mixed $toValidate): bool
    {
        return is_string($toValidate);
    }
}
