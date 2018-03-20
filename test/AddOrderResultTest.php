<?php

namespace RialtoWebService\Test;

use PHPUnit\Framework\TestCase;
use RialtoWebService\Result\AddOrderResult;
use RialtoWebService\Result\Error;

class AddOrderResultTest extends TestCase
{
    /**
     * @param AddOrderResult $result
     * @param bool $expectation
     * @dataProvider casesForIsSuccess
     */
    public function testIsSuccess(AddOrderResult $result, bool $expectation)
    {
        self::assertEquals($expectation, $result->isSuccess());
    }

    public function casesForIsSuccess()
    {
        return [
            'An AddOrderResult with no errors is successful' => [
                new AddOrderResult('1', []),
                true
            ],
            'An AddOrderResult with errors is not successful' => [
                new AddOrderResult('1', ['I am an error']),
                false
            ],
        ];
    }

    /**
     * @param AddOrderResult $a
     * @param AddOrderResult $b
     * @param bool $expectation
     * @dataProvider casesForEquals
     */
    public function testEquals(AddOrderResult $a, $b, bool $expectation)
    {
        self::assertEquals($expectation, $a->equals($b));
    }

    public function casesForEquals()
    {
        return [
            'Same order id and no errors is equal' => [
                $a = new AddOrderResult('1', []),
                $b = new AddOrderResult('1', []),
                true
            ],
            'Different order id and no errors is not equal' => [
                $a = new AddOrderResult('1', []),
                $b = new AddOrderResult('2', []),
                false
            ],
            'Different type passed in is not equal' => [
                $a = new AddOrderResult('1', []),
                $b = $this,
                false
            ],
            'Same type with same order id and errors is equal' => [
                $a = new AddOrderResult('1', [new Error('a', 'this is an error')]),
                $b = $a,
                false
            ],
            'Same type with same order id and more errors in $b is not equal' => [
                $a = new AddOrderResult('1', [new Error('a', 'this is an error')]),
                $b = $a->withError(new Error('b', 'this is another error')),
                false
            ]
        ];
    }
}
