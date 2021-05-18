<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\StringValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class StringValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class StringValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new StringValidator();
        static::assertEquals($valid, $validator->isValid($value));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['name.value@domain.com', true],
            ['12345679', true],
            ['1235,5', true],
            ['13246.200', true],
            [13246, false],
        ];
    }
}
