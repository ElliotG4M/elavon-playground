# # SaleTransactionAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | [**Source**](Source.md) |  | [optional]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional]
**account** | **string** | Account [Resource URL](#section/Overview/Values). Defaults to merchant. | [optional]
**total** | [**PositiveAmountAndCurrency**](PositiveAmountAndCurrency.md) | Transaction total | [optional]
**sales_tax** | [**NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional]
**forex_advice** | **string** | ForexAdvice [Resource URL](#section/Overview/Values) obtained through the Create ForexAdvice API call, not returned. | [optional]
**surcharge_advice** | **string** | Surcharge Advice [Resource URL](#section/Overview/Values) obtained through the create surchargeAdvice API call. | [optional]
**description** | **string** | Description, which appears on the dashboard and might appear on receipts | [optional]
**shopper_statement** | [**ShopperStatement**](ShopperStatement.md) | Dynamic overrides of what might appear on a shopper&#39;s statement | [optional]
**debtor_account** | [**DebtorAccount**](DebtorAccount.md) | Account information required for MCC 6012/6050/6051 merchants | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**shopper_reference** | **string** | Optional reference provided by the shopper, such as a purchase order | [optional]
**order_reference** | **string** | Optional order reference which we&#39;ll display in the merchant dashboard. We&#39;ll automatically copy this from a &#39;sale&#39; | [optional]
**shopper_interaction** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction**](ShopperInteraction.md) |  | [optional]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values)  Shopper, if applicable. | [optional]
**ship_to** | [**Contact**](Contact.md) | Shipping contact details | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address, useful for fraud detection and to provide a receipt | [optional]
**shopper_ip_address** | **string** | Shopper&#39;s IP address, useful for fraud detection | [optional]
**shopper_language_tag** | **string** | Shopper&#39;s IETF language tag, useful for localising the receipt. | [optional]
**shopper_time_zone** | **string** | Shopper&#39;s time zone, specified by the IANA Time Zone Database name. | [optional]
**order** | **string** | Order [Resource URL](#section/Overview/Values) | [optional]
**credential_on_file_type** | [**CredentialOnFileType**](CredentialOnFileType.md) |  | [optional]
**credential_on_file_data** | **string** | Value returned when creating an initial transaction for an integrator-managed card. This should be saved and set for succeeding transactions with the same integrator-managed card. | [optional]
**card** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Card**](Card.md) |  | [optional]
**hosted_card** | **string** | HostedCard [Resource URL](#section/Overview/Values) obtained through the Create HostedCard API call, not returned. Required for &#39;ecommerce&#39; &#39;sale&#39; transactions. | [optional]
**stored_card** | **string** | StoredCard [Resource URL](#section/Overview/Values) | [optional]
**blik** | [**Blik**](Blik.md) |  | [optional]
**payment_link** | **string** | PaymentLink [Resource URL](#section/Overview/Values) | [optional]
**payment_session** | **string** | PaymentSession [Resource URL](#section/Overview/Values) | [optional]
**three_d_secure** | [**ThreeDSecureV2**](ThreeDSecureV2.md) | Additional data that&#39;s only needed for 3-D Secure version 2 processing. | [optional]
**created_by** | **string** | Who or what created the transaction? When created in Elavon&#39;s virtual terminal, this will be the email address of the currently logged in user. When created otherwise, the integrator may optionally provide any value that helps answer this question. | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values. Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]
**do_capture** | **bool** | If false, authorize only; if true (default), authorize and capture funds for settlement | [optional]
**do_send_receipt** | **bool** | Send receipt to shopper&#39;s email address, default is false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
