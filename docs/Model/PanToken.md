# # PanToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Arbitrary reference provided by the caller | [optional]
**number** | **string** | Personal account number (PAN), not returned | [optional]
**pan_token** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ValueToken**](ValueToken.md) |  | [optional]
**success** | **bool** | true for successful conversion | [optional] [readonly] [default to true]
**card_expiration_month** | **int** | Optional card expiration month. This should be set along with the card expiration year. If only one of the two fields is set, then a token is not created. | [optional]
**card_expiration_year** | **int** | Optional card expiration year. This should be set along with the card expiration month. If only one of the two fields is set, then a token is not created. This must be a 4-digit year between 2000 and 2099, inclusive. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
