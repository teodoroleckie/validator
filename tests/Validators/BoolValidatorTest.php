<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Validators\BoolValidator;

/**
 * Class BoolValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class BoolValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new BoolValidator();

        static::assertEquals($valid, $validator->isValid($value));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ["1", false],
            [1, false],
            [0, false],
            ["0", false],
            [false, true],
            [true, true],
            ["true", false],
            ["false", false],
            ["test", false],
        ];
    }
}
