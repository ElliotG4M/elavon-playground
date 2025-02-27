# # PagedListOfStoredCards

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | [Resource URL](#section/Overview/Values) (Self link) | [optional] [readonly]
**first** | **string** | First page link | [optional] [readonly]
**next** | **string** | Next page link, null if no more items | [optional] [readonly]
**page_token** | **string** | An opaque continuation token for this page, null for the first page | [optional] [readonly]
**next_page_token** | **string** | An opaque continuation token for the next page, null if no more items | [optional] [readonly]
**limit** | **int** | Maximum number of items to return for this page. By default, returns 10 entries. The maximum possible number of entries returned is 200. | [optional] [readonly] [default to 10]
**size** | **int** | The size of the items array for this page | [optional] [readonly]
**items** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard[]**](StoredCard.md) | List of StoredCards | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
