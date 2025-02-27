# # ProcessorAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | ProcessorAccount [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_reference** | **string** | Reference assigned by the processor | [optional] [readonly]
**trade_name** | **string** | Trading as, operating as, doing business as, fictitious, or assumed name, which may be different than the legal name | [optional] [readonly]
**business_address** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Address**](Address.md) | Business Address | [optional] [readonly]
**business_phone** | **string** | Business phone | [optional] [readonly]
**business_email** | **string** | Business email | [optional] [readonly]
**business_website** | **string** | Business website | [optional] [readonly]
**merchant_category_code** | **string** | Merchant category code (MCC), four-digit number from ISO 18245 | [optional] [readonly]
**market_segment** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\MarketSegment**](MarketSegment.md) | Market segment | [optional] [readonly]
**region** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Region**](Region.md) | Region, (e.g., NA, EU) | [optional] [readonly]
**settlement_currency_code** | **string** | Currency to settle funds in. Uses ISO 4217 three-letter currency code. | [optional] [readonly]
**language_tag** | **string** | Language tag | [optional] [readonly]
**supported_card_brands** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand[]**](CardBrand.md) | Supported CardBrand(s) | [optional] [readonly]
**supported_payment_methods** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]**](PaymentMethod.md) | List of supported payment methods. | [optional] [readonly]
**supported_payment_method_origins** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]**](PaymentMethodOrigin.md) | List of supported payment method origins. | [optional] [readonly]
**is_dcc_enabled** | **bool** | Is this processor account DCC-enabled? | [optional] [readonly]
**is_mcc_enabled** | **bool** | Is this processor account MCC-enabled? | [optional] [readonly]
**surcharging** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Surcharging**](Surcharging.md) | Surcharging | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
