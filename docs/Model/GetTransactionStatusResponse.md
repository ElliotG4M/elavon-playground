# # GetTransactionStatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tx_id** | **string** | Transaction identifier in PMG. Always a valid transaction identifier is returned. |
**short_tx_id** | **string** | Short Transaction identifier in PMG (8 or 9 numbers). Always a valid short transaction identifier is returned. |
**merchant_tx_id** | **string** | Client&#39;s transaction identifier |
**status** | **string** | Status of Authorization request. |
**error** | **string** | Error code. |
**error_message** | **string** | Human readable message. | [optional]
**payload** | **array<string,object>** | Key - value json structure. Used to set payment type specific parameters. | [optional]
**fund_state** | **string** | Indicates the funds state, whether they are secured or not. Mandatory in case of status is set to SUCCEEDED. | [optional]
**payment_method** | **string** | Payment method used by this transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
