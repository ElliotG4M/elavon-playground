# # CancellationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | Any Random String/Number generated by the caller. Used for tracing purposes. |
**system_id** | **string** | Terminal ID when payment is originated from terminal. System id when payment originated from ecommerce. |
**merchant_id** | **string** | Merchant ID. |
**merchant_cxl_id** | **string** | Client&#39;s cancellation identifier(Generated by ecommerce third party provider or Terminal). |
**origin_tx_id** | **string** | ID of the original transaction(authorization), provided by PMG. |
**origin_short_tx_id** | **string** | Short ID of the original transaction (authorization), provided by PMG (8 or 9 numbers). | [optional]
**transaction_type** | **string** | \&quot;POS_PURCHASE\&quot; or \&quot;POS_RETURN\&quot;. |
**reason** | **string** | Reason for the cancellation:  TIMEOUT - the original transaction response timed out. Client initiated refund; ERROR - terminal/portal is unable to obtain the status of original transaction due to unknown error; USER - refund was requested by user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
