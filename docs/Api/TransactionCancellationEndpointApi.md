# Gear4music\ElavonPlayground\V1\PMG\TransactionCancellationEndpointApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelTransaction()**](TransactionCancellationEndpointApi.md#cancelTransaction) | **POST** /api/v1/tx/cancellation |  |


## `cancelTransaction()`

```php
cancelTransaction($cancellation_request): \Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse
```



Cancel transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Gear4music\ElavonPlayground\V1\PMG\Api\TransactionCancellationEndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancellation_request = new \Gear4music\ElavonPlayground\V1\PMG\Model\CancellationRequest(); // \Gear4music\ElavonPlayground\V1\PMG\Model\CancellationRequest

try {
    $result = $apiInstance->cancelTransaction($cancellation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionCancellationEndpointApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancellation_request** | [**\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationRequest**](../Model/CancellationRequest.md)|  | |

### Return type

[**\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse**](../Model/CancellationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
