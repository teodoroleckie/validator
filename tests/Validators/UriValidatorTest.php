<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\UriValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class UriValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class UriValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new UriValidator();
        static::assertEquals($valid, $validator->isValid($value));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['http://www.test.com/path/', true],
            ['www.test.com/path/', false],
            ['http://www.test.com/path/?var=true', true],
            ['http://\www.test.com/path/', false],
            [123312, false],
        ];
    }
}
