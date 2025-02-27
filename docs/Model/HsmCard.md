# # HsmCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**modified_at** | **\DateTime** | Modification timestamp | [optional] [readonly]
**expires_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**terminal** | **string** | Terminal [Resource URL](#section/Overview/Values) | [readonly]
**card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Card**](Card.md) |  | [optional]
**account_entry_mode** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\AccountEntryMode**](AccountEntryMode.md) |  |
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values. Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
