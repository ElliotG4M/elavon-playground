# Gear4music\ElavonPlayground\V1\EPG\PaymentSessionsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentSession()**](PaymentSessionsApi.md#createPaymentSession) | **POST** /payment-sessions | Create PaymentSession |
| [**retrievePaymentSession()**](PaymentSessionsApi.md#retrievePaymentSession) | **GET** /payment-sessions/{id} | Retrieve PaymentSession |
| [**updatePaymentSession()**](PaymentSessionsApi.md#updatePaymentSession) | **POST** /payment-sessions/{id} | Update PaymentSession |


## `createPaymentSession()`

```php
createPaymentSession($accept, $accept_version, $content_type, $payment_session_input): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession
```

Create PaymentSession

Create a payment session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$payment_session_input = {"order":"https://uat.api.converge.eu.elavonaws.com/orders/txdjjwg49k4pdkcyyhbpb9tffmbg","returnUrl":"https://merchant.com/return","cancelUrl":"https://merchant.com/cancel","doCreateTransaction":"true"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSessionInput | object (PaymentSession)

try {
    $result = $apiInstance->createPaymentSession($accept, $accept_version, $content_type, $payment_session_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionsApi->createPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **payment_session_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSessionInput**](../Model/PaymentSessionInput.md)| object (PaymentSession) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentSession()`

```php
retrievePaymentSession($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession
```

Retrieve PaymentSession

Retrieve a payment session resource by ID.  Supported [Filters](#section/Overview/Collection-Filtering): * paymentLink_eq_id * customReference_eq_string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = rd8y9xhx7qh9yj6r4vpxpqcv; // string | PaymentSession [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrievePaymentSession($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionsApi->retrievePaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| PaymentSession [Resource ID](#section/Overview/Values) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentSession()`

```php
updatePaymentSession($id, $accept, $accept_version, $content_type, $payment_session): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession
```

Update PaymentSession

Overwrite an existing payment session with new information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = rd8y9xhx7qh9yj6r4vpxpqcv; // string | PaymentSession [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$payment_session = new \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession(); // \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession | object (PaymentSession)

try {
    $result = $apiInstance->updatePaymentSession($id, $accept, $accept_version, $content_type, $payment_session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentSessionsApi->updatePaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| PaymentSession [Resource ID](#section/Overview/Values) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **payment_session** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession**](../Model/PaymentSession.md)| object (PaymentSession) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentSession**](../Model/PaymentSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
