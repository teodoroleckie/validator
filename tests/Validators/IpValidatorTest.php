<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\IpValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class IpValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class IpValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(string $value, bool $valid): void
    {
        $validator = new IpValidator([Flag::DEFAULT()]);
        static::assertEquals($valid, $validator->isValid($value));
        static::assertInstanceOf(ValidatorInterface::class, $validator->addFlag(Flag::DEFAULT()));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['192.168.1.2', true],
            ['300.168.1.2', false],
            ['30.25.1.2', true],
            ['192.168.1.500', false],
        ];
    }
}
