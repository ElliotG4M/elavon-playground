# # GetRefundStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | Merchant Id in Elavon |
**refund_id** | **string** | RefundID, provided by PMG. Should be always provided if known. Request is considered valid of at least one of refundId or merchantRefundId is provided. If both are provided refundId will be used for locating the transaction. | [optional]
**merchant_refund_id** | **string** | Should be used in very rare cases, when client could not process Refund response and refundId is not known. It is client responsibility to ensure uniqueness of merchantRefundId. If refundId is not provided, PMG will try to locate the refund in context of provided merchantId. If more than one refunds are found with the same id, Error will be returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
