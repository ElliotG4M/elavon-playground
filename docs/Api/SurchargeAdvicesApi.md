# Gear4music\ElavonPlayground\V1\EPG\SurchargeAdvicesApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSurchargeAdvice()**](SurchargeAdvicesApi.md#createSurchargeAdvice) | **POST** /surcharge-advices | Create SurchargeAdvice |
| [**retrieveSurchargeAdvice()**](SurchargeAdvicesApi.md#retrieveSurchargeAdvice) | **GET** /surcharge-advices/{id} | Retrieve SurchargeAdvice |


## `createSurchargeAdvice()`

```php
createSurchargeAdvice($accept, $accept_version, $content_type, $surcharge_advice_input): \Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdvice
```

Create SurchargeAdvice

Create a surcharge advice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\SurchargeAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$surcharge_advice_input = {"total":{"amount":"5.00","currencyCode":"USD"},"cardNumber":"XXXX.XXXX.XXXX.4444"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdviceInput | object (SurchargeAdvice)

try {
    $result = $apiInstance->createSurchargeAdvice($accept, $accept_version, $content_type, $surcharge_advice_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeAdvicesApi->createSurchargeAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **surcharge_advice_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdviceInput**](../Model/SurchargeAdviceInput.md)| object (SurchargeAdvice) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdvice**](../Model/SurchargeAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSurchargeAdvice()`

```php
retrieveSurchargeAdvice($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdvice
```

Retrieve SurchargeAdvice

Retrieve a surcharge advice resource by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\SurchargeAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ph4jtcrxffvdbmvwg79xvkf8fqf6; // string | SurchargeAdvice [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveSurchargeAdvice($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurchargeAdvicesApi->retrieveSurchargeAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| SurchargeAdvice [Resource ID](#section/Overview/Values) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\SurchargeAdvice**](../Model/SurchargeAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
