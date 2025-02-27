# Gear4music\ElavonPlayground\V1\PMG\TransactionRefundEndpointApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRefundStatus()**](TransactionRefundEndpointApi.md#getRefundStatus) | **GET** /api/v1/tx/refundstatus |  |
| [**refund()**](TransactionRefundEndpointApi.md#refund) | **POST** /api/v1/tx/refund |  |


## `getRefundStatus()`

```php
getRefundStatus($merchant_id, $request, $refund_id, $merchant_refund_id): \Gear4music\ElavonPlayground\V1\PMG\Model\GetRefundStatusResponse
```



Acquire refund status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Gear4music\ElavonPlayground\V1\PMG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\PMG\Api\TransactionRefundEndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant Id
$request = new \Gear4music\ElavonPlayground\V1\PMG\Model\\Gear4music\ElavonPlayground\V1\PMG\Model\GetRefundStatusRequest(); // \Gear4music\ElavonPlayground\V1\PMG\Model\GetRefundStatusRequest | Request object with required information.
$refund_id = 'refund_id_example'; // string | Refund ID, provided by PMG
$merchant_refund_id = 'merchant_refund_id_example'; // string | Merchant refund id

try {
    $result = $apiInstance->getRefundStatus($merchant_id, $request, $refund_id, $merchant_refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundEndpointApi->getRefundStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchant_id** | **string**| Merchant Id | |
| **request** | [**\Gear4music\ElavonPlayground\V1\PMG\Model\GetRefundStatusRequest**](../Model/.md)| Request object with required information. | |
| **refund_id** | **string**| Refund ID, provided by PMG | [optional] |
| **merchant_refund_id** | **string**| Merchant refund id | [optional] |

### Return type

[**\Gear4music\ElavonPlayground\V1\PMG\Model\GetRefundStatusResponse**](../Model/GetRefundStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($refund_request): \Gear4music\ElavonPlayground\V1\PMG\Model\RefundResponse
```



Refund transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Gear4music\ElavonPlayground\V1\PMG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\PMG\Api\TransactionRefundEndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_request = new \Gear4music\ElavonPlayground\V1\PMG\Model\RefundRequest(); // \Gear4music\ElavonPlayground\V1\PMG\Model\RefundRequest

try {
    $result = $apiInstance->refund($refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionRefundEndpointApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refund_request** | [**\Gear4music\ElavonPlayground\V1\PMG\Model\RefundRequest**](../Model/RefundRequest.md)|  | |

### Return type

[**\Gear4music\ElavonPlayground\V1\PMG\Model\RefundResponse**](../Model/RefundResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
