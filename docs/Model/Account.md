# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Account [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Account [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | Modification timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_accounts** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ProcessorAccount[]**](ProcessorAccount.md) | List of processor accounts for this account | [optional] [readonly]
**name** | **string** | Name | [optional]
**description** | **string** | Optional Description | [optional]
**trade_name** | **string** | Trading as, operating as, doing business as, fictitious, or assumed name, which may be different than the legal name. | [optional] [readonly]
**business_address** | **string** | Business address | [optional] [readonly]
**business_phone** | **string** | Business phone | [optional] [readonly]
**business_email** | **string** | Business email | [optional] [readonly]
**business_website** | **string** | Business website | [optional] [readonly]
**plan_list** | **string** | PlanList [Resource URL](#section/Overview/Values) | [optional] [readonly]
**sales_tax_entry** | **string** | Sales tax entry | [optional] [readonly]
**signature_verification** | **string** | Signature verification | [optional] [readonly]
**logo_url** | **string** | Logo URL | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
