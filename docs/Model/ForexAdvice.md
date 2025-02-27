# # ForexAdvice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | ForexAdvice [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | ForexAdvice [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp. | [optional] [readonly]
**expires_at** | **\DateTime** | Expiration timestamp. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values). Suppressed when using a public API key. | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values). | [optional]
**stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values). | [optional]
**hosted_card** | **string** | HostedCard [Resource URL](#section/Overview/Values). | [optional]
**hsm_card** | **string** | HsmCard [Resource URL](#section/Overview/Values). | [optional]
**card_number** | **string** | Personal account number (PAN), not returned. | [optional]
**pan_token** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ValueToken**](ValueToken.md) | Cardholder&#39;s personal account number (PAN) token. | [optional]
**masked_number** | **string** | Masked card number. | [optional] [readonly]
**last4** | **string** | Last 4 of a card number. | [optional] [readonly]
**bin** | **string** | Issuer/Bank identification number / IIN / BIN. | [optional] [readonly]
**pan_fingerprint** | **string** | Personal account number (PAN) fingerprint. | [optional] [readonly]
**total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\AmountAndCurrency**](AmountAndCurrency.md) | Total in the source currency. |
**issuer_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\AmountAndCurrency**](AmountAndCurrency.md) | Total in the target currency. | [optional] [readonly]
**conversion_rate** | **string** | The currency exchange rate (1 unit of total currency &#x3D; 11.89 units of issuer currency). | [optional] [readonly]
**markup_rate** | **string** | The markup percent. A value of 0.0399 means 3.99%. | [optional] [readonly]
**markup_rate_annotation** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\MarkupRateAnnotation**](MarkupRateAnnotation.md) |  | [optional]
**shopper_interaction** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction**](ShopperInteraction.md) |  |
**custom_reference** | **string** | Optional reference provided by the merchant. | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
