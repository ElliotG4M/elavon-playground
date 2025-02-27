# # GetRefundStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of Refund request. |
**refund_id** | **string** | Refund identifier in PMG. |
**merchant_refund_id** | **string** | Value of &#39;merchantRefundId&#39; set in the request. |
**error_message** | **string** | Human readable message. | [optional]
**error** | **string** | Error code. |
**payload** | **array<string,object>** | Key - value json structure. Used to set payment type specific parameters. | [optional]
**fund_state** | **string** | Indicates the funds state, whether they are secured or not. Mandatory in case of status is set to SUCCEEDED. | [optional]
**payment_method** | **string** | Payment method used by this refund. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
