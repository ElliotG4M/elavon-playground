# # Plan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Plan [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Plan [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | Modification timestamp | [optional] [readonly]
**deleted_at** | [**\DateTime**](\DateTime.md) | Deletion timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**plan_list** | **string** | PlanList [Resource URL] (#section/Overview/Values) | [optional] [readonly]
**name** | **string** | Name | [optional] [readonly]
**description** | **string** | Description | [optional] [readonly]
**billing_interval** | [**BillingInterval**](BillingInterval.md) | Time period between bills | [optional] [readonly]
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Total for each bill, except for any initial ones which might be different | [optional] [readonly]
**sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional] [readonly]
**bill_count** | **int** | The total number of bills, if applicable | [optional] [readonly]
**initial_total** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Optional total override for initial bills to allow for trials, one-time initiation fees, etc. | [optional] [readonly]
**initial_sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Optional sales tax override for initial bills | [optional] [readonly]
**initial_total_bill_count** | **int** | The number of initial bills where initialTotal will be applied | [optional] [readonly]
**shopper_statement** | [**ShopperStatement**](ShopperStatement.md) | Dynamic overrides of what might appear on a shopper&#39;s statement | [optional] [readonly]
**is_subscribable** | **bool** | Can shoppers be subscribed to this plan? Defaults to true | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
