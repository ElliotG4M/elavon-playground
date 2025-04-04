# Gear4music\ElavonPlayground\V1\EPG\PazePaymentsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPazePayment()**](PazePaymentsApi.md#createPazePayment) | **POST** /paze-payments | Create PazePayment
[**retrievePazePayment()**](PazePaymentsApi.md#retrievePazePayment) | **GET** /paze-payments/{id} | Retrieve PazePayment


## `createPazePayment()`

```php
createPazePayment($accept, $accept_version, $content_type, $paze_payment_input): \Gear4music\ElavonPlayground\V1\EPG\Model\PazePayment
```

Create PazePayment

Create a Paze payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PazePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$paze_payment_input = {"card":{"holderName":"John Doe","billTo":{"fullName":"John Doe","countryCode":"USA","postalCode":"94043","street1":"1600 Amphitheatre Parkway","city":"Mountain View","region":"CA"}},"token":"{\"signature\":\"MEQCIH0nEUW6uEDnxNAeUlxJw7UgtV53jEtFycJG6QEX34u0AiBVm00R1O8oL22RLQ26MPDd7Sn/24m4+5AxzmD8tEctjA\\u003d\\u003d\",\"intermediateSigningKey\":{\"signedKey\":\"{\\\"keyValue\\\":\\\"MFkwEwYHKoZIzj0CAQYIKoZIzj0DAQcDQgAELNIQDI21szog5jsBdgYLhMZEDcvOr59V1XI3vWtDVWgd/dU+yx/y7VZ7UxqKkTgA/o5TikdJn/l4qc8wgR3LYw\\\\u003d\\\\u003d\\\",\\\"keyExpiration\\\":\\\"1673524261966\\\"}\",\"signatures\":[\"MEUCIGe/oQ5E1hg5ONxtGQR+E4IoMgHaazatEOszlMTOwyI5AiEAos7ETQoM46nsGCfNqEBUPE23voAKIIefJ6Sg870trts\\u003d\"]},\"protocolVersion\":\"ECv2\",\"signedMessage\":\"{\\\"encryptedMessage\\\":\\\"K8CTFde4vVSL+1ttpVxIciqQj94+ji/fu7l1tkR9dOElg65FU2lfEcFLDD374BVdZlZwgQLZOt8MOHc8vQLDKt1YYfTaZfrLfLrD+3Rv10YIsvgF0jXHQ9NmgDYGt06XNhg8E5lcmo+Fpk3d9qCSEXaCN3vk6uSmfsn2ZoMHEqhTpnSB+RKmMbkC8QfQn7gEeS12HKWSCRHGb/NsyFVNPrQYEpuhkZOJMKmS+nZVgtNdfg6hRpWFjg7Os4YwQIiYRJYh2st0zD1fUwDPSX4iJJ9BwFOrj8KMEoHNh5SnTcxeoAuXHm5boFxbVXZXJNPSHh5ZsboNdd2mYYnfr1QzF9Jy/TDhU1vkqRPAKypzPpGjNdgMFKpqpk2nwgrzmtP7sZitRC59qeutLkaI8IPXHUmeMCoAHsPTuk+OWBQI2N/mPM6AVo/ahu/V1G++vdhsfEi5W5KPhq6IW7j9gGh840ur489AjpV1W6ihLsZVIC/rgjPyOqrorwx/U1pJ+Sf0Beeyc5jDTRb/pmlCgy4p8F+Qy1eqw4YmKtP/da4IVtKWvXWe+KRTZqd/s17j5qciknMn83R1M70jCFIAWuM0UDvb6iFO7Qgq1bqZ\\\",\\\"ephemeralPublicKey\\\":\\\"BKgFE3NUYmE4kGiIbv/L6LwlXLLWbT1g9QEKdpzI9qRbGJ3xzYNSmJ2DvHrtTg4K2Wn2l08cZROjc2PwWRYhKCA\\\\u003d\\\",\\\"tag\\\":\\\"FDREH5rjJYvSYTSz7hw3jB3Vm+t3HTiS1thPM78eMaw\\\\u003d\\\"}\"}","payloadId":"afbexyzf-021x-ca50-e22e-1d15abc2ec01","sessionId":"pr9i793q4lwcqnr5123","customReference":"customReference","customFields":{"name1":"value1","name2":"value2"}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\PazePaymentInput | object (PazePayment)

try {
    $result = $apiInstance->createPazePayment($accept, $accept_version, $content_type, $paze_payment_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PazePaymentsApi->createPazePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **paze_payment_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PazePaymentInput**](../Model/PazePaymentInput.md)| object (PazePayment) | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PazePayment**](../Model/PazePayment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePazePayment()`

```php
retrievePazePayment($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\PazePayment
```

Retrieve PazePayment

Retrieve a Paze payment resource by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PazePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = q3rdjp2kfx4rwbgdcvr66wwhcfjw; // string | PazePayment [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrievePazePayment($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PazePaymentsApi->retrievePazePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PazePayment [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PazePayment**](../Model/PazePayment.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
