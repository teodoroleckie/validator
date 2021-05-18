<?php

declare(strict_types=1);

namespace Tleckie\Validator;

use Tleckie\Validator\Factory\ValidatorFactoryInterface;
use Tleckie\Validator\Validators\BoolValidator;
use Tleckie\Validator\Validators\FloatValidator;
use Tleckie\Validator\Validators\IntValidator;
use Tleckie\Validator\Validators\NumericValidator;
use Tleckie\Validator\Validators\StringValidator;
use Tleckie\Validator\Validators\UriValidator;
use Tleckie\Validator\Validators\ValidatorInterface;
use Tleckie\Validator\Validators\EmailValidator;

/**
 * Class ValidatorFactory
 *
 * @package Tleckie\Validator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class ValidatorFactory implements ValidatorFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function boolValidator(): ValidatorInterface
    {
        return new BoolValidator();
    }

    /**
     * @inheritdoc
     */
    public function floatValidator(): ValidatorInterface
    {
        return new FloatValidator();
    }

    /**
     * @inheritdoc
     */
    public function intValidator(): ValidatorInterface
    {
        return new IntValidator();
    }

    /**
     * @inheritdoc
     */
    public function numericValidator(): ValidatorInterface
    {
        return new NumericValidator();
    }

    /**
     * @inheritdoc
     */
    public function stringValidator(): ValidatorInterface
    {
        return new StringValidator();
    }

    /**
     * @inheritdoc
     */
    public function emailValidator(): ValidatorInterface
    {
        return new EmailValidator();
    }

    /**
     * @inheritdoc
     */
    public function uriValidator(): ValidatorInterface
    {
        return new UriValidator();
    }
}
