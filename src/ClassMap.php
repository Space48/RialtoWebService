<?php

namespace RialtoWebService;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'TestConnect' => '\\RialtoWebService\\StructType\\TestConnect',
            'TestConnectResponse' => '\\RialtoWebService\\StructType\\TestConnectResponse',
            'TestConnectResult' => '\\RialtoWebService\\StructType\\TestConnectResult',
            'TestConnectStr' => '\\RialtoWebService\\StructType\\TestConnectStr',
            'TestConnectStrResponse' => '\\RialtoWebService\\StructType\\TestConnectStrResponse',
            'AddOrders' => '\\RialtoWebService\\StructType\\AddOrders',
            'AddOrdersResponse' => '\\RialtoWebService\\StructType\\AddOrdersResponse',
            'AddOrdersStr' => '\\RialtoWebService\\StructType\\AddOrdersStr',
            'AddOrdersStrResponse' => '\\RialtoWebService\\StructType\\AddOrdersStrResponse',
            'GetOrderDetails' => '\\RialtoWebService\\StructType\\GetOrderDetails',
            'GetOrderDetailsResponse' => '\\RialtoWebService\\StructType\\GetOrderDetailsResponse',
            'GetOrderDetailsStr' => '\\RialtoWebService\\StructType\\GetOrderDetailsStr',
            'GetOrderDetailsStrResponse' => '\\RialtoWebService\\StructType\\GetOrderDetailsStrResponse',
            'GetUpdatedOrders' => '\\RialtoWebService\\StructType\\GetUpdatedOrders',
            'GetUpdatedOrdersResponse' => '\\RialtoWebService\\StructType\\GetUpdatedOrdersResponse',
            'GetUpdatedOrdersStr' => '\\RialtoWebService\\StructType\\GetUpdatedOrdersStr',
            'GetUpdatedOrdersStrResponse' => '\\RialtoWebService\\StructType\\GetUpdatedOrdersStrResponse',
            'GetStockList' => '\\RialtoWebService\\StructType\\GetStockList',
            'GetStockListResponse' => '\\RialtoWebService\\StructType\\GetStockListResponse',
            'GetUpdatedStock' => '\\RialtoWebService\\StructType\\GetUpdatedStock',
            'GetUpdatedStockResponse' => '\\RialtoWebService\\StructType\\GetUpdatedStockResponse',
            'GetStockListStr' => '\\RialtoWebService\\StructType\\GetStockListStr',
            'GetStockListStrResponse' => '\\RialtoWebService\\StructType\\GetStockListStrResponse',
            'GetUpdatedStockStr' => '\\RialtoWebService\\StructType\\GetUpdatedStockStr',
            'GetUpdatedStockStrResponse' => '\\RialtoWebService\\StructType\\GetUpdatedStockStrResponse',
            'AddRialtoOrders_SampleXML' => '\\RialtoWebService\\StructType\\AddRialtoOrders_SampleXML',
            'AddRialtoOrders_SampleXMLResponse' => '\\RialtoWebService\\StructType\\AddRialtoOrders_SampleXMLResponse',
            'AddRialtoOrders' => '\\RialtoWebService\\StructType\\AddRialtoOrders',
            'AddRialtoOrdersResponse' => '\\RialtoWebService\\StructType\\AddRialtoOrdersResponse',
            'AddRialtoOrdersStr' => '\\RialtoWebService\\StructType\\AddRialtoOrdersStr',
            'AddRialtoOrdersStrResponse' => '\\RialtoWebService\\StructType\\AddRialtoOrdersStrResponse',
            'GetRialtoOrderDetails' => '\\RialtoWebService\\StructType\\GetRialtoOrderDetails',
            'GetRialtoOrderDetailsResponse' => '\\RialtoWebService\\StructType\\GetRialtoOrderDetailsResponse',
            'GetRialtoOrderDetailsStr' => '\\RialtoWebService\\StructType\\GetRialtoOrderDetailsStr',
            'GetRialtoOrderDetailsStrResponse' => '\\RialtoWebService\\StructType\\GetRialtoOrderDetailsStrResponse',
            'GetUpdatedRialtoOrders' => '\\RialtoWebService\\StructType\\GetUpdatedRialtoOrders',
            'GetUpdatedRialtoOrdersResponse' => '\\RialtoWebService\\StructType\\GetUpdatedRialtoOrdersResponse',
            'GetUpdatedRialtoOrdersStr' => '\\RialtoWebService\\StructType\\GetUpdatedRialtoOrdersStr',
            'GetUpdatedRialtoOrdersStrResponse' => '\\RialtoWebService\\StructType\\GetUpdatedRialtoOrdersStrResponse',
            'GetStockLevels' => '\\RialtoWebService\\StructType\\GetStockLevels',
            'GetStockLevelsResponse' => '\\RialtoWebService\\StructType\\GetStockLevelsResponse',
            'GetUpdatedStockLevels' => '\\RialtoWebService\\StructType\\GetUpdatedStockLevels',
            'GetUpdatedStockLevelsResponse' => '\\RialtoWebService\\StructType\\GetUpdatedStockLevelsResponse',
            'GetStockLevelsStr' => '\\RialtoWebService\\StructType\\GetStockLevelsStr',
            'GetStockLevelsStrResponse' => '\\RialtoWebService\\StructType\\GetStockLevelsStrResponse',
            'GetUpdatedStockLevelsStr' => '\\RialtoWebService\\StructType\\GetUpdatedStockLevelsStr',
            'GetUpdatedStockLevelsStrResponse' => '\\RialtoWebService\\StructType\\GetUpdatedStockLevelsStrResponse',
            'AddRialtoStockItems' => '\\RialtoWebService\\StructType\\AddRialtoStockItems',
            'AddRialtoStockItemsResponse' => '\\RialtoWebService\\StructType\\AddRialtoStockItemsResponse',
            'AddRialtoStockItemsStr' => '\\RialtoWebService\\StructType\\AddRialtoStockItemsStr',
            'AddRialtoStockItemsStrResponse' => '\\RialtoWebService\\StructType\\AddRialtoStockItemsStrResponse',
            'WebOrderList' => '\\RialtoWebService\\StructType\\WebOrderList',
            'WebOrderDetails' => '\\RialtoWebService\\StructType\\WebOrderDetails',
            'WebOrderDetail' => '\\RialtoWebService\\StructType\\WebOrderDetail',
            'WebOrderHeader' => '\\RialtoWebService\\StructType\\WebOrderHeader',
            'WebOrderItems' => '\\RialtoWebService\\StructType\\WebOrderItems',
            'WebOrderItem' => '\\RialtoWebService\\StructType\\WebOrderItem',
            'WebOrderCustomer' => '\\RialtoWebService\\StructType\\WebOrderCustomer',
            'WebOrderAddress' => '\\RialtoWebService\\StructType\\WebOrderAddress',
            'AdditionalData' => '\\RialtoWebService\\StructType\\AdditionalData',
            'WebOrdersResponse' => '\\RialtoWebService\\StructType\\WebOrdersResponse',
            'WebOrdersResponseOrderList' => '\\RialtoWebService\\StructType\\WebOrdersResponseOrderList',
            'WebOrdersResponseOrder' => '\\RialtoWebService\\StructType\\WebOrdersResponseOrder',
            'OrdersResponseErrorList' => '\\RialtoWebService\\StructType\\OrdersResponseErrorList',
            'OrdersResponseError' => '\\RialtoWebService\\StructType\\OrdersResponseError',
            'OrderDetailList' => '\\RialtoWebService\\StructType\\OrderDetailList',
            'OrderDetails' => '\\RialtoWebService\\StructType\\OrderDetails',
            'OrderDetail' => '\\RialtoWebService\\StructType\\OrderDetail',
            'OrderDetailsResponse' => '\\RialtoWebService\\StructType\\OrderDetailsResponse',
            'OrderDetailsResponseOrderList' => '\\RialtoWebService\\StructType\\OrderDetailsResponseOrderList',
            'OrderDetailsResponseOrder' => '\\RialtoWebService\\StructType\\OrderDetailsResponseOrder',
            'StockListResponse' => '\\RialtoWebService\\StructType\\StockListResponse',
            'StockListResponseStockList' => '\\RialtoWebService\\StructType\\StockListResponseStockList',
            'StockListResponseStock' => '\\RialtoWebService\\StructType\\StockListResponseStock',
            'RialtoWebOrderList' => '\\RialtoWebService\\StructType\\RialtoWebOrderList',
            'RialtoWebOrderDetails' => '\\RialtoWebService\\StructType\\RialtoWebOrderDetails',
            'RialtoWebOrderDetail' => '\\RialtoWebService\\StructType\\RialtoWebOrderDetail',
            'RialtoWebOrderHeader' => '\\RialtoWebService\\StructType\\RialtoWebOrderHeader',
            'giftmessage' => '\\RialtoWebService\\StructType\\Giftmessage',
            'RialtoWebOrderItems' => '\\RialtoWebService\\StructType\\RialtoWebOrderItems',
            'RialtoWebOrderItem' => '\\RialtoWebService\\StructType\\RialtoWebOrderItem',
            'RialtoWebOrderCustomer' => '\\RialtoWebService\\StructType\\RialtoWebOrderCustomer',
            'CRMFlags' => '\\RialtoWebService\\StructType\\CRMFlags',
            'CRMFlag' => '\\RialtoWebService\\StructType\\CRMFlag',
            'GiftAid' => '\\RialtoWebService\\StructType\\GiftAid',
            'RialtoWebOrderAddress' => '\\RialtoWebService\\StructType\\RialtoWebOrderAddress',
            'RialtoAdditionalData' => '\\RialtoWebService\\StructType\\RialtoAdditionalData',
            'RialtoMembership' => '\\RialtoWebService\\StructType\\RialtoMembership',
            'RialtoPaymentSchedule' => '\\RialtoWebService\\StructType\\RialtoPaymentSchedule',
            'RialtoPaymentInstalments' => '\\RialtoWebService\\StructType\\RialtoPaymentInstalments',
            'RialtoPaymentInstalment' => '\\RialtoWebService\\StructType\\RialtoPaymentInstalment',
            'RialtoWebOrdersResponse' => '\\RialtoWebService\\StructType\\RialtoWebOrdersResponse',
            'RialtoWebOrdersResponseOrderList' => '\\RialtoWebService\\StructType\\RialtoWebOrdersResponseOrderList',
            'RialtoWebOrdersResponseOrder' => '\\RialtoWebService\\StructType\\RialtoWebOrdersResponseOrder',
            'RialtoOrdersResponseErrorList' => '\\RialtoWebService\\StructType\\RialtoOrdersResponseErrorList',
            'RialtoOrdersResponseError' => '\\RialtoWebService\\StructType\\RialtoOrdersResponseError',
            'RialtoOrderDetailList' => '\\RialtoWebService\\StructType\\RialtoOrderDetailList',
            'RialtoOrderDetails' => '\\RialtoWebService\\StructType\\RialtoOrderDetails',
            'RialtoOrderDetail' => '\\RialtoWebService\\StructType\\RialtoOrderDetail',
            'RialtoOrderDetailsResponse' => '\\RialtoWebService\\StructType\\RialtoOrderDetailsResponse',
            'RialtoOrderDetailsResponseOrderList' => '\\RialtoWebService\\StructType\\RialtoOrderDetailsResponseOrderList',
            'RialtoOrderDetailsResponseOrder' => '\\RialtoWebService\\StructType\\RialtoOrderDetailsResponseOrder',
            'RialtoOrderItemDetailsResponseOrderItemList' => '\\RialtoWebService\\StructType\\RialtoOrderItemDetailsResponseOrderItemList',
            'RialtoOrderItemDetailsResponseOrderItem' => '\\RialtoWebService\\StructType\\RialtoOrderItemDetailsResponseOrderItem',
            'StockLevelsResponse' => '\\RialtoWebService\\StructType\\StockLevelsResponse',
            'StockLevelsResponseStockList' => '\\RialtoWebService\\StructType\\StockLevelsResponseStockList',
            'StockLevelsResponseStock' => '\\RialtoWebService\\StructType\\StockLevelsResponseStock',
            'ExpectedDeliveries' => '\\RialtoWebService\\StructType\\ExpectedDeliveries',
            'ExpectedDelivery' => '\\RialtoWebService\\StructType\\ExpectedDelivery',
            'RialtoStockItems' => '\\RialtoWebService\\StructType\\RialtoStockItems',
            'RialtoStockItemList' => '\\RialtoWebService\\StructType\\RialtoStockItemList',
            'RialtoStockItem' => '\\RialtoWebService\\StructType\\RialtoStockItem',
            'RialtoStockItemsResponse' => '\\RialtoWebService\\StructType\\RialtoStockItemsResponse',
            'RialtoStockItemReponseItemList' => '\\RialtoWebService\\StructType\\RialtoStockItemReponseItemList',
            'RialtoStockItemReponseItem' => '\\RialtoWebService\\StructType\\RialtoStockItemReponseItem',
            'RialtoStockItemResponseErrorList' => '\\RialtoWebService\\StructType\\RialtoStockItemResponseErrorList',
            'RialtoStockItemResponseError' => '\\RialtoWebService\\StructType\\RialtoStockItemResponseError',
        );
    }
}