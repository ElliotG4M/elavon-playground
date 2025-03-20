# Gear4music\ElavonPlayground\V1\EPG\NotificationsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveNotification()**](NotificationsApi.md#retrieveNotification) | **GET** /notifications/{id} | Retrieve Notification
[**retrieveNotifications()**](NotificationsApi.md#retrieveNotifications) | **GET** /notifications | Retrieve Notifications


## `retrieveNotification()`

```php
retrieveNotification($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Notification
```

Retrieve Notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = wrKK4HcHCXcK3KkXwFRMXVjQ; // string | Notification [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveNotification($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->retrieveNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Notification [Resource ID](#section/Overview/Values) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Notification**](../Model/Notification.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveNotifications()`

```php
retrieveNotifications($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfNotifications
```

Retrieve Notifications

Get a list of Notifications.  Supported [Filter](#section/Overview/Collection-Filtering): * createdAt_ge|gt|le|lt_timestamp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\NotificationsApi(
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
    $result = $apiInstance->retrieveNotifications($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->retrieveNotifications: ', $e->getMessage(), PHP_EOL;
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

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfNotifications**](../Model/PagedListOfNotifications.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
