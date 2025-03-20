# Gear4music\ElavonPlayground\V1\EPG\PaymentLinkEventsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentLinkEvent()**](PaymentLinkEventsApi.md#createPaymentLinkEvent) | **POST** /payment-link-events | Create PaymentLinkEvent
[**retrievePaymentLinkEvent()**](PaymentLinkEventsApi.md#retrievePaymentLinkEvent) | **GET** /payment-link-events/{id} | Retrieve PaymentLinkEvent
[**retrievePaymentLinkEvents()**](PaymentLinkEventsApi.md#retrievePaymentLinkEvents) | **GET** /payment-link-events | Retrieve PaymentLinkEvents


## `createPaymentLinkEvent()`

```php
createPaymentLinkEvent($accept, $accept_version, $content_type, $payment_link_event_input): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEvent
```

Create PaymentLinkEvent

Create a Payment Link Event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinkEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$payment_link_event_input = {"paymentLink":"https://uat.api.converge.eu.elavonaws.com/payment-links/xhvm3qm4yxh8h9tbdj9fm3ycgpdp","type":"reminderSent","shopperEmailAddress":"john.doe@email.com"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEventInput

try {
    $result = $apiInstance->createPaymentLinkEvent($accept, $accept_version, $content_type, $payment_link_event_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinkEventsApi->createPaymentLinkEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **payment_link_event_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEventInput**](../Model/PaymentLinkEventInput.md)|  | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEvent**](../Model/PaymentLinkEvent.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentLinkEvent()`

```php
retrievePaymentLinkEvent($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEvent
```

Retrieve PaymentLinkEvent

Retrieve a Payment Link Event by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinkEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = dhpymb8bc6q76mhdfq6ddbw3kbdh; // string | PaymentLinkEvent [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrievePaymentLinkEvent($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinkEventsApi->retrievePaymentLinkEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PaymentLinkEvent [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkEvent**](../Model/PaymentLinkEvent.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentLinkEvents()`

```php
retrievePaymentLinkEvents($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPaymentLinkEvents
```

Retrieve PaymentLinkEvents

Get a list of Payment Link Events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinkEventsApi(
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
    $result = $apiInstance->retrievePaymentLinkEvents($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinkEventsApi->retrievePaymentLinkEvents: ', $e->getMessage(), PHP_EOL;
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

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPaymentLinkEvents**](../Model/PagedListOfPaymentLinkEvents.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
