<?php

namespace RialtoWebService\Test;

use PHPUnit\Framework\TestCase;
use RialtoWebService\Result\GetOrdersResult;
use RialtoWebService\StructType\RialtoOrderDetailsResponse;
use RialtoWebService\StructType\RialtoOrderDetailsResponseOrder;
use RialtoWebService\StructType\RialtoOrderDetailsResponseOrderList;

class GetOrdersResultTest extends TestCase
{
    /**
     * @param RialtoOrderDetailsResponse $response
     * @param GetOrdersResult $comparator
     * @param bool $isEquals
     * @dataProvider casesForFromResponse
     */
    public function testEquals(
        RialtoOrderDetailsResponse $response,
        GetOrdersResult $comparator,
        bool $isEquals
    ) {
        $this->assertEquals($isEquals, GetOrdersResult::fromResponse($response)->equals($comparator));
    }

    public function casesForFromResponse(): array
    {
        return [
            'A response with no orders and the same return status should be equal' => [
                $response = new RialtoOrderDetailsResponse(null, null, 100),
                $comparator = GetOrdersResult::fromResponse($response),
                $isEquals = true
            ],
            'A response with no orders and different return status should not be equal' => [
                $response = new RialtoOrderDetailsResponse(null, null, 100),
                $comparator = GetOrdersResult::fromResponse((clone $response)->setReturnStatus(200)),
                $isEquals = false
            ],
            'A response with an order id of 100 and status of 200 should not match no orders and same status' => [
                $response = new RialtoOrderDetailsResponse(
                    new RialtoOrderDetailsResponseOrderList([
                        new RialtoOrderDetailsResponseOrder(null, '100')
                    ]),
                    null,
                    200
                ),
                $comparator = GetOrdersResult::fromResponse((clone $response)->setOrders(null)),
                $isEquals = false
            ],
        ];
    }
}
