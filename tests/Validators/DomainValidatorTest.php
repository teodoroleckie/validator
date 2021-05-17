<?php

namespace Tleckie\Validator\Tests\Validators;

use PHPUnit\Framework\TestCase;
use Tleckie\Validator\Flag;
use Tleckie\Validator\Validators\DomainValidator;

/**
 * Class DomainValidatorTest
 *
 * @package Tleckie\Validator\Tests\Validators
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class DomainValidatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param string $value
     * @param bool   $valid
     */
    public function check(mixed $value, bool $valid): void
    {
        $validator = new DomainValidator();
        //var_dump($validator->flags());

        var_dump(Flag::FLAG_HOSTNAME());

        static::assertSame($validator->flags()[0], Flag::FLAG_HOSTNAME());
        static::assertEquals($valid, $validator->isValid($value));
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            ['mandrill._domainkey.mailchimp.com', false],
            ['http://a-.bc.com', false],
            ['http://toolongtoolongtoolongtoolongtoolongtoolongtoolongtoolongtoolongtoolong.com', false],
            ['@local', false],
            ['webserver.local', true],

        ];
    }
}
