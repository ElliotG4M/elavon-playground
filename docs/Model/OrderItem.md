# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | [**AmountAndCurrency**](AmountAndCurrency.md) | Total for this item, accounting for quantity |
**description** | **string** | Description of the item | [optional]
**unit_price** | [**AmountAndCurrency**](AmountAndCurrency.md) | Cost of an individual unit in the order. | [optional]
**quantity** | **int** | The number of units being purchased. | [optional] [default to 1]
**custom_reference** | **string** | Optional reference provided by the merchant. | [optional]
**type** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\OrderItemType**](OrderItemType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
