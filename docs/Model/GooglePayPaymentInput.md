# # GooglePayPaymentInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**Card**](Card.md) | Only the Contact billTo info can be provided alongside the token. This is optional, but it does provide a more complete response with the decrypted Google Pay payment info. | [optional]
**token** | **string** | The encrypted payment data that is to be decrypted to gather the card info within. | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
