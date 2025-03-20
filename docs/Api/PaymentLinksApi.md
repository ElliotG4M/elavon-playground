# Gear4music\ElavonPlayground\V1\EPG\PaymentLinksApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentLink()**](PaymentLinksApi.md#createPaymentLink) | **POST** /payment-links | Create PaymentLink
[**retrievePaymentLink()**](PaymentLinksApi.md#retrievePaymentLink) | **GET** /payment-links/{id} | Retrieve PaymentLink
[**retrievePaymentLinks()**](PaymentLinksApi.md#retrievePaymentLinks) | **GET** /payment-links | Retrieve PaymentLinks
[**retrievePaymentLinksPaymentLinkEvents()**](PaymentLinksApi.md#retrievePaymentLinksPaymentLinkEvents) | **GET** /payment-links/{id}/payment-link-events | Retrieve PaymentLinks PaymentLinkEvents
[**updatePaymentLink()**](PaymentLinksApi.md#updatePaymentLink) | **POST** /payment-links/{id} | Update PaymentLink


## `createPaymentLink()`

```php
createPaymentLink($accept, $accept_version, $content_type, $payment_link_input): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink
```

Create PaymentLink

Create a Payment Link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$payment_link_input = {"description":"Special Sale Offer","total":{"amount":"1.23","currencyCode":"EUR"},"customReference":"Marketing Campaign #1","expiresAt":"2017-02-22T13:11:23.123Z","maximumNumberOfUses":50,"customFields":{"merchantField1":"Merchant Value 1"}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkInput

try {
    $result = $apiInstance->createPaymentLink($accept, $accept_version, $content_type, $payment_link_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->createPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **payment_link_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLinkInput**](../Model/PaymentLinkInput.md)|  | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentLink()`

```php
retrievePaymentLink($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink
```

Retrieve PaymentLink

Retrieve a Payment Link by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wrKK4HcHCXcK3KkXwFRMXVjQ; // string | PaymentLink [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrievePaymentLink($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->retrievePaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PaymentLink [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentLinks()`

```php
retrievePaymentLinks($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPaymentLinks
```

Retrieve PaymentLinks

Get a list of Payment Links.  Supported [Filter](#section/Overview/Collection-Filtering): * account_eq_id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinksApi(
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
    $result = $apiInstance->retrievePaymentLinks($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->retrievePaymentLinks: ', $e->getMessage(), PHP_EOL;
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

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPaymentLinks**](../Model/PagedListOfPaymentLinks.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePaymentLinksPaymentLinkEvents()`

```php
retrievePaymentLinksPaymentLinkEvents($id, $accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPaymentLinkEvents
```

Retrieve PaymentLinks PaymentLinkEvents

Retrieve a list of Payment Link Events associated with a Payment Link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wrKK4HcHCXcK3KkXwFRMXVjQ; // string | PaymentLink [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$page_token = 'page_token_example'; // string | An opaque continuation token for this page, null for the first page.
$limit = 10; // int | Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page.

try {
    $result = $apiInstance->retrievePaymentLinksPaymentLinkEvents($id, $accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->retrievePaymentLinksPaymentLinkEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PaymentLink [Resource ID](#section/Overview/Values). |
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

## `updatePaymentLink()`

```php
updatePaymentLink($id, $accept, $accept_version, $content_type, $payment_link): \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink
```

Update PaymentLink

Overwrite an existing Payment Link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PaymentLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wrKK4HcHCXcK3KkXwFRMXVjQ; // string | PaymentLink [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$payment_link = {"customReference":"Marketing Campaign #2"}; // \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink

try {
    $result = $apiInstance->updatePaymentLink($id, $accept, $accept_version, $content_type, $payment_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentLinksApi->updatePaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| PaymentLink [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **payment_link** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink**](../Model/PaymentLink.md)|  | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
