# Gear4music\ElavonPlayground\V1\EPG\TransactionsApi

All URIs are relative to https://uat.api.converge.eu.elavonaws.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmailReceiptRequest()**](TransactionsApi.md#createEmailReceiptRequest) | **POST** /transactions/{id}/email-receipt-requests | Create email receipt request
[**createTransaction()**](TransactionsApi.md#createTransaction) | **POST** /transactions | Create Transaction
[**retrieveTransaction()**](TransactionsApi.md#retrieveTransaction) | **GET** /transactions/{id} | Retrieve Transaction
[**retrieveTransactions()**](TransactionsApi.md#retrieveTransactions) | **GET** /transactions | Retrieve Transactions
[**updateTransaction()**](TransactionsApi.md#updateTransaction) | **POST** /transactions/{id} | Update Transaction


## `createEmailReceiptRequest()`

```php
createEmailReceiptRequest($email_receipt_request, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\EmailReceiptRequest
```

Create email receipt request

Create email receipt request for Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_receipt_request = new \Gear4music\ElavonPlayground\V1\EPG\Model\EmailReceiptRequest(); // \Gear4music\ElavonPlayground\V1\EPG\Model\EmailReceiptRequest | object (Transaction)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createEmailReceiptRequest($email_receipt_request, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createEmailReceiptRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_receipt_request** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\EmailReceiptRequest**](../Model/EmailReceiptRequest.md)| object (Transaction) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\EmailReceiptRequest**](../Model/EmailReceiptRequest.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTransaction()`

```php
createTransaction($transaction_input, $accept, $accept_version, $content_type): \Gear4music\ElavonPlayground\V1\EPG\Model\Transaction
```

Create Transaction

Create a Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_input = {"total":[{"amount":"45.23","currencyCode":"EUR"},{"card":{"holderName":"John Smith","number":"xxxx xxxx xxxx 0007","expirationMonth":"1","expirationYear":"2010"},"shopperInteraction":"telephoneOrder"}]}; // \Gear4music\ElavonPlayground\V1\EPG\Model\TransactionInput | object (Transaction)
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.

try {
    $result = $apiInstance->createTransaction($transaction_input, $accept, $accept_version, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_input** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\TransactionInput**](../Model/TransactionInput.md)| object (Transaction) |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Transaction**](../Model/Transaction.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveTransaction()`

```php
retrieveTransaction($id, $accept, $accept_version): \Gear4music\ElavonPlayground\V1\EPG\Model\Transaction
```

Retrieve Transaction

Retrieve a Transaction by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = c2fkpt276g6rf6pwmfxmbyjf; // string | Transaction [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.

try {
    $result = $apiInstance->retrieveTransaction($id, $accept, $accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->retrieveTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Transaction**](../Model/Transaction.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveTransactions()`

```php
retrieveTransactions($accept, $accept_version, $limit, $page_token, $query_params): \Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfTransactions
```

Retrieve Transactions

Retrieve all Transactions.  Supported [Filters](#section/Overview/Collection-Filtering): * shopper_eq_id * subscription_eq_id * account_eq_id * isHeldForReview_eq_boolean * batch_eq_id * createdAt_ge|gt|le|lt_timestamp * type_ne|eq_string * orderReference_eq_string * paymentLink_eq_id * customReference_eq_string * card.last4_eq_string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$limit = 10; // int | Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page.
$page_token = 'page_token_example'; // string | An opaque continuation token for this page, null for the first page.
$query_params = array('query_params_example'); // string[] | Query parameters used to filter the returned results.

try {
    $result = $apiInstance->retrieveTransactions($accept, $accept_version, $limit, $page_token, $query_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->retrieveTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **limit** | **int**| Maximum number of items to return on this page. Elavon Payment Gateway can return a maximum of 200 items per page. | [optional] [default to 10]
 **page_token** | **string**| An opaque continuation token for this page, null for the first page. | [optional]
 **query_params** | [**string[]**](../Model/string.md)| Query parameters used to filter the returned results. | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\PagedListOfTransactions**](../Model/PagedListOfTransactions.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($id, $accept, $accept_version, $content_type, $transaction): \Gear4music\ElavonPlayground\V1\EPG\Model\Transaction
```

Update Transaction

Overwrite an existing Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = Gear4music\ElavonPlayground\V1\EPG\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Gear4music\ElavonPlayground\V1\EPG\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = c2fkpt276g6rf6pwmfxmbyjf; // string | Transaction [Resource ID](#section/Overview/Values).
$accept = application/json;charset=UTF-8; // string | Media types the client will accept.
$accept_version = 1; // int | API version requested by client.
$content_type = application/json;charset=UTF-8; // string | Media type of the request body.
$transaction = {"doCapture":true}; // \Gear4music\ElavonPlayground\V1\EPG\Model\Transaction | object (Transaction)

try {
    $result = $apiInstance->updateTransaction($id, $accept, $accept_version, $content_type, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction [Resource ID](#section/Overview/Values). |
 **accept** | **string**| Media types the client will accept. | [optional]
 **accept_version** | **int**| API version requested by client. | [optional]
 **content_type** | **string**| Media type of the request body. | [optional]
 **transaction** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Transaction**](../Model/Transaction.md)| object (Transaction) | [optional]

### Return type

[**\Gear4music\ElavonPlayground\V1\EPG\Model\Transaction**](../Model/Transaction.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
