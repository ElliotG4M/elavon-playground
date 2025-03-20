# Gear4music\ElavonPlayground\V1\EPG\BatchesApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveBatch()**](BatchesApi.md#retrieveBatch) | **GET** /batches/{id} | Retrieve Batch
[**retrieveBatches()**](BatchesApi.md#retrieveBatches) | **GET** /batches | Retrieve Batches


## `retrieveBatch()`

```php
retrieveBatch($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Batch
```

Retrieve Batch

Retrieve a single batch of transactions by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wrKK4HcHCXcK3KkXwFRMXVjQ; // string | Batch [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveBatch($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->retrieveBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Batch [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Batch**](../Model/Batch.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveBatches()`

```php
retrieveBatches($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfBatches
```

Retrieve Batches

Retrieve a list of batches in descending chronological order. This resource supports filtering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\BatchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$page_token = 'page_token_example'; // string | An opaque continuation token for this page, null for the first page.
$limit = 10; // int | Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page.

try {
    $result = $apiInstance->retrieveBatches($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchesApi->retrieveBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **page_token** | **string**| An opaque continuation token for this page, null for the first page. | [optional]
 **limit** | **int**| Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page. | [optional] [default to 10]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfBatches**](../Model/PagedListOfBatches.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
