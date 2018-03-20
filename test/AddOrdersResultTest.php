<?php

namespace RialtoWebService\Test;

use PHPUnit\Framework\TestCase;
use RialtoWebService\Result\AddOrdersResult;
use RialtoWebService\StructType\RialtoOrdersResponseError;

class AddOrdersResultTest extends TestCase
{
    /**
     * @param AddOrdersResult $a
     * @param $b
     * @param bool $expectation
     * @throws \Error
     * @dataProvider casesForEquals
     */
    public function testEquals(AddOrdersResult $a, $b, bool $expectation)
    {
        self::assertEquals($expectation, $a->equals($b));
    }

    /**
     * @return array
     * @throws \Error
     * @noinspection PhpUnhandledExceptionInspection
     */
    public function casesForEquals()
    {
        $a = AddOrdersResult::of([new RialtoOrdersResponseError('1', '100', 'message a')]);
        $b = AddOrdersResult::of([new RialtoOrdersResponseError('2', '200', 'message b')]);
        $c = AddOrdersResult::of([
            new RialtoOrdersResponseError('2', '200', 'message b'),
            new RialtoOrdersResponseError('3', '300', 'message b'),
        ]);

        return [
            'Types should be the same' => [$a, $this, false],
            'Comparing one set to itself should be true' => [$a, $a, true],
            'Two different sets should not be equal' => [$a, $b, false],
            'Set c contains set b but set b does not contain set c' => [$c, $b, false],
        ];
    }
}
