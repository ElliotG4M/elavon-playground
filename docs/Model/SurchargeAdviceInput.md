# # SurchargeAdviceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values) | [optional]
**hosted_card** | **string** | HostedCard [Resource URL](#section/Overview/Values) | [optional]
**card_number** | **string** | Personal account number (PAN), not returned. | [optional]
**pan_token** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ValueToken**](ValueToken.md) |  | [optional]
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The transaction total excluding the surcharge amount. |
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
