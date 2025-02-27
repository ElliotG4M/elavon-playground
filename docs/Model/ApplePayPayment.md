# # ApplePayPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | ApplePayPayment [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | ApplePayPayment [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**expires_at** | **\DateTime** | Expiration timestamp calculated from the Apple Pay token signing time and not the createdAt value of this resource. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) (self link), suppressed when a public API key is used | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Card**](Card.md) | Only the Contact billTo info can be provided alongside the token. This is optional, but it does provide a more complete response with the decrypted Apple Pay payment info. | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**verification_results** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\VerificationResults**](VerificationResults.md) | Verification results (all fields except cryptogramSecurity will be unprovided always). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
