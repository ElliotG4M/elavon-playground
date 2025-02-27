# # StoredCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | StoredCard [Resource URL](#section/Overview/Values) (self link). | [optional] [readonly]
**id** | **string** | StoredCard [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp. | [optional] [readonly]
**modified_at** | **\DateTime** | Modification timestamp. | [optional] [readonly]
**deleted_at** | **\DateTime** | Deletion timestamp. | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) | [optional] [readonly]
**shopper_interaction** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction**](ShopperInteraction.md) | Shopper interaction, defaults to &#39;ecommerce&#39; | [optional]
**card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Card**](Card.md) | Card details | [optional] [readonly]
**credential_on_file_type** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CredentialOnFileType**](CredentialOnFileType.md) | Credential on file type, used with cards in a wallet, defaults to &#39;unScheduled&#39; | [optional]
**verification_results** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\VerificationResults**](VerificationResults.md) |  | [optional] [readonly]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
