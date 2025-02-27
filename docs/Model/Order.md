# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Order [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Order [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**modified_at** | **\DateTime** | Modification timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Total for all items | [optional] [readonly]
**description** | **string** | Description, which appears on the dashboard and might appear on receipts | [optional] [readonly]
**items** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\OrderItem[]**](OrderItem.md) | Line items, 64 max | [optional] [readonly]
**ship_to** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Contact**](Contact.md) | Shipping contact details | [optional] [readonly]
**shopper_email_address** | **string** | Shopper&#39;s email address | [optional] [readonly]
**shopper_reference** | **string** | Optional reference provided by the shopper, such as a purchase order | [optional] [readonly]
**order_reference** | **string** | Optional order reference which we&#39;ll display in the merchant dashboard. | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
