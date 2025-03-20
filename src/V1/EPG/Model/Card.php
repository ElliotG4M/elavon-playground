<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @description Card Details
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'holder_name' => 'string',
        'number' => 'string',
        'pan_token' => 'ValueToken',
        'payment_account_reference' => 'string',
        'pan_fingerprint' => 'string',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'security_code' => 'string',
        'bill_to' => 'Contact',
        'masked_number' => 'string',
        'last4' => 'string',
        'bin' => 'string',
        'scheme' => '\Gear4music\ElavonPlayground\V1\EPG\Model\CardScheme',
        'brand' => '\Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand',
        'funding_source' => '\Gear4music\ElavonPlayground\V1\EPG\Model\CardFundingSource',
        'issuing_bank' => 'string',
        'issuing_country' => 'string',
        'issuing_currency' => 'string',
        'is_debit' => 'TrueFalseOrUnknown',
        'is_corporate' => 'TrueFalseOrUnknown',
        'is_dcc_allowed' => 'TrueFalseOrUnknown',
        'encrypted_card' => 'EncryptedData',
        'encrypted_pin' => 'PinEncryptedData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'holder_name' => null,
        'number' => null,
        'pan_token' => null,
        'payment_account_reference' => null,
        'pan_fingerprint' => null,
        'expiration_month' => 'int32',
        'expiration_year' => 'int32',
        'security_code' => null,
        'bill_to' => null,
        'masked_number' => null,
        'last4' => null,
        'bin' => null,
        'scheme' => null,
        'brand' => null,
        'funding_source' => null,
        'issuing_bank' => null,
        'issuing_country' => null,
        'issuing_currency' => null,
        'is_debit' => null,
        'is_corporate' => null,
        'is_dcc_allowed' => null,
        'encrypted_card' => null,
        'encrypted_pin' => null
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
        'holder_name' => 'holderName',
        'number' => 'number',
        'pan_token' => 'panToken',
        'payment_account_reference' => 'paymentAccountReference',
        'pan_fingerprint' => 'panFingerprint',
        'expiration_month' => 'expirationMonth',
        'expiration_year' => 'expirationYear',
        'security_code' => 'securityCode',
        'bill_to' => 'billTo',
        'masked_number' => 'maskedNumber',
        'last4' => 'last4',
        'bin' => 'bin',
        'scheme' => 'scheme',
        'brand' => 'brand',
        'funding_source' => 'fundingSource',
        'issuing_bank' => 'issuingBank',
        'issuing_country' => 'issuingCountry',
        'issuing_currency' => 'issuingCurrency',
        'is_debit' => 'isDebit',
        'is_corporate' => 'isCorporate',
        'is_dcc_allowed' => 'isDccAllowed',
        'encrypted_card' => 'encryptedCard',
        'encrypted_pin' => 'encryptedPin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'holder_name' => 'setHolderName',
        'number' => 'setNumber',
        'pan_token' => 'setPanToken',
        'payment_account_reference' => 'setPaymentAccountReference',
        'pan_fingerprint' => 'setPanFingerprint',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'security_code' => 'setSecurityCode',
        'bill_to' => 'setBillTo',
        'masked_number' => 'setMaskedNumber',
        'last4' => 'setLast4',
        'bin' => 'setBin',
        'scheme' => 'setScheme',
        'brand' => 'setBrand',
        'funding_source' => 'setFundingSource',
        'issuing_bank' => 'setIssuingBank',
        'issuing_country' => 'setIssuingCountry',
        'issuing_currency' => 'setIssuingCurrency',
        'is_debit' => 'setIsDebit',
        'is_corporate' => 'setIsCorporate',
        'is_dcc_allowed' => 'setIsDccAllowed',
        'encrypted_card' => 'setEncryptedCard',
        'encrypted_pin' => 'setEncryptedPin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'holder_name' => 'getHolderName',
        'number' => 'getNumber',
        'pan_token' => 'getPanToken',
        'payment_account_reference' => 'getPaymentAccountReference',
        'pan_fingerprint' => 'getPanFingerprint',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'security_code' => 'getSecurityCode',
        'bill_to' => 'getBillTo',
        'masked_number' => 'getMaskedNumber',
        'last4' => 'getLast4',
        'bin' => 'getBin',
        'scheme' => 'getScheme',
        'brand' => 'getBrand',
        'funding_source' => 'getFundingSource',
        'issuing_bank' => 'getIssuingBank',
        'issuing_country' => 'getIssuingCountry',
        'issuing_currency' => 'getIssuingCurrency',
        'is_debit' => 'getIsDebit',
        'is_corporate' => 'getIsCorporate',
        'is_dcc_allowed' => 'getIsDccAllowed',
        'encrypted_card' => 'getEncryptedCard',
        'encrypted_pin' => 'getEncryptedPin'
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
        $this->container['holder_name'] = $data['holder_name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['pan_token'] = $data['pan_token'] ?? null;
        $this->container['payment_account_reference'] = $data['payment_account_reference'] ?? null;
        $this->container['pan_fingerprint'] = $data['pan_fingerprint'] ?? null;
        $this->container['expiration_month'] = $data['expiration_month'] ?? null;
        $this->container['expiration_year'] = $data['expiration_year'] ?? null;
        $this->container['security_code'] = $data['security_code'] ?? null;
        $this->container['bill_to'] = $data['bill_to'] ?? null;
        $this->container['masked_number'] = $data['masked_number'] ?? null;
        $this->container['last4'] = $data['last4'] ?? null;
        $this->container['bin'] = $data['bin'] ?? null;
        $this->container['scheme'] = $data['scheme'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['funding_source'] = $data['funding_source'] ?? null;
        $this->container['issuing_bank'] = $data['issuing_bank'] ?? null;
        $this->container['issuing_country'] = $data['issuing_country'] ?? null;
        $this->container['issuing_currency'] = $data['issuing_currency'] ?? null;
        $this->container['is_debit'] = $data['is_debit'] ?? null;
        $this->container['is_corporate'] = $data['is_corporate'] ?? null;
        $this->container['is_dcc_allowed'] = $data['is_dcc_allowed'] ?? null;
        $this->container['encrypted_card'] = $data['encrypted_card'] ?? null;
        $this->container['encrypted_pin'] = $data['encrypted_pin'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['holder_name']) && (mb_strlen($this->container['holder_name']) > 45)) {
            $invalidProperties[] = "invalid value for 'holder_name', the character length must be smaller than or equal to 45.";
        }

        if (!is_null($this->container['holder_name']) && !preg_match("/[^%<>\/\\[\\]{}\\\\]*/", $this->container['holder_name'])) {
            $invalidProperties[] = "invalid value for 'holder_name', must be conform to the pattern /[^%<>\/\\[\\]{}\\\\]*/.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 23)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 23.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 13)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 13.";
        }

        if (!is_null($this->container['number']) && !preg_match("/\\D*(?:\\d\\D*){13,19}/", $this->container['number'])) {
            $invalidProperties[] = "invalid value for 'number', must be conform to the pattern /\\D*(?:\\d\\D*){13,19}/.";
        }

        if ($this->container['expiration_month'] === null) {
            $invalidProperties[] = "'expiration_month' can't be null";
        }
        if (($this->container['expiration_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'expiration_month', must be smaller than or equal to 12.";
        }

        if (($this->container['expiration_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'expiration_month', must be bigger than or equal to 1.";
        }

        if ($this->container['expiration_year'] === null) {
            $invalidProperties[] = "'expiration_year' can't be null";
        }
        if (($this->container['expiration_year'] > 2099)) {
            $invalidProperties[] = "invalid value for 'expiration_year', must be smaller than or equal to 2099.";
        }

        if (($this->container['expiration_year'] < 2000)) {
            $invalidProperties[] = "invalid value for 'expiration_year', must be bigger than or equal to 2000.";
        }

        if ($this->container['security_code'] === null) {
            $invalidProperties[] = "'security_code' can't be null";
        }
        if ((mb_strlen($this->container['security_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['security_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/\\d{3,4}/", $this->container['security_code'])) {
            $invalidProperties[] = "invalid value for 'security_code', must be conform to the pattern /\\d{3,4}/.";
        }

        if (!is_null($this->container['masked_number']) && !preg_match("/\\D+(\\d\\D*){4}/", $this->container['masked_number'])) {
            $invalidProperties[] = "invalid value for 'masked_number', must be conform to the pattern /\\D+(\\d\\D*){4}/.";
        }

        if (!is_null($this->container['last4']) && (mb_strlen($this->container['last4']) > 4)) {
            $invalidProperties[] = "invalid value for 'last4', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['last4']) && (mb_strlen($this->container['last4']) < 4)) {
            $invalidProperties[] = "invalid value for 'last4', the character length must be bigger than or equal to 4.";
        }

        if (!is_null($this->container['last4']) && !preg_match("/\\d{4}/", $this->container['last4'])) {
            $invalidProperties[] = "invalid value for 'last4', must be conform to the pattern /\\d{4}/.";
        }

        if (!is_null($this->container['bin']) && (mb_strlen($this->container['bin']) > 6)) {
            $invalidProperties[] = "invalid value for 'bin', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['bin']) && (mb_strlen($this->container['bin']) < 6)) {
            $invalidProperties[] = "invalid value for 'bin', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['bin']) && !preg_match("/\\d{6}/", $this->container['bin'])) {
            $invalidProperties[] = "invalid value for 'bin', must be conform to the pattern /\\d{6}/.";
        }

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
     * Gets holder_name
     *
     * @return string|null
     */
    public function getHolderName()
    {
        return $this->container['holder_name'];
    }

    /**
     * Sets holder_name
     *
     * @param string|null $holder_name Cardholder's full name
     *
     * @return self
     */
    public function setHolderName($holder_name)
    {
        if (!is_null($holder_name) && (mb_strlen($holder_name) > 45)) {
            throw new \InvalidArgumentException('invalid length for $holder_name when calling Card., must be smaller than or equal to 45.');
        }
        if (!is_null($holder_name) && (!preg_match("/[^%<>\/\\[\\]{}\\\\]*/", $holder_name))) {
            throw new \InvalidArgumentException("invalid value for $holder_name when calling Card., must conform to the pattern /[^%<>\/\\[\\]{}\\\\]*/.");
        }

        $this->container['holder_name'] = $holder_name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Cardholder's personal account number (PAN), not returned
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (mb_strlen($number) > 23)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Card., must be smaller than or equal to 23.');
        }
        if (!is_null($number) && (mb_strlen($number) < 13)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Card., must be bigger than or equal to 13.');
        }
        if (!is_null($number) && (!preg_match("/\\D*(?:\\d\\D*){13,19}/", $number))) {
            throw new \InvalidArgumentException("invalid value for $number when calling Card., must conform to the pattern /\\D*(?:\\d\\D*){13,19}/.");
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets pan_token
     *
     * @return ValueToken|null
     */
    public function getPanToken()
    {
        return $this->container['pan_token'];
    }

    /**
     * Sets pan_token
     *
     * @param ValueToken|null $pan_token Cardholder's personal account number (PAN) token, not returned
     *
     * @return self
     */
    public function setPanToken($pan_token)
    {
        $this->container['pan_token'] = $pan_token;

        return $this;
    }

    /**
     * Gets payment_account_reference
     *
     * @return string|null
     */
    public function getPaymentAccountReference()
    {
        return $this->container['payment_account_reference'];
    }

    /**
     * Sets payment_account_reference
     *
     * @param string|null $payment_account_reference Payment Account Reference (PAR). It is a desensitized, non-financial value. A single PAR exists throughout the life of a card account, and can link transactions across different channels and payment instruments. It allows a merchant to identify all transactions made on one credit or debit card account whether a personal account number (PAN), device PAN (DPAN), or network token was used.  PAR is returned from the card network and issuer during authorization whether the transaction is authorized or declined. However, not all card schemes support PAR. Currently, it is returned for Visa, Mastercard, and Discover transactions. In addition, for a given scheme, some card types do not support PAR and is dependent on the issuing bank.
     *
     * @return self
     */
    public function setPaymentAccountReference($payment_account_reference)
    {
        $this->container['payment_account_reference'] = $payment_account_reference;

        return $this;
    }

    /**
     * Gets pan_fingerprint
     *
     * @return string|null
     */
    public function getPanFingerprint()
    {
        return $this->container['pan_fingerprint'];
    }

    /**
     * Sets pan_fingerprint
     *
     * @param string|null $pan_fingerprint Cardholder's personal account number (PAN) fingerprint
     *
     * @return self
     */
    public function setPanFingerprint($pan_fingerprint)
    {
        $this->container['pan_fingerprint'] = $pan_fingerprint;

        return $this;
    }

    /**
     * Gets expiration_month
     *
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     *
     * @param int $expiration_month Card's expiration month
     *
     * @return self
     */
    public function setExpirationMonth($expiration_month)
    {

        if (($expiration_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $expiration_month when calling Card., must be smaller than or equal to 12.');
        }
        if (($expiration_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $expiration_month when calling Card., must be bigger than or equal to 1.');
        }

        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year
     *
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     *
     * @param int $expiration_year Card's expiration year
     *
     * @return self
     */
    public function setExpirationYear($expiration_year)
    {

        if (($expiration_year > 2099)) {
            throw new \InvalidArgumentException('invalid value for $expiration_year when calling Card., must be smaller than or equal to 2099.');
        }
        if (($expiration_year < 2000)) {
            throw new \InvalidArgumentException('invalid value for $expiration_year when calling Card., must be bigger than or equal to 2000.');
        }

        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string $security_code Card's security code / CVC / CVV / CVD / CID, 3 or 4 digits, not returned and ignored if provided with a StoredCard
     *
     * @return self
     */
    public function setSecurityCode($security_code)
    {
        if ((mb_strlen($security_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling Card., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($security_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling Card., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/\\d{3,4}/", $security_code))) {
            throw new \InvalidArgumentException("invalid value for $security_code when calling Card., must conform to the pattern /\\d{3,4}/.");
        }

        $this->container['security_code'] = $security_code;

        return $this;
    }

    /**
     * Gets bill_to
     *
     * @return Contact|null
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param Contact|null $bill_to Cardholder's billing contact details
     *
     * @return self
     */
    public function setBillTo($bill_to)
    {
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets masked_number
     *
     * @return string|null
     */
    public function getMaskedNumber()
    {
        return $this->container['masked_number'];
    }

    /**
     * Sets masked_number
     *
     * @param string|null $masked_number Masked card number
     *
     * @return self
     */
    public function setMaskedNumber($masked_number)
    {

        if (!is_null($masked_number) && (!preg_match("/\\D+(\\d\\D*){4}/", $masked_number))) {
            throw new \InvalidArgumentException("invalid value for $masked_number when calling Card., must conform to the pattern /\\D+(\\d\\D*){4}/.");
        }

        $this->container['masked_number'] = $masked_number;

        return $this;
    }

    /**
     * Gets last4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     *
     * @param string|null $last4 Last 4 digits of the card number
     *
     * @return self
     */
    public function setLast4($last4)
    {
        if (!is_null($last4) && (mb_strlen($last4) > 4)) {
            throw new \InvalidArgumentException('invalid length for $last4 when calling Card., must be smaller than or equal to 4.');
        }
        if (!is_null($last4) && (mb_strlen($last4) < 4)) {
            throw new \InvalidArgumentException('invalid length for $last4 when calling Card., must be bigger than or equal to 4.');
        }
        if (!is_null($last4) && (!preg_match("/\\d{4}/", $last4))) {
            throw new \InvalidArgumentException("invalid value for $last4 when calling Card., must conform to the pattern /\\d{4}/.");
        }

        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin Issuer/Bank identification number (IIN/BIN)
     *
     * @return self
     */
    public function setBin($bin)
    {
        if (!is_null($bin) && (mb_strlen($bin) > 6)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling Card., must be smaller than or equal to 6.');
        }
        if (!is_null($bin) && (mb_strlen($bin) < 6)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling Card., must be bigger than or equal to 6.');
        }
        if (!is_null($bin) && (!preg_match("/\\d{6}/", $bin))) {
            throw new \InvalidArgumentException("invalid value for $bin when calling Card., must conform to the pattern /\\d{6}/.");
        }

        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets scheme
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\CardScheme|null
     */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
     * Sets scheme
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\CardScheme|null $scheme scheme
     *
     * @return self
     */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets funding_source
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\CardFundingSource|null
     */
    public function getFundingSource()
    {
        return $this->container['funding_source'];
    }

    /**
     * Sets funding_source
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\CardFundingSource|null $funding_source funding_source
     *
     * @return self
     */
    public function setFundingSource($funding_source)
    {
        $this->container['funding_source'] = $funding_source;

        return $this;
    }

    /**
     * Gets issuing_bank
     *
     * @return string|null
     */
    public function getIssuingBank()
    {
        return $this->container['issuing_bank'];
    }

    /**
     * Sets issuing_bank
     *
     * @param string|null $issuing_bank Issuing bank
     *
     * @return self
     */
    public function setIssuingBank($issuing_bank)
    {
        $this->container['issuing_bank'] = $issuing_bank;

        return $this;
    }

    /**
     * Gets issuing_country
     *
     * @return string|null
     */
    public function getIssuingCountry()
    {
        return $this->container['issuing_country'];
    }

    /**
     * Sets issuing_country
     *
     * @param string|null $issuing_country Issuing country
     *
     * @return self
     */
    public function setIssuingCountry($issuing_country)
    {
        $this->container['issuing_country'] = $issuing_country;

        return $this;
    }

    /**
     * Gets issuing_currency
     *
     * @return string|null
     */
    public function getIssuingCurrency()
    {
        return $this->container['issuing_currency'];
    }

    /**
     * Sets issuing_currency
     *
     * @param string|null $issuing_currency Issuer currency
     *
     * @return self
     */
    public function setIssuingCurrency($issuing_currency)
    {
        $this->container['issuing_currency'] = $issuing_currency;

        return $this;
    }

    /**
     * Gets is_debit
     *
     * @return TrueFalseOrUnknown|null
     */
    public function getIsDebit()
    {
        return $this->container['is_debit'];
    }

    /**
     * Sets is_debit
     *
     * @param TrueFalseOrUnknown|null $is_debit Is the card debit ?
     *
     * @return self
     */
    public function setIsDebit($is_debit)
    {
        $this->container['is_debit'] = $is_debit;

        return $this;
    }

    /**
     * Gets is_corporate
     *
     * @return TrueFalseOrUnknown|null
     */
    public function getIsCorporate()
    {
        return $this->container['is_corporate'];
    }

    /**
     * Sets is_corporate
     *
     * @param TrueFalseOrUnknown|null $is_corporate Is the account corporate ?
     *
     * @return self
     */
    public function setIsCorporate($is_corporate)
    {
        $this->container['is_corporate'] = $is_corporate;

        return $this;
    }

    /**
     * Gets is_dcc_allowed
     *
     * @return TrueFalseOrUnknown|null
     */
    public function getIsDccAllowed()
    {
        return $this->container['is_dcc_allowed'];
    }

    /**
     * Sets is_dcc_allowed
     *
     * @param TrueFalseOrUnknown|null $is_dcc_allowed Is DCC supported ?
     *
     * @return self
     */
    public function setIsDccAllowed($is_dcc_allowed)
    {
        $this->container['is_dcc_allowed'] = $is_dcc_allowed;

        return $this;
    }

    /**
     * Gets encrypted_card
     *
     * @return EncryptedData|null
     */
    public function getEncryptedCard()
    {
        return $this->container['encrypted_card'];
    }

    /**
     * Sets encrypted_card
     *
     * @param EncryptedData|null $encrypted_card encrypted_card
     *
     * @return self
     */
    public function setEncryptedCard($encrypted_card)
    {
        $this->container['encrypted_card'] = $encrypted_card;

        return $this;
    }

    /**
     * Gets encrypted_pin
     *
     * @return PinEncryptedData|null
     */
    public function getEncryptedPin()
    {
        return $this->container['encrypted_pin'];
    }

    /**
     * Sets encrypted_pin
     *
     * @param PinEncryptedData|null $encrypted_pin encrypted_pin
     *
     * @return self
     */
    public function setEncryptedPin($encrypted_pin)
    {
        $this->container['encrypted_pin'] = $encrypted_pin;

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


