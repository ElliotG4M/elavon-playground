# # HostedCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | HostedCard [Resource URL](#section/Overview/Values) (self link). | [optional] [readonly]
**id** | **string** | HostedCard [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp. | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | Modification timestamp | [optional] [readonly]
**expires_at** | [**\DateTime**](\DateTime.md) | Expiration timestamp. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values). Suppressed when using a public API key. | [optional] [readonly]
**card** | [**Card**](Card.md) |  | [optional] [readonly]
**do_verify** | **bool** | If true, verify Card | [optional] [readonly] [default to false]
**verification_results** | [**VerificationResults**](VerificationResults.md) | Verification results if doVerify was true | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
