# Gear4music\ElavonPlayground\V1\PMG\TransactionAuthorizationEndpointApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeTransaction()**](TransactionAuthorizationEndpointApi.md#authorizeTransaction) | **POST** /api/v1/tx/authorization |  |


## `authorizeTransaction()`

```php
authorizeTransaction($authorization_request): \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse
```



Authorization transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Gear4music\ElavonPlayground\V1\PMG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\PMG\Api\TransactionAuthorizationEndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_request = new \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest(); // \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest

try {
    $result = $apiInstance->authorizeTransaction($authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionAuthorizationEndpointApi->authorizeTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization_request** | [**\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest**](../Model/AuthorizationRequest.md)|  | |

### Return type

[**\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
