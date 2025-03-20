# Gear4music\ElavonPlayground\V1\EPG\ForexAdvicesApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForexAdvice()**](ForexAdvicesApi.md#createForexAdvice) | **POST** /forex-advices | Create ForexAdvice
[**retrieveForexAdvice()**](ForexAdvicesApi.md#retrieveForexAdvice) | **GET** /forex-advices/{id} | Retrieve ForexAdvice


## `createForexAdvice()`

```php
createForexAdvice($accept, $accept_version, $content_type, $forex_advice): \Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice
```

Create ForexAdvice

Creates a ForexAdvice resource. Each ForexAdvice captures a foreign exchange currency conversion operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ForexAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$forex_advice = {"total":{"amount":"3.00","currencyCode":"USD"},"cardNumber":"XXXXXXXXXXXX0000","shopperInteraction":"telephoneOrder"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice

try {
    $result = $apiInstance->createForexAdvice($accept, $accept_version, $content_type, $forex_advice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForexAdvicesApi->createForexAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **forex_advice** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice**](../Model/ForexAdvice.md)|  | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice**](../Model/ForexAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveForexAdvice()`

```php
retrieveForexAdvice($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice
```

Retrieve ForexAdvice

Retrieve a previously created ForexAdvice by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ForexAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8Pmhg2rh8c7wytV9vb27X6VT; // string | ForexAdvice [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveForexAdvice($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForexAdvicesApi->retrieveForexAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ForexAdvice [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ForexAdvice**](../Model/ForexAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
