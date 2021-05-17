<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\IntValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class IntValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class IntValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new IntValidator([Flag::DEFAULT()]);
        static::assertEquals($valid, $validator->isValid($value));
        static::assertInstanceOf(ValidatorInterface::class, $validator->addFlag(Flag::DEFAULT()));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['12522', true],
            ['12.25', false],
            [8999, true],
            ['nam\e@domain.gov', false],
        ];
    }
}
