# # GetTransactionStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_id** | **string** | Merchant ID in Elavon. |
**tx_id** | **string** | Transaction ID , provided by PMG. Should be always provided if known. Request is considered valid of at least one of txId or merchantTxId is provided. If both are provided txId will be used for locating the transaction. | [optional]
**merchant_tx_id** | **string** | Should be used in very rare cases, when client could not process Authorization response and txId is not known. It is client responsibility to ensure uniqueness of merchantTxId. If txId is not provided, PMG will try to locate the transaction in context of provided merchantId. If more than one transactions are found with the same id, Error will be returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
