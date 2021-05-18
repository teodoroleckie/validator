<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\EmailValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class EmailValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class EmailValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new EmailValidator();
        static::assertEquals($valid, $validator->isValid($value));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['name.value@domain.com', true],
            ['name.value@domain', false],
            ['name@domain.gov', true],
            ['nam\e@domain.gov', false],
        ];
    }
}
