<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\UrlValidator;
use Tleckie\Validator\Validators\ValidatorInterface;

/**
 * Class UrlValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class UrlValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(string $value, bool $valid): void
    {
        $validator = new UrlValidator([Flag::DEFAULT()]);
        static::assertEquals($valid, $validator->isValid($value));
        static::assertInstanceOf(ValidatorInterface::class, $validator->addFlag(Flag::DEFAULT()));
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
        ];
    }
}
