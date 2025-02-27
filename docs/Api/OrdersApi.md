# Gear4music\ElavonPlayground\V1\EPG\OrdersApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /orders | Create Order |
| [**retrieveOrder()**](OrdersApi.md#retrieveOrder) | **GET** /orders/{id} | Retrieve Order |
| [**retrieveOrders()**](OrdersApi.md#retrieveOrders) | **GET** /orders | Retrieve Orders |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **POST** /orders/{id} | Update Order |


## `createOrder()`

```php
createOrder($accept, $accept_version, $content_type, $order_input): \Gear4music\ElavonPlayground\V1\EPG\Model\Order
```

Create Order

Creates an order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$order_input = {"total":{"amount":"3.23","currencyCode":"EUR"},"description":"parts","items":[{"total":{"amount":"1.00","currencyCode":"EUR"},"description":"widget"},{"total":{"amount":"2.00","currencyCode":"EUR"},"unitPrice":{"amount":"1.00","currencyCode":"EUR"},"quantity":2,"description":"cogs","type":"goods"},{"total":{"amount":".23","currencyCode":"EUR"},"description":"tax","type":"tax"}]}; // \Gear4music\ElavonPlayground\V1\EPG\Model\OrderInput | object (Order)

try {
    $result = $apiInstance->createOrder($accept, $accept_version, $content_type, $order_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **order_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\OrderInput**](../Model/OrderInput.md)| object (Order) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOrder()`

```php
retrieveOrder($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Order
```

Retrieve Order

Get an Order by resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = p7hxrvrpgfc68w6gm7q3b47y; // string | Order [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveOrder($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->retrieveOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Order [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOrders()`

```php
retrieveOrders($page_token, $limit, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfOrders
```

Retrieve Orders

Retrieves all Orders. This resource is filterable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_token = 'page_token_example'; // string | An opaque continuation token for this page, null for the first page.
$limit = 10; // int | Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page.
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveOrders($page_token, $limit, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->retrieveOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_token** | **string**| An opaque continuation token for this page, null for the first page. | [optional] |
| **limit** | **int**| Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page. | [optional] [default to 10] |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfOrders**](../Model/PagedListOfOrders.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($id, $accept, $accept_version, $content_type, $order): \Gear4music\ElavonPlayground\V1\EPG\Model\Order
```

Update Order

Overwrite an existing Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = p7hxrvrpgfc68w6gm7q3b47y; // string | Order [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$order = new \Gear4music\ElavonPlayground\V1\EPG\Model\Order(); // \Gear4music\ElavonPlayground\V1\EPG\Model\Order | object (Order)

try {
    $result = $apiInstance->updateOrder($id, $accept, $accept_version, $content_type, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Order [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **order** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Order**](../Model/Order.md)| object (Order) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Order**](../Model/Order.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
