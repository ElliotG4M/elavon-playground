# # AuthorizationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** | Any Random String/Number generated by the caller. Used for tracing purposes. |
**merchant_id** | **string** | Merchant ID. |
**merchant_tx_id** | **string** | Client&#39;s Transaction identifier (Generated by Ecommerce or Terminal). |
**payment_method** | **string** | Required payment method to be used for this transaction. |
**currency_code** | **string** | 3 letter ISO currency code of the transaction. |
**country_code** | **string** | 2 letter ISO country code. Merchant location. |
**amount** | **string** | The amount to wire in currency&#39;s smallest re-presentable unit (e.g cents). |
**shopper_name** | **string** | Shopper name. |
**shopper_type** | **string** | Shopper type. |
**language_code** | **string** | Language identifier of the end user. 2 letter ISO code. |
**description** | **string** | Description of transaction. | [optional]
**redirect_url** | **string** | URL the merchant to be redirected after the transaction success/abort/failure. | [optional]
**system_id** | **string** | Terminal ID when payment is originated from terminal. System id when payment originated from ecommerce. |
**payload** | **array<string,object>** | Reserved map for addition information to be passed. In general to be used to transfer payment method specific data. | [optional]
**push_status_url** | **string** | Reserved for addition information to be passed. In general to be used to transfer payment method specific data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
