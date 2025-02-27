# # Merchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Merchant [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Merchant [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**legal_name** | **string** | Legal name under which the merchant operates | [optional] [readonly]
**regions** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Region[]**](Region.md) | Regions in which the merchant operates, NA/EU | [optional] [readonly]
**is_demo** | **bool** | Is this a demo merchant for evaluation purposes only? Demo merchants do not interact with processors or issuers. No funds will ever be transferred | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
