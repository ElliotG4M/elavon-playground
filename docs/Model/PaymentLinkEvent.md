# # PaymentLinkEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | PaymentLinkEvent [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | PaymentLinkEvent [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values). Suppressed when a public API key is used. | [optional] [readonly]
**payment_link** | **string** | PaymentLink [Resource URL](#section/Overview/Values) | [optional]
**type** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEventType**](PaymentLinkEventType.md) |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp. | [optional] [readonly]
**created_by** | **string** | Who or what created the transaction? When created in Elavon&#39;s virtual terminal, this will be the email address of the currently logged in user. When created otherwise, the integrator may optionally provide any value that helps answer this question. | [optional]
**transaction** | **string** | Transaction [Resource URL](#section/Overview/Values), required if event type is &#39;payment&#39;. | [optional] [readonly]
**shopper_email_address** | **string** | Shopper&#39;s email address, required if event type is &#39;reminderSent&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
