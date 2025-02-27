# Gear4music\ElavonPlayground\V1\EPG\HostedCardsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createHostedCard()**](HostedCardsApi.md#createHostedCard) | **POST** /hosted-cards | Create HostedCard |
| [**retrieveHostedCard()**](HostedCardsApi.md#retrieveHostedCard) | **GET** /hosted-cards/{id} | Retrieve HostedCard |
| [**updateHostedCard()**](HostedCardsApi.md#updateHostedCard) | **POST** /hosted-cards/{id} | Update HostedCard |


## `createHostedCard()`

```php
createHostedCard($hosted_card_input, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard
```

Create HostedCard

Creates a HostedCard resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\HostedCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hosted_card_input = {"card":{"holderName":"Erlich Bachman","number":"XXXXXXXXXXXX0007","expirationMonth":1,"expirationYear":2020,"securityCode":"321","billTo":{"fullName":"Full Name","company":"Company","street1":"2 Concourse Parkway","street2":"Suite A","city":"Atlanta","region":"GA","postalCode":"30328","countryCode":"USA","primaryPhone":"+1 678-731-5000","alternatePhone":"+1 678-731-5001","fax":"+1 678-731-5002","email":"noreply@elavon.com"}}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\HostedCardInput | object (HostedCard)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createHostedCard($hosted_card_input, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedCardsApi->createHostedCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hosted_card_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\HostedCardInput**](../Model/HostedCardInput.md)| object (HostedCard) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard**](../Model/HostedCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveHostedCard()`

```php
retrieveHostedCard($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard
```

Retrieve HostedCard

Retrieve a hosted card resource by its resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\HostedCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8Pmhg2rh8c7wytV9vb27X6VT; // string | HostedCard [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveHostedCard($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedCardsApi->retrieveHostedCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| HostedCard [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard**](../Model/HostedCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHostedCard()`

```php
updateHostedCard($id, $accept, $accept_version, $content_type, $hosted_card): \Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard
```

Update HostedCard

Overwrite the details of an existing hosted card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\HostedCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8Pmhg2rh8c7wytV9vb27X6VT; // string | HostedCard [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$hosted_card = {"card":{"holderName":"Erlich Bachman","billTo":{"fullName":"Erlich Bachman","company":"Company","street1":"123 Main Street","street2":null,"city":"Marietta","region":"GA","postalCode":"30066"}}}; // \Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard | object (HostedCard)

try {
    $result = $apiInstance->updateHostedCard($id, $accept, $accept_version, $content_type, $hosted_card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedCardsApi->updateHostedCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| HostedCard [Resource ID](#section/Overview/Values). | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **hosted_card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard**](../Model/HostedCard.md)| object (HostedCard) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\HostedCard**](../Model/HostedCard.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
