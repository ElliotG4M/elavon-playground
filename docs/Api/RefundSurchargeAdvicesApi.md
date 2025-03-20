# Gear4music\ElavonPlayground\V1\EPG\RefundSurchargeAdvicesApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefundSurchargeAdvice()**](RefundSurchargeAdvicesApi.md#createRefundSurchargeAdvice) | **POST** /refund-surcharge-advices | Create RefundSurchargeAdvice
[**retrieveRefundSurchargeAdvice()**](RefundSurchargeAdvicesApi.md#retrieveRefundSurchargeAdvice) | **GET** /refund-surcharge-advices/{id} | Retrieve RefundSurchargeAdvice


## `createRefundSurchargeAdvice()`

```php
createRefundSurchargeAdvice($accept, $accept_version, $content_type, $refund_surcharge_advice_input): \Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdvice
```

Create RefundSurchargeAdvice

Create a refund surcharge advice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\RefundSurchargeAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$refund_surcharge_advice_input = {"parentTransaction":"https://uat.api.converge.eu.elavonaws.com/transactions/99qmrqcpjt2h8cm6q67gwd7kxywy","total":{"amount":"2.00","currencyCode":"USD"}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdviceInput | object (RefundSurchargeAdvice)

try {
    $result = $apiInstance->createRefundSurchargeAdvice($accept, $accept_version, $content_type, $refund_surcharge_advice_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundSurchargeAdvicesApi->createRefundSurchargeAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **refund_surcharge_advice_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdviceInput**](../Model/RefundSurchargeAdviceInput.md)| object (RefundSurchargeAdvice) | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdvice**](../Model/RefundSurchargeAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveRefundSurchargeAdvice()`

```php
retrieveRefundSurchargeAdvice($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdvice
```

Retrieve RefundSurchargeAdvice

Retrieve a refund surcharge advice resource by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\RefundSurchargeAdvicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 388jcqbr7mf73xtj77phbpdbcb86; // string | RefundSurchargeAdvice [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveRefundSurchargeAdvice($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundSurchargeAdvicesApi->retrieveRefundSurchargeAdvice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| RefundSurchargeAdvice [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\RefundSurchargeAdvice**](../Model/RefundSurchargeAdvice.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
