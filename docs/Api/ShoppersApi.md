# Gear4music\ElavonPlayground\V1\EPG\ShoppersApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createShopper()**](ShoppersApi.md#createShopper) | **POST** /shoppers | Create Shopper |
| [**deleteShopper()**](ShoppersApi.md#deleteShopper) | **DELETE** /shoppers/{id} | Delete Shopper |
| [**retrieveShopper()**](ShoppersApi.md#retrieveShopper) | **GET** /shoppers/{id} | Retrieve Shopper |
| [**retrieveShoppers()**](ShoppersApi.md#retrieveShoppers) | **GET** /shoppers | Retrieve Shoppers |
| [**retrieveShoppersStoredCards()**](ShoppersApi.md#retrieveShoppersStoredCards) | **GET** /shoppers/{id}/stored-cards | Retrieve Shoppers StoredCards |
| [**updateShopper()**](ShoppersApi.md#updateShopper) | **POST** /shoppers/{id} | Update Shopper |


## `createShopper()`

```php
createShopper($shopper, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper
```

Create Shopper

Create a Shopper resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shopper = new \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper(); // \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper | object (Shopper)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createShopper($shopper, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->createShopper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shopper** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Shopper**](../Model/Shopper.md)| object (Shopper) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Shopper**](../Model/Shopper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShopper()`

```php
deleteShopper($id)
```

Delete Shopper

Delete a Shopper.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Shopper [Resource ID](#section/Overview/Values).

try {
    $apiInstance->deleteShopper($id);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->deleteShopper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Shopper [Resource ID](#section/Overview/Values). | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveShopper()`

```php
retrieveShopper($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper
```

Retrieve Shopper

Retrieve a Shopper by resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Shopper [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveShopper($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->retrieveShopper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Shopper [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Shopper**](../Model/Shopper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveShoppers()`

```php
retrieveShoppers($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfShoppers
```

Retrieve Shoppers

Retrieve a list of all shoppers. This resource is filterable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
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
    $result = $apiInstance->retrieveShoppers($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->retrieveShoppers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **page_token** | **string**| An opaque continuation token for this page, null for the first page. | [optional] |
| **limit** | **int**| Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page. | [optional] [default to 10] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfShoppers**](../Model/PagedListOfShoppers.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveShoppersStoredCards()`

```php
retrieveShoppersStoredCards($id, $accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfStoredCards
```

Retrieve Shoppers StoredCards

Retrieve a list of Stored Cards associated with a Shopper.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Shopper [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$page_token = 'page_token_example'; // string | An opaque continuation token for this page, null for the first page.
$limit = 10; // int | Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page.

try {
    $result = $apiInstance->retrieveShoppersStoredCards($id, $accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->retrieveShoppersStoredCards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Shopper [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **page_token** | **string**| An opaque continuation token for this page, null for the first page. | [optional] |
| **limit** | **int**| Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page. | [optional] [default to 10] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfStoredCards**](../Model/PagedListOfStoredCards.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateShopper()`

```php
updateShopper($id, $accept, $accept_version, $content_type, $shopper): \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper
```

Update Shopper

Overwrite an existing Shopper resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\ShoppersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Shopper [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$shopper = new \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper(); // \Gear4music\ElavonPlayground\V1\EPG\Model\Shopper | object (Shopper)

try {
    $result = $apiInstance->updateShopper($id, $accept, $accept_version, $content_type, $shopper);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShoppersApi->updateShopper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Shopper [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **shopper** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Shopper**](../Model/Shopper.md)| object (Shopper) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Shopper**](../Model/Shopper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
