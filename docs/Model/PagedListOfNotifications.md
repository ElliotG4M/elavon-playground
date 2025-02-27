# # PagedListOfNotifications

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | PagedListOfNotifications [Resource URL](#section/Overview/Values) (Self link) | [optional] [readonly]
**first** | **string** | First page link | [optional] [readonly]
**next** | **string** | Next page link, null if no more items | [optional] [readonly]
**page_token** | **string** | An opaque continuation token for this page, null for the first page | [optional] [readonly]
**next_page_token** | **string** | An opaque continuation token for the next page, null if no more items | [optional] [readonly]
**limit** | **int** | Maximum number of items to return on this page, at least 1, and might be adjusted to a smaller value | [optional] [readonly]
**size** | **int** | The size of the items array for this page | [optional] [readonly]
**items** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Notification[]**](Notification.md) | List of Notifications | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
