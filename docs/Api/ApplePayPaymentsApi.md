# Gear4music\ElavonPlayground\V1\EPG\ApplePayPaymentsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApplePayPayment()**](ApplePayPaymentsApi.md#createApplePayPayment) | **POST** /apple-pay-payments | Create ApplePayPayment
[**retrieveApplePayPayment()**](ApplePayPaymentsApi.md#retrieveApplePayPayment) | **GET** /apple-pay-payments/{id} | Retrieve ApplePayPayment


## `createApplePayPayment()`

```php
createApplePayPayment($accept, $accept_version, $content_type, $apple_pay_payment_input): \Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPayment
```

Create ApplePayPayment

Create an Apple Pay payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ApplePayPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$apple_pay_payment_input = {"card":{"holderName":"John Q Public","billTo":{"fullName":"John Q Public","primaryPhone":"4045555555","street1":"24 James St","city":"Skowhegan","region":"New York","postalCode":"04976","countryCode":"USA"}},"token":"{\"data\":\"fAlJ5pzTqvo5zw+cJnminC3AlL+45CzXm+qjwGg2p++4v09vaA/t3/9B1YVaMsn319GTI8jxTDhH9UaCBoFDNB++egeKMpls33yrwHjdvt59QTgcMiRxX2+xhQqiK56wqy1yzzz2MX+pyPFM1JViGdtUW5fMProKiBun4J1d2BLSUiQ4rEnIzWjHQN5U02lNc3SlxEzHRNkvkk1tVFOy0p5sHrn5/t/MDJDGvNfFwnNvkiayX3rVEavRNwuWc7k79Eqrc3G+ak+rHt2kyRE2pm2vTuJFEo6QbNTDQeP+41jCXKpIQ96ZYjDzQ7WJYHDWyIYQZvwNipF4VXJy4gtz84Yl1/X0/Crogh/XEC5IEOQ5M8/MnMxGkbsNOABz+1cCNVnB+nnn395nYrN0LrvX\",\"signature\":\"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\",\"header\":{\"publicKeyHash\":\"nVbhfkzo2Kzr3MylFDBrS5u43yf0U9tBUtdQQ0gdcv8=\",\"ephemeralPublicKey\":\"MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAEUlCqorBXjCcEGJmvXqQfdJpz5lH905wPvlSu0NMTn1s8r8K/DQ4xwA4Y06RluSqmAiUkbBKwvDGs6iOR6pgirw==\",\"transactionId\":\"77184f48b78da840be0216d3eb12b31f8afcf35c3bda5b51be14c7717ddf79d1\"},\"version\":\"EC_v1\"}","customReference":"customReference","customFields":{"name1":"value1","name2":"value2"}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentInput | object (ApplePayPayment)

try {
    $result = $apiInstance->createApplePayPayment($accept, $accept_version, $content_type, $apple_pay_payment_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayPaymentsApi->createApplePayPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **apple_pay_payment_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPaymentInput**](../Model/ApplePayPaymentInput.md)| object (ApplePayPayment) | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPayment**](../Model/ApplePayPayment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveApplePayPayment()`

```php
retrieveApplePayPayment($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPayment
```

Retrieve ApplePayPayment

Retrieve an Apple Pay payment resource by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ApplePayPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8jmkgdx63t77xqtwq6j2f27cykrd; // string | ApplePayPayment [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveApplePayPayment($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplePayPaymentsApi->retrieveApplePayPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ApplePayPayment [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\ApplePayPayment**](../Model/ApplePayPayment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
