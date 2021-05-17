<?php

declare(strict_types=1);

namespace Tleckie\Validator\Factory;

use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Interface ValidatorFactoryInterface
 *
 * @package Tleckie\Validator\Factory
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface ValidatorFactoryInterface
{
    /**
     * @return ValidatorInterface
     */
    public function boolValidator(): ValidatorInterface;

    /**
     * @return ValidatorInterface
     */
    public function floatValidator(): ValidatorInterface;

    /**
     * @return ValidatorInterface
     */
    public function intValidator(): ValidatorInterface;

    /**
     * @return ValidatorInterface
     */
    public function numericValidator(): ValidatorInterface;

    /**
     * @return ValidatorInterface
     */
    public function stringValidator(): ValidatorInterface;

    /**
     * @return ValidatorInterface
     */
    public function emailValidator(): ValidatorInterface;
}
