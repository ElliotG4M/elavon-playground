# # StoredCardInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) |
**hosted_card** | **string** | HostedCard [Resource URL](#section/Overview/Values)  The hosted card details to use when initializing this stored card. | [optional]
**card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Card**](Card.md) | Card details | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
