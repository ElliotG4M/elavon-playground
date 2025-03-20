# # PazePayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | PazePayment [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | PazePayment [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp | [optional] [readonly]
**expires_at** | [**\DateTime**](\DateTime.md) | Expiration timestamp | [optional]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values), suppressed when a public API key is used | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**card** | [**Card**](Card.md) | Only the Contact billTo info can be provided alongside the token. This is optional, but it does provide a more complete response with the decrypted Google Pay payment info. | [optional]
**payload_id** | **string** | An alphanumeric string returned from PAZE that refers to the current token and sessionId. | [optional]
**session_id** | **string** | An alphanumeric string returned from PAZE that refers to the current token and payloadId. | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**verification_results** | [**VerificationResults**](VerificationResults.md) | Verification results (all fields except cryptogramSecurity will be unprovided always). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
