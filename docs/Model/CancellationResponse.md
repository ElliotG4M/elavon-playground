# # CancellationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of Authorization request. | [optional]
**cxl_id** | **string** | Cancellation identifier in Payment Method Gateway. Always a valid cancellation identifier is returned. |
**merchant_cxl_id** | **string** | Value of merchantCxlId set in the request. |
**error_message** | **string** | Human readable message, up to 200 characters. Set in case of error code &lt;&gt; ERR_OK | [optional]
**error** | **string** | Error code. Refer to possible error codes for more info. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
