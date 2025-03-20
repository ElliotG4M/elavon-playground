# # PartialAuthorization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_partially_authorizable** | **bool** | Caller will allow a partial amount of the transaction total to be authorized | [readonly]
**is_partially_authorized** | **bool** | Processor only authorized a portion of the requested total | [optional] [readonly]
**total_requested** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Amount processor authorized | [optional] [readonly]
**total_remaining** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | The total requested minus the total authorized | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
