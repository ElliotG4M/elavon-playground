# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Subscription [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Subscription [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | Modification timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**plan** | **string** | Plan [Resource URL](#section/Overview/Values)  Plan determines the billing details and their frequency | [optional] [readonly]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) | [optional] [readonly]
**account** | **string** | Account [Resource URL](#section/Overview/Values) | [optional] [readonly]
**do_send_receipt** | **string** | Send receipt to shopper&#39;s email address. The default value is &#39;DEFAULT&#39;, which will use the merchant setting for sending receipts for recurring sales | [optional] [default to DO_SEND_RECEIPT__DEFAULT]
**stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values)  StoredCard to which all payments will be billed and which must belong to the provided Shopper | [optional] [readonly]
**bill_count** | **int** | The total number of bills. May only be provided if not defined in plan | [optional] [readonly]
**time_zone_id** | **string** | The time zone ID for date fields in the subscription. | [optional] [readonly]
**first_bill_at** | [**\DateTime**](\DateTime.md) | First bill date, which anchors the billing interval and determines all future bill dates. For monthly and yearly billing intervals, if the first bill date occurs on the last day of the month then all future bill dates will be adjusted to occur on the last day of the month. | [optional] [readonly]
**next_bill_at** | [**\DateTime**](\DateTime.md) | Next bill date as calculated from the first or previous bill date according to the plan&#39;s billing interval | [optional] [readonly]
**previous_bill_at** | [**\DateTime**](\DateTime.md) | The most recent bill date, regardless of whether or not the payment has been successfully made | [optional] [readonly]
**final_bill_at** | [**\DateTime**](\DateTime.md) | The date of final bill if not open ended payment plan | [optional] [readonly]
**cancel_requested_at** | [**\DateTime**](\DateTime.md) | The date in which cancel was requested | [optional] [readonly]
**cancel_after_bill_number** | **int** | The bill number after which no further billings will occur | [optional]
**next_bill_number** | **int** | The number of the next bill according to the plan&#39;s schedule | [optional] [readonly]
**subscription_state** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\SubscriptionState**](SubscriptionState.md) |  | [optional]
**failure_count** | **int** | The count of consecutive failures performing current payment | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
