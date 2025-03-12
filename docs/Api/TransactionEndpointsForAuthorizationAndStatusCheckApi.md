# Gear4music\ElavonPlayground\V1\PMG\TransactionEndpointsForAuthorizationAndStatusCheckApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionStatus()**](TransactionEndpointsForAuthorizationAndStatusCheckApi.md#getTransactionStatus) | **GET** /api/v1/tx/authstatus | 


## `getTransactionStatus()`

```php
getTransactionStatus($merchant_id, $request, $tx_id, $merchant_tx_id): \Gear4music\ElavonPlayground\V1\PMG\Model\GetTransactionStatusResponse
```



Transactions status check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Gear4music\ElavonPlayground\V1\PMG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\PMG\Api\TransactionEndpointsForAuthorizationAndStatusCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_id = 'merchant_id_example'; // string | Merchant Id
$request = new \Gear4music\ElavonPlayground\V1\PMG\Model\\Gear4music\ElavonPlayground\V1\PMG\Model\GetTransactionStatusRequest(); // \Gear4music\ElavonPlayground\V1\PMG\Model\GetTransactionStatusRequest | Request object with required information.
$tx_id = 'tx_id_example'; // string | Transaction ID, provided by PMG
$merchant_tx_id = 'merchant_tx_id_example'; // string | Merchant transaction id

try {
    $result = $apiInstance->getTransactionStatus($merchant_id, $request, $tx_id, $merchant_tx_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionEndpointsForAuthorizationAndStatusCheckApi->getTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| Merchant Id |
 **request** | [**\Gear4music\ElavonPlayground\V1\PMG\Model\GetTransactionStatusRequest**](../Model/.md)| Request object with required information. |
 **tx_id** | **string**| Transaction ID, provided by PMG | [optional]
 **merchant_tx_id** | **string**| Merchant transaction id | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\PMG\Model\GetTransactionStatusResponse**](../Model/GetTransactionStatusResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
