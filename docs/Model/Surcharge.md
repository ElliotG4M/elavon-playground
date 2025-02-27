# # Surcharge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unadjusted_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Transaction total before adding surcharge total. | [optional] [readonly]
**unadjusted_refundable_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Amount of original unadjusted transaction still available for refund. | [optional] [readonly]
**surcharge_total** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Surcharge total. | [optional] [readonly]
**rate** | **string** | The merchant&#39;s surcharge rate. A value of 0.035 means 3.5%. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
