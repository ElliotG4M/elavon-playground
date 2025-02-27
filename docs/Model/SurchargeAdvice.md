# # SurchargeAdvice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | SurchargeAdvice [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | SurchargeAdvice [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp. | [optional] [readonly]
**expires_at** | **\DateTime** | Expiration timestamp. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**hsm_card** | **string** | Hsm Card [Resource URL](#section/Overview/Values) | [optional]
**pan_token** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ValueToken**](ValueToken.md) |  | [optional]
**masked_number** | **string** | Masked card number. | [optional] [readonly]
**last4** | **string** | Last 4 digits of a card number. | [optional] [readonly]
**bin** | **string** | Issuer/Bank identification number / IIN / BIN. | [optional] [readonly]
**pan_fingerprint** | **string** | Personal account number (PAN) fingerprint. | [optional] [readonly]
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The transaction total excluding the surcharge amount. | [optional]
**surcharge_rate** | **string** | The merchant&#39;s surcharge rate. A value of 0.035 means 3.5%. | [optional] [readonly]
**surcharge_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The calculated surcharge total. | [optional] [readonly]
**adjusted_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The adjusted total including the calculated surcharge. | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
