<?php
/**
 * ProcessorAccount
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elavon Payment Gateway API
 *
 * Elavon Payment Gateway helpdesk [https://developer.elavon.com/products/elavon-payment-gateway/v1/](https://developer.elavon.com/products/elavon-payment-gateway/v1/overview#support) # Overview  This HTTP REST API is available for developers integrating with Elavon Payment Gateway for eCommerce.  The Elavon Payment Gateway API follows standard HTTP authentication and response codes and you can use it with most HTTP clients.  The Elavon Payment Gateway API tries to be precise with its responses but lenient with its requests. Elavon Payment Gateway defaults to case insensitivity where case is irrelevant and will use coercion to try resolving unexpected types.  The system only accepts JSON request bodies and returns UTF-8 encoded JSON response bodies pretty-printed for readability and with most fields included for discoverability.  The system supports HATEOAS and provides references between resources as hypermedia links. If needed, the system can accept resource IDs in requests instead.  We take security seriously. Communication with Elavon Payment Gateway must be over secure HTTP using at least TLS 1.2. Elavon Payment Gateway suppresses sensitive fields on responses.  PCI compliance is vital, and Elavon Payment Gateway provides options that allow integrators to reduce their own PCI scope.  ## Example Code  The Elavon Payment Gateway API Reference uses REST API over HTTP. To receive example code, contact the [EPG helpdesk](https://developer.elavon.com/products/elavon-payment-gateway/v1overview#support) for further assistance.  Examples are available for the following:  * C# * Java * Node.js * PHP * Python * Ruby * VB Webforms  ## Credentials  To get a user ID and password, integrators must send a primary email. Elavon sends an email that contains a link to the merchant UI as well as instructions on how to establish a password.  At the moment, Elavon onboards integrators into the Elavon Payment Gateway system manually, but the team is working on making this a more automated process in a future release.  ## Authentication  Elavon Payment Gateway's API authenticates using the HTTP BASIC method over secure HTTP using at least Transport Layer Security (TLS) 1.2.  Integrators receive a pair of API keys: one public and one secret. Elavon manages and provides API keys - future updates will add self-management as an option.  It's safe to include your public key in client-side code. Only [hosted card](#tag/Hosted-Cards) resource operations authenticate using the public API key. Note that some fields will be suppressed when using a public API key. Check the [hosted card resource](#tag/Hosted-Cards) for details. Their format, when used in actual scenarios, start with 'pk_'. Example:  ``` pk_Yp6XYXCwkYjWFj9ByrhbDQD3 ```  Never expose your secret key in client-side code. Only include your secret key in requests sent from a secure server. The API accepts the secret key for all requests. Their format, when used in actual scenarios, start with 'sk_'. Example:  ``` sk_GWhvCdXCx6FWYhDqCRWVwtRk ```  Elavon provides integrators with a unique merchant alias for each merchant they're acting on behalf of.  ## Errors  Error responses generally have a standard JSON response. A failures array provides more information to help the integrator diagnose the issue.  4xx status codes show a problem with the request. Avoid retrying the request before addressing the problem. The following table shows some common failure codes and the causes that prompts them.  | Failure Code         | Status Code | Failure Description | |----------------------|-------------|---------------------| | badRequest           | 400         | The request is invalid; correct all issues before resending. | | unauthorized         | 401         | A valid API key is required. | | forbidden            | 403         | Public API keys may only be used to create and retrieve hosted cards. | | notFound             | 404         | The requested resource does not exist. | | methodNotAllowed     | 405         | The given method may not be used here. Note that the X-HTTP-Method-Override header can only be used to override POST with either PATCH or DELETE | | notAcceptable        | 406         | The Accept request header must specify 'application/json;charset=UTF-8'; the Accept-Version request header if present, must reference a valid API version. | | conflict             | 409         | This request does not match the original, or the original request is still processing. | | lengthRequired       | 411         | Content-Length must be specified for this request. | | payloadTooLarge      | 413         | The request payload is too large. | | unsupportedMediaType | 415         | The Content-Type request header must specify 'application/json'| | tooManyRequests      | 429         | Too many requests have been received too quickly for this API key. |  5xx status codes show an unexpected server problem. Elavon Payment Gateway may be unable to return a standard error response for these.  ## Versioning  The current version is \"1\" and future versions will always be integral numbers. The client should specify which version they want using an \"Accept-Version\" request header. If not specified, Elavon Payment Gateway will assume the current version, but the response will include a \"Warning\" response header. The response will always include a \"Version\" header to show the version used. Example:  ``` Accept-Version: 1 ```  Elavon will avoid releasing versions with breaking changes. We will release some backwards compatible fixes without revising the version. If you are integrating with Elavon Payment Gateway, keep an eye out for some of the following changes:  * New resources * New optional request query parameters and/or headers * New optional fields (Elavon may generate these randomly to ensure compliance) * Field order changes (while generally consistent, you should consider the order undefined) * New values for enumerated fields * New HTTP error codes * Changes to the format of IDs  ## Pagination  When listing resources, the API returns a standard PagedList. This resource includes links to the first and next pages in the list. If next page is null, then there are no more items. The default number of items for a page may vary by resource. To override the default, use the \"limit\" query parameter. By default, the limit is 10. The maximum limit for a pagination object is 200 entries. The \"items\" array contains the resources for the page.  See the example in Collection Filtering, where the filter \"limit=2\" indicates a limit of 2.  ## Collection Filtering  Certain resources have the option to apply filters. To specify a filter, provide one or more query parameters where the name starts with \"filter\" and the value is \"fieldName_operator_value\". Check the [operations](#section/Overview/Operations) to see which fields support filtering and what operators each field supports. When using more than one filter, the resource must match every one of them.  Possible operators include: * eq (equals) * ne (not equals) * gt (greater than) * ge (greater than or equal) * lt (less than) * le (less than or equal)  When filtering a field of type \"URL resource\", the value should be an ID (e.g. 6xxFwvM8BqmM6T6DcF3DyTB3).  When filtering a field of type \"timestamp string\", format the value as an [RFC3339 Date/Time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14) in the UTC time zone. The date/time separators, time section, seconds, milliseconds and Zulu time zone designator are all optional.  Example:  ```sh curl -X GET \\   \"https://api.eu.convergepay.com/transactions?filter=type_eq_refund&filter=createdAt_gt_2020&limit=2\" \\   -u 963myjmWbtt2DQgVpGyxcdW9:sk_GWhvCdXCx6FWYhDqCRWVwtRk \\   -H 'Accept-Version: 4' \\ ```  The previous example lists transactions via GET {endpoint}/transactions to retrieve all transactions created after the start of 2020.  The following sections support filters:  * [Retrieve Payment Links](#operation/RetrievePaymentLinks) * [Retrieve Payment Session](#operation/RetrievePaymentSession) * [Retrieve Transactions](#operation/RetrieveTransactions) * [Retrieve Notifications](#operation/RetrieveNotifications)  ## Values  **Resource ID**  <!-- Is this really necessary? Any updates to resource ID's like this should probably result in a version update and list the changes in the change log. -->  A unique string assigned as an identifier to individual resources. Each resource ID omits vowels to avoid confusing characters (O vs 0, for example). Treat Resource IDs as opaque strings with a 256 character limit when storing them.  **Resource URL**  A URL to an endpoint that will respond with the contents of an individual resource instance. Under each resource, a dropdown menu displays the available endpoints.  **Timestamps**  Timestamps use [RFC3339 Date/Time](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14) format with the UTC time zone (e.g. \"2018-02-01T05:10:20.152Z\").  **Currency**  Elavon Payment Gateway represents currency amounts as strings using the natural or base units of the currency. A period is the decimal separator when the value needs one (e.g. 99,95€ would be \"99.95\").  ## Custom Reference / Custom Fields  Some resources accept integrator defined arbitrary custom fields. Elavon Payment Gateway does not use these fields for any operations; The API stores these fields with the associated resource and returns them when you request the resource.  Custom field names and values must not exceed 64 and 1024 characters, respectively.  <!-- Do we need to declare this? If we are going to delete data due to somebody storing too much of this, that needs to be included in EULA or we should preset that limit and provide an error when people go over it -->  <!-- What does this mean? -->  As integrators have their own resources, these should be identified on the integrator side and only optionally provided to Elavon for cross-referencing purposes.  ## Operations  Each resource will have an ID that identifies it within a resource collection.  Elavon Payment Gateway uses commonly accepted HTTP methods to perform standard CRUD operations on resources (where allowed) using consistent resource paths.  | Operation | HTTP Request                      | Successful Status Code | |-----------|-----------------------------------|------------------------| | Create    | POST {resource-collection}        | 201 Created            | | Retrieve  | GET {resource-collection}/{id}    | 200 OK                 | | Retrieve  | GET {resource-collection}         | 200 OK                 | | Update    | POST {resource-collection}/{id}   | 200 OK                 | | Delete    | DELETE {resource-collection}/{id} | 204 No Content         |  Create operations will return the created resource.  ### HTTP Success vs. Transaction Success  Note that when creating and authorizing a transaction, Elavon Payment Gateway returns a 201 to show the transaction request processed, even if the transaction itself was declined. When creating transactions, use the `state` property of the Transaction to check whether Elavon Payment Gateway authorized or declined the transaction. If the transaction declined, the `failures` property provides an array of causes.  ### Deleting Resources  If the DELETE method is not allowed from the client, make a POST request instead with the optional request header \"X-HTTP-Method-Override: DELETE\".  The request for an update operation should only include those fields that have changed. To remove a field set its value to null.  ### CORS  **Only** hosted card operations support Cross-Origin Resource Sharing (CORS) requests from a browser. Initiate all   other operations from a secure server.  | Resources            | Create                                           | Retrieve                                          | Update                                   | List                                   | Delete                   | |----------------------|--------------------------------------------------|---------------------------------------------------|-----------------------|------------------|--------------------------------------| | Merchants            |                                                  | [GET /merchants/{id}](#operation/RetrieveMerchant)|                                          |                                        | | Processor Accounts   |                                                  | [GET /processor-accounts/{id}](#operation/RetrieveProcessorAccount) |                        |                                        | | Terminals            |                                                  | [GET /terminals/{id}](#operation/RetrieveTerminal)<br/>[GET /terminals/{id}/provisioning-codes](#operation/RetrieveProvisioningCode) |                        |[GET /terminals](#operation/RetrieveTerminals)<br/>[GET /terminals/{id}/emv-keys](#operation/RetrieveEmvKeys) |                                        |     | Orders               | [POST /orders](#operation/CreateOrder)           | [GET /orders/{id}](#operation/RetrieveOrder)      | [POST /orders/{id}](#operation/UpdateOrder) | [GET /orders](#operation/RetrieveOrders)| | Payment Links        | [POST /payment-links](#operation/CreatePaymentLink)| [GET /payment-links/{id}](#operation/RetrievePaymentLink)| [POST /payment-links/{id}](#operation/UpdatePaymentLink)| [GET /payment-links](#operation/RetrievePaymentLinks)  | | Payment Link Events  | [POST /payment-link-events](#operation/CreatePaymentLinkEvent)| [GET /payment-link-events/{id}](#operation/RetrievePaymentLinkEvent)|                                       | [GET /payment-link-events](#operation/RetrievePaymentLinkEvents)  | | Payment Sessions     | [POST /payment-sessions](#operation/CreatePaymentSession)| [GET /payment-sessions/{id}](#operation/RetrievePaymentSession)                      |                                        |                                                         | | Apple Pay Payment Sessions | [POST /apple-pay-payment-sessions](#operation/CreateApplePayPaymentSession)|                       |                                        |                                                         | | Hosted Cards         | [POST /hosted-cards](#operation/CreateHostedCard)| [GET /hosted-cards/{id}](#operation/RetrieveHostedCard) | [POST /hosted-cards/{id}](#operation/UpdateHostedCard)|                 | | HsmCard              | [POST /hsm-cards](#operation/CreateHsmCard)| [GET /hsm-cards/{id}](#operation/RetrieveHsmCard) |                                          |                 | | Forex Advices        | [POST /forex-advices](#operation/CreateForexAdvice)| [GET /forex-advices/{id}](#operation/RetrieveForexAdvice)|                            |                                         |                     | | Transactions         | [POST /transactions](#operation/CreateTransaction)<br/>[POST /transactions/{id}/email-receipt-requests](#operation/CreateEmailReceiptRequest) | [GET /transactions/{id}](#operation/RetrieveTransaction)| [POST /transactions/{id}](#operation/UpdateTransaction)| [GET /transactions](#operation/RetrieveTransactions)   | | Apple Pay Payments   | [POST /apple-pay-payments](#operation/CreateApplePayPayment)| [GET /apple-pay-payments/{id}](#operation/RetrieveApplePayPayment)|                                        |                                        | | Google Pay Payments  | [POST /google-pay-payments](#operation/CreateGooglePayPayment)| [GET /google-pay-payments/{id}](#operation/RetrieveGooglePayPayment)|                                        |                                        | | Paze Payments        | [POST /paze-payments](#operation/CreatePazePayPayment)| [GET /paze-payments/{id}](#operation/RetrievePazePayPayment)|                                        |                                        | | Surcharge Advices    | [POST /surcharge-advices](#operation/CreateSurchargeAdvice)| [GET /surcharge-advices/{id}](#operation/RetrieveSurchargeAdvice)|                                        |                                        | | Refund Surcharge Advices  | [POST /refund-surcharge-advices](#operation/CreateRefundSurchargeAdvice)| [GET /refund-surcharge-advices/{id}](#operation/RetrieveRefundSurchargeAdvice)|                                        |                                        | | Batches              |                                                  | [GET /batches/{id}](#operation/RetrieveBatch)     |                                          | [GET /batches](#operation/RetrieveBatches)| | Shoppers             | [POST /shoppers](#operation/CreateShopper)        | [GET /shoppers/{id}](#operation/RetrieveShopper)<br>[GET /shoppers/{id}/storedCard](#operation/RetrieveShoppersStoredCards)| [POST/shoppers/{id}](#operation/UpdateShopper)| [GET /shoppers](#operation/RetrieveShoppers) | [DELETE /shoppers/{id}](#operation/DeleteShopper) | | Stored Cards         | [POST /stored-cards](#operation/CreateStoredCard) | [GET /stored-cards/{id}](#operation/RetrieveStoredCard) | [POST /stored-cards/{id)](#operation/UpdateStoredCard)|            | [DELETE /stored-cards/{id}](#operation/DeleteStoredCard) | Plans                | [POST /plans](#operation/CreatePlan)              | [GET /plans/{id}](#operation/RetrievePlan)       | [POST /plans/{id}](#operation/UpdatePlan)| [GET /plans](#operation/RetrievePlans) | [DELETE /plans/{id}](#operation/DeletePlan) | Subscriptions        | [POST /subscriptions](#operation/CreateSubscription)| [GET /subscriptions/{id}](#operation/RetrieveSubscription)| [POST /subscriptions/{id}](#operation/UpdateSubscription)| [GET /subscriptions](#operation/RetrieveSubscription) | Notifications        |                                                   | [GET /notifications/{id}](#operation/RetrieveNotification) |                                | [GET /notifications](#operation/RetrieveNotifications)|  # Getting Started  To learn more, read other Elavon Payment Gateway documentation: * [Integration Guide](https://developer.elavon.com/products/elavon-payment-gateway/v1/overview) - helps you integrate with Elavon Payment Gateway and understand the API  # Changelog  ## 2024-11-06  * __Resources__    Added the following resources:    - [Paze Payments](#tag/Paze-Payments)   - [Terminals](#tag/Terminals)   - [Hsm Cards](#tag/Hsm-Cards)   - [Email Receipt Request](#tag/Transactions/operation/CreateEmailReceiptRequest)    Updated the following resources:    - [Forex Advices](#tag/Forex-Advices) - New field: hsmCard.   - [Hosted Cards](#tag/Hosted-Cards) - Deprecated: threeDSecureV1.   - [Merchant](#tag/Merchants) - New field: regions.   - [Payment Sessions](#tag/Payment-Sessions) - New fields: pazePayment and doReset.   - [Processor Accounts](#tag/Processor-Accounts) - New fields: marketSegment, region, languageTag, idDccEnabled, isMccEnabled, surcharging, and fieldPolicies.   - [Stored Cards](#tag/Stored-Cards) - New fields:  shopperInteraction and credentialOnFileType.   - [Surcharge Advices](#tag/Forex-Advices) - New field: hsmCard.   - [Transactions](#tag/Forex-Advices) - New fields: processorDirective, terminal, hsmCard, deviceInteraction, pointOfInteraction, signature, partialAuthorization, and pazePayment.  * __Types__    Added the following types:      - DeviceInteraction   - EncryptedData   - Emv   - EmvKey   - EmvKeys   - PinEncryptedData   - PointOfInteraction   - ProcessorAccountFieldPolicies   - ProcessorAccountTransactionFieldPolicies   - ProcessorAccountTransactionPostalOrSecurityCodePolicies   - PartialAuthorization   - ProvisioningCode   - SalesTaxEntry   - Signature    Updated the following type:      - VerificationResults - Deprecated: threeDSecureV1.      Deprecated the following type:      - ThreeDSecureV1  ## 2024-05-22  * __Resources__    Added the following resources:    - [Refund Surcharge Advices](#tag/Refund-Surcharge-Advices)   - [Surcharge Advices](#tag/Surcharge-Advices)    Updated the following resources:    - [Payment Sessions](#tag/Payment-Sessions) - Added surchargeAdvice as a new field.   - [Transactions](#tag/Transactions) - Added refundSurchargeAdvice, surcharge, and surchargeAdvice as new fields.  * __Types__    Added the following type:   - Surcharge  ## 2024-03-20    Updated the following resources:    - [Accounts](#tag/Accounts) - Added logoUrl to identify the URL of the merchant's logo.   - [Forex Advices](#tag/Forex-Advices) - Added hostedCard to allow hosted card support.   - [Payment Sessions](#tag/Payment-Sessions) - Added allowedPaymentMethods and allowedPaymentMethodOrigins to specify the payment methods and origins allowed to be shown in the hosted payments page.  ## 2023-09-26  * __Resources__    Updated the following resources:    - [Payment Sessions](#tag/Payment-Sessions) - Added blik as a new field.   - [Processor Accounts](#tag/Processor-Accounts) - Added supportedPaymentMethods and supportedPaymentMethodOrigins as new fields.       - [Transactions](#tag/Transactions) - Added blik and refundableUntil as new fields.  * __Types__    Added Blik as a new type.      Updated the following types:    - PanToken - Added cardExpirationMonth and cardExpirationYear.   - PaymentMethod - Added BLIK.   - PaymentMethodOrigin - Added BLIK.   - TransactionState - Added authorizationPending.     ## 2023-06-20  * __Resources__    Added the following resources:    - [Apple Pay Payment Sessions](#tag/Apple-Pay-Payment-Sessions)   - [Apple Pay Payments](#tag/Apple-Pay-Payments)   - [Google Pay Payments](#tag/Google-Pay-Payments)    Updated the following resources:    - [Hosted Cards](#tag/Hosted-Cards) - Deprecated threeDSecureV1 and returns a validation error if provided.   - [Payment Links](#tag/Payment-Links) - returnUrl can now be used.   - [Payment Sessions](#tag/Payment-Sessions)     - Added applePayPayment, googlePayPayment as new fields.     - originUrl now allows multiple space-delimited URLs.   - [Transactions](#tag/Transactions) - Added applePayPayment, googlePayPayment, authorizationExpiresAt, paymentMethod, and paymentMethodOrigin as new fields.  * __Types__    Updated the following types:   - Card - Added paymentAccountReference.   - CredentialOnFileType     - Added subscription, unscheduledCardholderInitiated, and unscheduledMerchantInitiated     - Deprecated initial and unscheduled.   - VerificationResults - Added cryptogramSecurity.  ## 2023-02-22  * __New Resource__    - [Payment Link Events](#tag/Payment-Link-Events) - A payment link event is automatically created by the system when certain actions occur concerning a payment link. Examples are transactions made from a payment link or email reminders sent to the customers.  ## 2022-07-29  * __Filters__    Added the following filters when retrieving the resources below.    - [Notifications](#tag/Notifications) - createdAt_ge|gt|le|lt_timestamp   - [Payment Links](#tag/Payment-Links) - account_eq_id   - [Payment Sessions](#tag/Payment-Sessions) - customReference_eq_string, paymentLink_eq_id   - [Transactions](#tag/Transactions) - customReference_eq_string, paymentLink_eq_id  ## 2021-11-02  * __[Subscriptions](#tag/Subscriptions)__    Added doSendReceipt flag in the Subscriptions resource that controls whether an email receipt will be sent for each transaction generated from that subscription.  * __[Payment Sessions](#tag/Payment-Sessions)__    Enabled configuration of expiresAt flag in the Payment Sessions resource.  ## 2021-06-01  * __[Accounts](#tag/Accounts)__    Accounts enable the configuration of features across resources    Accounts are supported on these resources   - [Batches](#tag/Batches)   - [PaymentSessions](#tag/Payment-Sessions)   - [PaymentLinks](#tag/Payment-Links)   - [Subscriptions](#tag/Subscriptions)   - [Transactions](#tag/Transactions)  * __[Plan Lists](#tag/Plan-Lists)__    Plans are assignable to Plan Lists  * __[PAN Tokens](#tag/Pan-Tokens)__    A PAN Token can be created from a Personal Account Number    PAN Tokens are accepted as an input instead of a PAN (and returned as an output) on the Card object for the following resources:   - [Stored Card](#tag/Stored-Cards)   - [Transaction](#tag/Transactions)   - [Forex Advice](#tag/Forex-Advices)  * __\"Authorise Only\" Transactions__    [Payment Link](#tag/Payment-Links) transactions can now be set to \"Authorise Only\" using the new doCapture property    [Payment Session](#tag/Payment-Sessions) transactions can now be set to \"Authorise Only\" using the new doCapture property
 *
 * The version of the OpenAPI document: 2024-11-06
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gear4music\ElavonPlayground\V1\EPG\Model;

use \ArrayAccess;
use \Gear4music\ElavonPlayground\V1\EPG\ObjectSerializer;

/**
 * ProcessorAccount Class Doc Comment
 *
 * @category Class
 * @description A merchant may have multiple processor accounts, although Elavon Payment Gateway currently only supports one. Each processor account tracks and processes transactions separately. For merchants with multiple stores, there might be a separate processor account for each store. As another example, the merchant may need to track ecommerce transactions separately from card-present transactions. Elavon Payment Gateway has plans of supporting more complex use cases where the merchant contracts with multiple payment processors.
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProcessorAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProcessorAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'href' => 'string',
        'id' => 'string',
        'merchant' => 'string',
        'processor_reference' => 'string',
        'trade_name' => 'string',
        'business_address' => 'Address',
        'business_phone' => 'string',
        'business_email' => 'string',
        'business_website' => 'string',
        'merchant_category_code' => 'string',
        'market_segment' => 'MarketSegment',
        'region' => 'Region',
        'settlement_currency_code' => 'string',
        'language_tag' => 'string',
        'supported_card_brands' => '\Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand[]',
        'supported_payment_methods' => '\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]',
        'supported_payment_method_origins' => '\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]',
        'is_dcc_enabled' => 'bool',
        'is_mcc_enabled' => 'bool',
        'surcharging' => 'Surcharging'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'href' => 'url',
        'id' => null,
        'merchant' => 'url',
        'processor_reference' => null,
        'trade_name' => null,
        'business_address' => null,
        'business_phone' => null,
        'business_email' => null,
        'business_website' => null,
        'merchant_category_code' => null,
        'market_segment' => null,
        'region' => null,
        'settlement_currency_code' => null,
        'language_tag' => null,
        'supported_card_brands' => null,
        'supported_payment_methods' => null,
        'supported_payment_method_origins' => null,
        'is_dcc_enabled' => null,
        'is_mcc_enabled' => null,
        'surcharging' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'href' => 'href',
        'id' => 'id',
        'merchant' => 'merchant',
        'processor_reference' => 'processorReference',
        'trade_name' => 'tradeName',
        'business_address' => 'businessAddress',
        'business_phone' => 'businessPhone',
        'business_email' => 'businessEmail',
        'business_website' => 'businessWebsite',
        'merchant_category_code' => 'merchantCategoryCode',
        'market_segment' => 'marketSegment',
        'region' => 'region',
        'settlement_currency_code' => 'settlementCurrencyCode',
        'language_tag' => 'languageTag',
        'supported_card_brands' => 'supportedCardBrands',
        'supported_payment_methods' => 'supportedPaymentMethods',
        'supported_payment_method_origins' => 'supportedPaymentMethodOrigins',
        'is_dcc_enabled' => 'isDccEnabled',
        'is_mcc_enabled' => 'isMccEnabled',
        'surcharging' => 'surcharging'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'href' => 'setHref',
        'id' => 'setId',
        'merchant' => 'setMerchant',
        'processor_reference' => 'setProcessorReference',
        'trade_name' => 'setTradeName',
        'business_address' => 'setBusinessAddress',
        'business_phone' => 'setBusinessPhone',
        'business_email' => 'setBusinessEmail',
        'business_website' => 'setBusinessWebsite',
        'merchant_category_code' => 'setMerchantCategoryCode',
        'market_segment' => 'setMarketSegment',
        'region' => 'setRegion',
        'settlement_currency_code' => 'setSettlementCurrencyCode',
        'language_tag' => 'setLanguageTag',
        'supported_card_brands' => 'setSupportedCardBrands',
        'supported_payment_methods' => 'setSupportedPaymentMethods',
        'supported_payment_method_origins' => 'setSupportedPaymentMethodOrigins',
        'is_dcc_enabled' => 'setIsDccEnabled',
        'is_mcc_enabled' => 'setIsMccEnabled',
        'surcharging' => 'setSurcharging'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'href' => 'getHref',
        'id' => 'getId',
        'merchant' => 'getMerchant',
        'processor_reference' => 'getProcessorReference',
        'trade_name' => 'getTradeName',
        'business_address' => 'getBusinessAddress',
        'business_phone' => 'getBusinessPhone',
        'business_email' => 'getBusinessEmail',
        'business_website' => 'getBusinessWebsite',
        'merchant_category_code' => 'getMerchantCategoryCode',
        'market_segment' => 'getMarketSegment',
        'region' => 'getRegion',
        'settlement_currency_code' => 'getSettlementCurrencyCode',
        'language_tag' => 'getLanguageTag',
        'supported_card_brands' => 'getSupportedCardBrands',
        'supported_payment_methods' => 'getSupportedPaymentMethods',
        'supported_payment_method_origins' => 'getSupportedPaymentMethodOrigins',
        'is_dcc_enabled' => 'getIsDccEnabled',
        'is_mcc_enabled' => 'getIsMccEnabled',
        'surcharging' => 'getSurcharging'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['href'] = $data['href'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['processor_reference'] = $data['processor_reference'] ?? null;
        $this->container['trade_name'] = $data['trade_name'] ?? null;
        $this->container['business_address'] = $data['business_address'] ?? null;
        $this->container['business_phone'] = $data['business_phone'] ?? null;
        $this->container['business_email'] = $data['business_email'] ?? null;
        $this->container['business_website'] = $data['business_website'] ?? null;
        $this->container['merchant_category_code'] = $data['merchant_category_code'] ?? null;
        $this->container['market_segment'] = $data['market_segment'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['settlement_currency_code'] = $data['settlement_currency_code'] ?? null;
        $this->container['language_tag'] = $data['language_tag'] ?? null;
        $this->container['supported_card_brands'] = $data['supported_card_brands'] ?? null;
        $this->container['supported_payment_methods'] = $data['supported_payment_methods'] ?? null;
        $this->container['supported_payment_method_origins'] = $data['supported_payment_method_origins'] ?? null;
        $this->container['is_dcc_enabled'] = $data['is_dcc_enabled'] ?? null;
        $this->container['is_mcc_enabled'] = $data['is_mcc_enabled'] ?? null;
        $this->container['surcharging'] = $data['surcharging'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href ProcessorAccount [Resource URL](#section/Overview/Values) (self link)
     *
     * @return self
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ProcessorAccount [Resource ID](#section/Overview/Values) assigned by server.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string|null $merchant Merchant [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets processor_reference
     *
     * @return string|null
     */
    public function getProcessorReference()
    {
        return $this->container['processor_reference'];
    }

    /**
     * Sets processor_reference
     *
     * @param string|null $processor_reference Reference assigned by the processor
     *
     * @return self
     */
    public function setProcessorReference($processor_reference)
    {
        $this->container['processor_reference'] = $processor_reference;

        return $this;
    }

    /**
     * Gets trade_name
     *
     * @return string|null
     */
    public function getTradeName()
    {
        return $this->container['trade_name'];
    }

    /**
     * Sets trade_name
     *
     * @param string|null $trade_name Trading as, operating as, doing business as, fictitious, or assumed name, which may be different than the legal name
     *
     * @return self
     */
    public function setTradeName($trade_name)
    {
        $this->container['trade_name'] = $trade_name;

        return $this;
    }

    /**
     * Gets business_address
     *
     * @return Address|null
     */
    public function getBusinessAddress()
    {
        return $this->container['business_address'];
    }

    /**
     * Sets business_address
     *
     * @param Address|null $business_address Business Address
     *
     * @return self
     */
    public function setBusinessAddress($business_address)
    {
        $this->container['business_address'] = $business_address;

        return $this;
    }

    /**
     * Gets business_phone
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->container['business_phone'];
    }

    /**
     * Sets business_phone
     *
     * @param string|null $business_phone Business phone
     *
     * @return self
     */
    public function setBusinessPhone($business_phone)
    {
        $this->container['business_phone'] = $business_phone;

        return $this;
    }

    /**
     * Gets business_email
     *
     * @return string|null
     */
    public function getBusinessEmail()
    {
        return $this->container['business_email'];
    }

    /**
     * Sets business_email
     *
     * @param string|null $business_email Business email
     *
     * @return self
     */
    public function setBusinessEmail($business_email)
    {
        $this->container['business_email'] = $business_email;

        return $this;
    }

    /**
     * Gets business_website
     *
     * @return string|null
     */
    public function getBusinessWebsite()
    {
        return $this->container['business_website'];
    }

    /**
     * Sets business_website
     *
     * @param string|null $business_website Business website
     *
     * @return self
     */
    public function setBusinessWebsite($business_website)
    {
        $this->container['business_website'] = $business_website;

        return $this;
    }

    /**
     * Gets merchant_category_code
     *
     * @return string|null
     */
    public function getMerchantCategoryCode()
    {
        return $this->container['merchant_category_code'];
    }

    /**
     * Sets merchant_category_code
     *
     * @param string|null $merchant_category_code Merchant category code (MCC), four-digit number from ISO 18245
     *
     * @return self
     */
    public function setMerchantCategoryCode($merchant_category_code)
    {
        $this->container['merchant_category_code'] = $merchant_category_code;

        return $this;
    }

    /**
     * Gets market_segment
     *
     * @return MarketSegment|null
     */
    public function getMarketSegment()
    {
        return $this->container['market_segment'];
    }

    /**
     * Sets market_segment
     *
     * @param MarketSegment|null $market_segment Market segment
     *
     * @return self
     */
    public function setMarketSegment($market_segment)
    {
        $this->container['market_segment'] = $market_segment;

        return $this;
    }

    /**
     * Gets region
     *
     * @return Region|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param Region|null $region Region, (e.g., NA, EU)
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets settlement_currency_code
     *
     * @return string|null
     */
    public function getSettlementCurrencyCode()
    {
        return $this->container['settlement_currency_code'];
    }

    /**
     * Sets settlement_currency_code
     *
     * @param string|null $settlement_currency_code Currency to settle funds in. Uses ISO 4217 three-letter currency code.
     *
     * @return self
     */
    public function setSettlementCurrencyCode($settlement_currency_code)
    {
        $this->container['settlement_currency_code'] = $settlement_currency_code;

        return $this;
    }

    /**
     * Gets language_tag
     *
     * @return string|null
     */
    public function getLanguageTag()
    {
        return $this->container['language_tag'];
    }

    /**
     * Sets language_tag
     *
     * @param string|null $language_tag Language tag
     *
     * @return self
     */
    public function setLanguageTag($language_tag)
    {
        $this->container['language_tag'] = $language_tag;

        return $this;
    }

    /**
     * Gets supported_card_brands
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand[]|null
     */
    public function getSupportedCardBrands()
    {
        return $this->container['supported_card_brands'];
    }

    /**
     * Sets supported_card_brands
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand[]|null $supported_card_brands Supported CardBrand(s)
     *
     * @return self
     */
    public function setSupportedCardBrands($supported_card_brands)
    {
        $this->container['supported_card_brands'] = $supported_card_brands;

        return $this;
    }

    /**
     * Gets supported_payment_methods
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]|null
     */
    public function getSupportedPaymentMethods()
    {
        return $this->container['supported_payment_methods'];
    }

    /**
     * Sets supported_payment_methods
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]|null $supported_payment_methods List of supported payment methods.
     *
     * @return self
     */
    public function setSupportedPaymentMethods($supported_payment_methods)
    {
        $this->container['supported_payment_methods'] = $supported_payment_methods;

        return $this;
    }

    /**
     * Gets supported_payment_method_origins
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]|null
     */
    public function getSupportedPaymentMethodOrigins()
    {
        return $this->container['supported_payment_method_origins'];
    }

    /**
     * Sets supported_payment_method_origins
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]|null $supported_payment_method_origins List of supported payment method origins.
     *
     * @return self
     */
    public function setSupportedPaymentMethodOrigins($supported_payment_method_origins)
    {
        $this->container['supported_payment_method_origins'] = $supported_payment_method_origins;

        return $this;
    }

    /**
     * Gets is_dcc_enabled
     *
     * @return bool|null
     */
    public function getIsDccEnabled()
    {
        return $this->container['is_dcc_enabled'];
    }

    /**
     * Sets is_dcc_enabled
     *
     * @param bool|null $is_dcc_enabled Is this processor account DCC-enabled?
     *
     * @return self
     */
    public function setIsDccEnabled($is_dcc_enabled)
    {
        $this->container['is_dcc_enabled'] = $is_dcc_enabled;

        return $this;
    }

    /**
     * Gets is_mcc_enabled
     *
     * @return bool|null
     */
    public function getIsMccEnabled()
    {
        return $this->container['is_mcc_enabled'];
    }

    /**
     * Sets is_mcc_enabled
     *
     * @param bool|null $is_mcc_enabled Is this processor account MCC-enabled?
     *
     * @return self
     */
    public function setIsMccEnabled($is_mcc_enabled)
    {
        $this->container['is_mcc_enabled'] = $is_mcc_enabled;

        return $this;
    }

    /**
     * Gets surcharging
     *
     * @return Surcharging|null
     */
    public function getSurcharging()
    {
        return $this->container['surcharging'];
    }

    /**
     * Sets surcharging
     *
     * @param Surcharging|null $surcharging Surcharging
     *
     * @return self
     */
    public function setSurcharging($surcharging)
    {
        $this->container['surcharging'] = $surcharging;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


