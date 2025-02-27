# Gear4music\ElavonPlayground\V1\EPG\ApplePayPaymentSessionsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApplePayPaymentSession()**](ApplePayPaymentSessionsApi.md#createApplePayPaymentSession) | **POST** /apple-pay-payment-sessions | Create ApplePayPaymentSession |


## `createApplePayPaymentSession()`

```php
createApplePayPaymentSession($accept, $accept_version, $content_type, $apple_pay_payment_session_input): \Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentSession
```

Create ApplePayPaymentSession

Create an Apple Pay payment session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ApplePayPaymentSessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$apple_pay_payment_session_input = {"account":"7btv9vr8cq3nq8r7p4wjmjkk58bt","initiativeContext":"mystore.example.com"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentSessionInput | object (ApplePayPaymentSession)

try {
    $result = $apiInstance->createApplePayPaymentSession($accept, $accept_version, $content_type, $apple_pay_payment_session_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayPaymentSessionsApi->createApplePayPaymentSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **apple_pay_payment_session_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentSessionInput**](../Model/ApplePayPaymentSessionInput.md)| object (ApplePayPaymentSession) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentSession**](../Model/ApplePayPaymentSession.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
