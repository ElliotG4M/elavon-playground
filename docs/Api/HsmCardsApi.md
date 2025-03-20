# Gear4music\ElavonPlayground\V1\EPG\HsmCardsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createHsmCard()**](HsmCardsApi.md#createHsmCard) | **POST** /hsm-cards | Create HsmCard
[**retrieveHsmCard()**](HsmCardsApi.md#retrieveHsmCard) | **GET** /hsm-cards/{id} | Retrieve HsmCard


## `createHsmCard()`

```php
createHsmCard($hsm_card, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard
```

Create HsmCard

Creates a HsmCard resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\HsmCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hsm_card = new \Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard(); // \Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard | object (HsmCard)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createHsmCard($hsm_card, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmCardsApi->createHsmCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hsm_card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard**](../Model/HsmCard.md)| object (HsmCard) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard**](../Model/HsmCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveHsmCard()`

```php
retrieveHsmCard($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard
```

Retrieve HsmCard

Retrieve an hsm card resource by its resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\HsmCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8Pmhg2rh8c7wytV9vb27X6VT; // string | HsmCard [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveHsmCard($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmCardsApi->retrieveHsmCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| HsmCard [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\HsmCard**](../Model/HsmCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
