# # PaymentLinkInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | **string** | Account [Resource URL](#section/Overview/Values). Defaults to merchant. | [optional]
**return_url** | **string** | URL to redirect a shopper to after collecting payment details. | [optional]
**expires_at** | [**\DateTime**](\DateTime.md) | The expiration timestamp. A payment link must expire within 1 year of its creation. |
**do_cancel** | **bool** | Cancel payment link. Defaults to false. | [optional]
**do_capture** | **bool** | This value will be passed along to any transaction created later in the payment flow. See doCapture on transaction | [optional] [default to true]
**description** | **string** | Descriptive text indicating the purpose of the PaymentLink | [optional]
**total** | [**AmountAndCurrency**](AmountAndCurrency.md) | Total payment amount. |
**conversion_limit** | **int** | Number of times the PaymentLink may be used to complete a Transaction | [optional]
**debtor_account** | [**DebtorAccount**](DebtorAccount.md) | Account information required for MCC 6012/6050/6051 merchants | [optional]
**order_reference** | **string** | Optional order reference which we&#39;ll display in the merchant dashboard. | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address, useful for fraud detection and to provide a receipt | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
