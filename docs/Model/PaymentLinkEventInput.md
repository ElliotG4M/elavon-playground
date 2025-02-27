# # PaymentLinkEventInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_link** | **string** | PaymentLink [Resource URL](#section/Overview/Values) |
**type** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEventType**](PaymentLinkEventType.md) |  |
**created_by** | **string** | Who or what created the transaction? When created in Elavon&#39;s virtual terminal, this will be the email address of the currently logged in user. When created otherwise, the integrator may optionally provide any value that helps answer this question. | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address, required if event type is &#39;reminderSent&#39;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
