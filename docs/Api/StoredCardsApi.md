# Gear4music\ElavonPlayground\V1\EPG\StoredCardsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStoredCard()**](StoredCardsApi.md#createStoredCard) | **POST** /stored-cards | Create StoredCard
[**deleteStoredCard()**](StoredCardsApi.md#deleteStoredCard) | **DELETE** /stored-cards/{id} | Delete StoredCard
[**retrieveStoredCard()**](StoredCardsApi.md#retrieveStoredCard) | **GET** /stored-cards/{id} | Retrieve StoredCard
[**updateStoredCard()**](StoredCardsApi.md#updateStoredCard) | **POST** /stored-cards/{id} | Update StoredCard


## `createStoredCard()`

```php
createStoredCard($stored_card_input, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard
```

Create StoredCard

Create a Stored Card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\StoredCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stored_card_input = new \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCardInput(); // \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCardInput | object (StoredCard)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createStoredCard($stored_card_input, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredCardsApi->createStoredCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stored_card_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCardInput**](../Model/StoredCardInput.md)| object (StoredCard) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard**](../Model/StoredCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStoredCard()`

```php
deleteStoredCard($id)
```

Delete StoredCard

Delete a stored card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\StoredCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | StoredCard [Resource ID](#section/Overview/Values)

try {
    $apiInstance->deleteStoredCard($id);
} catch (Exception $e) {
    echo 'Exception when calling StoredCardsApi->deleteStoredCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| StoredCard [Resource ID](#section/Overview/Values) |

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

## `retrieveStoredCard()`

```php
retrieveStoredCard($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard
```

Retrieve StoredCard

Retrieve a stored card by resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\StoredCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | StoredCard [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveStoredCard($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredCardsApi->retrieveStoredCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| StoredCard [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard**](../Model/StoredCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStoredCard()`

```php
updateStoredCard($id, $accept, $accept_version, $content_type, $stored_card): \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard
```

Update StoredCard

Overwrite an existing stored card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\StoredCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | StoredCard [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$stored_card = new \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard(); // \Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard | object (StoredCard)

try {
    $result = $apiInstance->updateStoredCard($id, $accept, $accept_version, $content_type, $stored_card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoredCardsApi->updateStoredCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| StoredCard [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **stored_card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard**](../Model/StoredCard.md)| object (StoredCard) | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\StoredCard**](../Model/StoredCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
