<?php

declare(strict_types=1);

namespace Tleckie\Validator\Tests;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Factory\ValidatorFactoryInterface;
use Tleckie\Validator\ValidatorFactory;
use Tleckie\Validator\Validators\BooleanValidator;
use Tleckie\Validator\Validators\DomainValidator;
use Tleckie\Validator\Validators\EmailValidator;
use Tleckie\Validator\Validators\FloatValidator;
use Tleckie\Validator\Validators\IntValidator;
use Tleckie\Validator\Validators\IpValidator;
use Tleckie\Validator\Validators\UrlValidator;

/**
 * Class ValidatorFactoryTest
 *
 * @package Tleckie\Validator\Tests
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class ValidatorFactoryTest extends TestCase
{
    /** @var ValidatorFactoryInterface */
    private ValidatorFactoryInterface $factory;

    /**
     * @test
     * @dataProvider  checkDataProvider
     * @param string $factoryMethod
     * @param string $expectedInstance
     */
    public function check(string $factoryMethod, string $expectedInstance)
    {
        static::assertInstanceOf($expectedInstance, $this->factory->{$factoryMethod}());
    }

    /**
     * @return string[][]
     */
    public function checkDataProvider(): array
    {
        return [
            ['booleanValidator', BooleanValidator::class],
            ['domainValidator', DomainValidator::class],
            ['emailValidator', EmailValidator::class],
            ['floatValidator', FloatValidator::class],
            ['intValidator', IntValidator::class],
            ['ipValidator', IpValidator::class],
            ['urlValidator', UrlValidator::class],
        ];
    }

    protected function setUp(): void
    {
        $this->factory = new ValidatorFactory();
    }
}
