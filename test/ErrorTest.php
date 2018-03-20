<?php

namespace RialtoWebService\Test;

use PHPUnit\Framework\TestCase;
use RialtoWebService\Result\Error;

class ErrorTest extends TestCase
{
    /**
     * @param Error $subject
     * @param $expectation
     * @dataProvider cases
     */
    public function testError($subject, $expectation)
    {
        self::assertEquals($subject, $expectation);
    }

    public function cases()
    {
        return [
            [
                $subject = (new Error('CODEA', 'Message A'))->getCode(),
                $expectation = 'CODEA'
            ],
            [
                $subject = (new Error('CODEA', 'Message A'))->getMessage(),
                $expectation = 'Message A'
            ],
            [
                $subject = (new Error('CODEA', 'Message A'))->__toString(),
                $expectation = 'code: CODEA message: Message A'
            ],
        ];
    }
}
