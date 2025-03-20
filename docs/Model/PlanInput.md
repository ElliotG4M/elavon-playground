# # PlanInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan_list** | **string** | PlanList [Resource URL](#section/Overview/Values) | [optional]
**name** | **string** | Name |
**description** | **string** | Description | [optional]
**billing_interval** | [**BillingInterval**](BillingInterval.md) | Time period between bills |
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Total for each bill, except for any initial ones which might be different |
**sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional]
**bill_count** | **int** | The total number of bills, if applicable | [optional]
**initial_total** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Optional total override for initial bills to allow for trials, one-time initiation fees, etc. | [optional]
**initial_sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Optional sales tax override for initial bills | [optional]
**initial_total_bill_count** | **int** | The number of initial bills where initialTotal will be applied | [optional]
**shopper_statement** | [**ShopperStatement**](ShopperStatement.md) | Dynamic overrides of what might appear on a shopper&#39;s statement | [optional]
**is_subscribable** | **bool** | Can shoppers be subscribed to this plan? Defaults to true | [optional] [default to true]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
