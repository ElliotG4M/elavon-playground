# # RefundSurchargeAdviceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parent_transaction** | **string** | Transaction [Resource URL](#section/Overview/Values) of the parent transaction for surcharge. |
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The refund total excluding the surcharge amount. A value for partial refund can be specified. | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
