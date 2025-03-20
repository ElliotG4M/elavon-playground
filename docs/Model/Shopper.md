# # Shopper

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Shopper [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Shopper [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | [**\DateTime**](\DateTime.md) | Creation timestamp | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | Modification timestamp | [optional] [readonly]
**deleted_at** | [**\DateTime**](\DateTime.md) | Deletion timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**default_stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values)  StoredCard to which all payments will be billed and which must belong to the provided Shopper | [optional]
**full_name** | **string** | Name |
**description** | **string** | Additional info that the Merchant may wish to provide about the Shopper | [optional]
**company** | **string** | Company | [optional]
**primary_address** | [**Address**](Address.md) | Primary address that can be offered as a default for shipping and/or billing | [optional]
**primary_phone** | **string** | Primary phone | [optional]
**alternate_phone** | **string** | Alternate phone | [optional]
**fax** | **string** | Fax | [optional]
**email** | **string** | Email | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
