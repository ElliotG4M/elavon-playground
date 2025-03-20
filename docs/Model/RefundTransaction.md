# # RefundTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | [**Source**](Source.md) |  | [optional]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional]
**account** | **string** | Account [Resource URL](#section/Overview/Values). Defaults to merchant. | [optional]
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Transaction total | [optional]
**sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional]
**refund_surcharge_advice** | **string** | Refund Surcharge Advice [Resource URL](#section/Overview/Values) obtained through the create refundSurchargeAdvice API call. | [optional]
**parent_transaction** | **string** | Transaction [Resource URL](#section/Overview/Values) of the parent Transaction |
**description** | **string** | Description, which appears on the dashboard and might appear on receipts | [optional]
**shopper_statement** | [**ShopperStatement**](ShopperStatement.md) | Dynamic overrides of what might appear on a shopper&#39;s statement | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**shopper_reference** | **string** | Optional reference provided by the shopper, such as a purchase order | [optional]
**shopper_interaction** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction**](ShopperInteraction.md) |  | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address, useful for fraud detection and to provide a receipt | [optional]
**shopper_ip_address** | **string** | Shopper&#39;s IP address, useful for fraud detection | [optional]
**shopper_language_tag** | **string** | Shopper&#39;s IETF language tag, useful for localising the receipt | [optional]
**shopper_time_zone** | **string** | Shopper&#39;s time zone, specified by the IANA Time Zone Database name | [optional]
**payment_link** | **string** | PaymentLink [Resource URL](#section/Overview/Values) | [optional]
**payment_session** | **string** | PaymentSession [Resource URL](#section/Overview/Values) | [optional]
**created_by** | **string** | Who or what created the transaction? When created in Elavon&#39;s virtual terminal, this will be the email address of the currently logged in user. When created otherwise, the integrator may optionally provide any value that helps answer this question. | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**do_capture** | **bool** | If false, authorize only; if true (default), authorize and capture funds for settlement. | [optional]
**do_send_receipt** | **bool** | Send receipt to shopper&#39;s email address, default is false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
