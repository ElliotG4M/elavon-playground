# Gear4music\ElavonPlayground\V1\EPG\ProcessorAccountsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveProcessorAccount()**](ProcessorAccountsApi.md#retrieveProcessorAccount) | **GET** /processor-accounts/{id} | Retrieve ProcessorAccount
[**retrieveProcessorAccounts()**](ProcessorAccountsApi.md#retrieveProcessorAccounts) | **GET** /processor-accounts | Retrieve ProcessorAccounts


## `retrieveProcessorAccount()`

```php
retrieveProcessorAccount($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\ProcessorAccount
```

Retrieve ProcessorAccount

Retrieve a Processor Account by resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ProcessorAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | ProcessorAccount [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveProcessorAccount($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessorAccountsApi->retrieveProcessorAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ProcessorAccount [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ProcessorAccount**](../Model/ProcessorAccount.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveProcessorAccounts()`

```php
retrieveProcessorAccounts($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfProcessorAccounts
```

Retrieve ProcessorAccounts

Retrieve all processor accounts. This resource is filterable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ProcessorAccountsApi(
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
    $result = $apiInstance->retrieveProcessorAccounts($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessorAccountsApi->retrieveProcessorAccounts: ', $e->getMessage(), PHP_EOL;
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

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfProcessorAccounts**](../Model/PagedListOfProcessorAccounts.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
