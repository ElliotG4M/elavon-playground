# # OrderInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Total for all items |
**description** | **string** | Description, which appears on the dashboard and might appear on receipts | [optional]
**items** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\OrderItem[]**](OrderItem.md) | Line items, 64 max | [optional]
**ship_to** | [**Contact**](Contact.md) | Shipping contact details | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address | [optional]
**shopper_reference** | **string** | Optional reference provided by the shopper, such as a purchase order | [optional]
**order_reference** | **string** | Optional order reference which we&#39;ll display in the merchant dashboard. | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
