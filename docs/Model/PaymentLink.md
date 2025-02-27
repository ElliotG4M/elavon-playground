# # PaymentLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | PaymentLink [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | PaymentLink [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values). Suppressed when a public API key is used | [optional] [readonly]
**account** | **string** | Account [Resource URL](#section/Overview/Values) | [optional] [readonly]
**url** | **string** | The external URL which is shared with the card holder | [optional] [readonly]
**return_url** | **string** | URL to redirect to after payment details are collected. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp. | [optional] [readonly]
**modified_at** | **\DateTime** | Modification timestamp. | [optional] [readonly]
**expires_at** | **\DateTime** | An expiration timestamp. | [optional]
**cancelled_at** | **\DateTime** | Cancellation timestamp | [optional] [readonly]
**do_cancel** | **bool** | Cancel payment link. Defaults to false. | [optional]
**do_capture** | **bool** | This value will be passed along to any transaction created later in the payment flow. See doCapture on transaction | [optional] [readonly] [default to true]
**description** | **string** | Descriptive text indicating the purpose of the PaymentLink | [optional] [readonly]
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\AmountAndCurrency**](AmountAndCurrency.md) | Total payment amount | [optional] [readonly]
**sales_tax** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional] [readonly]
**conversion_limit** | **int** | Number of times the PaymentLink may be used to complete a Transaction | [optional] [readonly]
**conversion_count** | **int** | The number of authorized transactions created from this PaymentLink | [optional] [readonly]
**click_count** | **int** | The number of times the URL has been clicked | [optional] [readonly]
**debtor_account** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\DebtorAccount**](DebtorAccount.md) | Account information required for MCC 6012/6050/6051 merchants | [optional] [readonly]
**order_reference** | **string** | Optional order reference which we&#39;ll display in the merchant dashboard. | [optional] [readonly]
**shopper_email_address** | **string** | Shopper&#39;s email address, useful for fraud detection and to provide a receipt | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
