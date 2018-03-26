<?php

namespace RialtoWebService\Client;

use RialtoWebService\StructType\RialtoOrderDetail;
use RialtoWebService\StructType\RialtoOrderDetails;
use RialtoWebService\StructType\RialtoOrderDetailList;

class GetOrderServiceDetails
{
    /**
     * @param array $orderNumbers
     * @return RialtoOrderDetailList
     */
    public function getRialtoOrderDetailsList(array $orderNumbers): RialtoOrderDetailList
    {
        $rialtoOrderDetailList = $this->setRialtoOrderList($orderNumbers);
        return $rialtoOrderDetailList;
    }

    /**
     * @param $orderNumbers
     * @return RialtoOrderDetailList
     */
    protected function setRialtoOrderList(array $orderNumbers): RialtoOrderDetailList
    {
        $rialtoOrderDetailList = new RialtoOrderDetailList;
        $rialtoOrderDetails = $this->setRialtoOrderDetails($orderNumbers);
        $rialtoOrderDetailList->setOrders($rialtoOrderDetails);

        return $rialtoOrderDetailList;
    }

    /**
     * @param array $orderNumbers
     * @return RialtoOrderDetails
     */
    protected function setRialtoOrderDetails(array $orderNumbers): RialtoOrderDetails
    {
        $rialtoOrderDetails = new RialtoOrderDetails;
        foreach ($orderNumbers as $orderNumber) {
            $rialtoOrderDetail = $this->setRialtoOrderDetail($orderNumber);
            $rialtoOrderDetails->addToOrder($rialtoOrderDetail);
        }

        return $rialtoOrderDetails;
    }

    /**
     * @param $orderNumber
     * @return RialtoOrderDetail
     */
    protected function setRialtoOrderDetail($orderNumber): RialtoOrderDetail
    {
        $rialtoOrderDetail = new RialtoOrderDetail;
        $rialtoOrderDetail->setOrderNo($orderNumber);

        return $rialtoOrderDetail;
    }
}