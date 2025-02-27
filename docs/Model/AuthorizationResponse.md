# # AuthorizationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of Authorization request. |
**tx_id** | **string** | Transaction identifier in PMG. Always a valid transaction identifier is returned. |
**short_tx_id** | **string** | Short Transaction identifier in PMG (8 or 9 numbers). Always a valid short transaction identifier is returned. |
**merchant_tx_id** | **string** | Client&#39;s transaction identifier |
**error_message** | **string** | Human readable message. | [optional]
**error** | **string** | Error code. Refer to possible error codes for more info. |
**redirect_url** | **string** | URL to redirect the customer. Only available for asynchronous transactions, where the status is PENDING. | [optional]
**payload** | **array<string,object>** | Key - value json structure. Used to set payment type specific parameters. | [optional]
**fund_state** | **string** | Indicates the funds state, whether they are secured or not. Mandatory in case of status is set to SUCCEEDED. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
