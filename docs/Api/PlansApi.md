# Gear4music\ElavonPlayground\V1\EPG\PlansApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create Plan |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /plans/{id} | Delete Plan |
| [**retrievePlan()**](PlansApi.md#retrievePlan) | **GET** /plans/{id} | Retrieve Plan |
| [**retrievePlans()**](PlansApi.md#retrievePlans) | **GET** /plans | Retrieve Plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **POST** /plans/{id} | Update Plan |


## `createPlan()`

```php
createPlan($plan_input, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\Plan
```

Create Plan

Creates a Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_input = new \Gear4music\ElavonPlayground\V1\EPG\Model\PlanInput(); // \Gear4music\ElavonPlayground\V1\EPG\Model\PlanInput | object (Plan)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createPlan($plan_input, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PlanInput**](../Model/PlanInput.md)| object (Plan) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Plan**](../Model/Plan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePlan()`

```php
deletePlan($id)
```

Delete Plan

Delete a Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Plan [Resource ID](#section/Overview/Values)

try {
    $apiInstance->deletePlan($id);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Plan [Resource ID](#section/Overview/Values) | |

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

## `retrievePlan()`

```php
retrievePlan($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Plan
```

Retrieve Plan

Retrieve a Plan by resource ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Plan [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrievePlan($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->retrievePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Plan [Resource ID](#section/Overview/Values) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Plan**](../Model/Plan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrievePlans()`

```php
retrievePlans($accept, $accept_version, $page_token, $limit): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPlans
```

Retrieve Plans

Retrieve all Plans. This resource is filterable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PlansApi(
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
    $result = $apiInstance->retrievePlans($accept, $accept_version, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->retrievePlans: ', $e->getMessage(), PHP_EOL;
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

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfPlans**](../Model/PagedListOfPlans.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($id, $accept, $accept_version, $content_type, $plan): \Gear4music\ElavonPlayground\V1\EPG\Model\Plan
```

Update Plan

Overwrite an existing Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 6xxFwvM8BqmM6T6DcF3DyTB3; // string | Plan [Resource ID](#section/Overview/Values)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$plan = new \Gear4music\ElavonPlayground\V1\EPG\Model\Plan(); // \Gear4music\ElavonPlayground\V1\EPG\Model\Plan | object (Plan)

try {
    $result = $apiInstance->updatePlan($id, $accept, $accept_version, $content_type, $plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Plan [Resource ID](#section/Overview/Values) | |
| **accept** | **string**| Media types the client will accept. | [optional] |
| **accept_version** | **int**| API version requested by client. | [optional] |
| **content_type** | **string**| Media type of the request body. | [optional] |
| **plan** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Plan**](../Model/Plan.md)| object (Plan) | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Plan**](../Model/Plan.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
