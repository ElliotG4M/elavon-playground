# # RefundSurchargeAdvice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | RefundSurchargeAdvice [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | RefundSurchargeAdvice [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp. | [optional] [readonly]
**expires_at** | [**\DateTime**](\DateTime.md) | Expiration timestamp. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**parent_transaction** | **string** | Transaction [Resource URL](#section/Overview/Values) of the parent transaction for surcharge. | [optional]
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The refund total excluding the surcharge amount. A value for partial refund can be specified. | [optional]
**surcharge_rate** | **string** | The merchant&#39;s surcharge rate. A value of 0.035 means 3.5%. | [optional] [readonly]
**surcharge_total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The calculated surcharge total. This value is prorated based on the total amount to be refunded. | [optional] [readonly]
**adjusted_total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The adjusted total refund including the calculated surcharge. The calculated surcharge is prorated based on the total amount to be refunded. | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
