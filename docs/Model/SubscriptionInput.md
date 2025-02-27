# # SubscriptionInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan** | **string** | Plan [Resource URL](#section/Overview/Values).  Plan determines the billing details and their frequency. |
**account** | **string** | Account [Resource URL](#section/Overview/Values). Defaults to merchant. | [optional]
**do_send_receipt** | **string** | Send receipt to shopper&#39;s email address. The default value is &#39;DEFAULT&#39;, which will use the merchant setting for sending receipts for recurring sales | [optional] [default to 'DEFAULT']
**stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values)  StoredCard to which all payments will be billed and which must belong to the provided Shopper. |
**bill_count** | **int** | The total number of bills. May only be provided if not defined in plan. | [optional]
**time_zone_id** | **string** | The time zone ID for date fields in the subscription. This follows the IANA Timezone Database Name convention. |
**first_bill_at** | **\DateTime** | The first bill date. This value anchors the billing interval and determines all future bill dates. For monthly and yearly billing intervals, if the first bill date occurs on the last day of the month then all future bill dates will be adjusted to occur on the last day of the month. |
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
