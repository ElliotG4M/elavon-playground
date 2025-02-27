# Gear4music\ElavonPlayground\V1\EPG\PanTokensApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPanTokens()**](PanTokensApi.md#createPanTokens) | **POST** /pan-tokens | Create PanTokens |


## `createPanTokens()`

```php
createPanTokens($list_of_pan_tokens, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\ListOfPanTokens
```

Create PanTokens

Create PanTokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PanTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_of_pan_tokens = new \Gear4music\ElavonPlayground\V1\EPG\Model\ListOfPanTokens(); // \Gear4music\ElavonPlayground\V1\EPG\Model\ListOfPanTokens | object (ListOfPanTokens)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createPanTokens($list_of_pan_tokens, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PanTokensApi->createPanTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_of_pan_tokens** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ListOfPanTokens**](../Model/ListOfPanTokens.md)| object (ListOfPanTokens) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ListOfPanTokens**](../Model/ListOfPanTokens.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
