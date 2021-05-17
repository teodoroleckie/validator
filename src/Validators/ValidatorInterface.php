<?php

declare(strict_types=1);

namespace Tleckie\Validator\Validators;

/**
 * Interface ValidatorInterface
 *
 * @package Tleckie\Validator\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface ValidatorInterface
{
    /**
     * @param mixed $toValidate
     * @return bool
     */
    public function isValid(mixed $toValidate): bool;
}
