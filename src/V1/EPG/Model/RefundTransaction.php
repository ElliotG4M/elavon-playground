<?php
/**
 * RefundTransaction
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gear4music\ElavonPlayground\V1\EPG\Model;
use \Gear4music\ElavonPlayground\V1\EPG\ObjectSerializer;

/**
 * RefundTransaction Class Doc Comment
 *
 * @category Class
 * @description Refund Transaction
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RefundTransaction extends TransactionInput
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RefundTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source' => '\Gear4music\ElavonPlayground\V1\EPG\Model\Source',
        'processor_account' => 'string',
        'account' => 'string',
        'total' => '\Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency',
        'sales_tax' => 'object',
        'refund_surcharge_advice' => 'string',
        'parent_transaction' => 'string',
        'description' => 'string',
        'shopper_statement' => '\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperStatement',
        'custom_reference' => 'string',
        'shopper_reference' => 'string',
        'shopper_interaction' => '\Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction',
        'shopper_email_address' => 'string',
        'shopper_ip_address' => 'string',
        'shopper_language_tag' => 'string',
        'shopper_time_zone' => 'string',
        'payment_link' => 'string',
        'payment_session' => 'string',
        'created_by' => 'string',
        'custom_fields' => 'array<string,string>',
        'do_capture' => 'bool',
        'do_send_receipt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source' => null,
        'processor_account' => 'url',
        'account' => 'url',
        'total' => null,
        'sales_tax' => null,
        'refund_surcharge_advice' => 'url',
        'parent_transaction' => 'url',
        'description' => null,
        'shopper_statement' => null,
        'custom_reference' => null,
        'shopper_reference' => null,
        'shopper_interaction' => null,
        'shopper_email_address' => null,
        'shopper_ip_address' => null,
        'shopper_language_tag' => null,
        'shopper_time_zone' => null,
        'payment_link' => 'url',
        'payment_session' => 'url',
        'created_by' => null,
        'custom_fields' => null,
        'do_capture' => null,
        'do_send_receipt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'source' => false,
        'processor_account' => false,
        'account' => false,
        'total' => false,
        'sales_tax' => false,
        'refund_surcharge_advice' => false,
        'parent_transaction' => false,
        'description' => false,
        'shopper_statement' => false,
        'custom_reference' => false,
        'shopper_reference' => false,
        'shopper_interaction' => false,
        'shopper_email_address' => false,
        'shopper_ip_address' => false,
        'shopper_language_tag' => false,
        'shopper_time_zone' => false,
        'payment_link' => false,
        'payment_session' => false,
        'created_by' => false,
        'custom_fields' => false,
        'do_capture' => false,
        'do_send_receipt' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source' => 'source',
        'processor_account' => 'processorAccount',
        'account' => 'account',
        'total' => 'total',
        'sales_tax' => 'salesTax',
        'refund_surcharge_advice' => 'refundSurchargeAdvice',
        'parent_transaction' => 'parentTransaction',
        'description' => 'description',
        'shopper_statement' => 'shopperStatement',
        'custom_reference' => 'customReference',
        'shopper_reference' => 'shopperReference',
        'shopper_interaction' => 'shopperInteraction',
        'shopper_email_address' => 'shopperEmailAddress',
        'shopper_ip_address' => 'shopperIpAddress',
        'shopper_language_tag' => 'shopperLanguageTag',
        'shopper_time_zone' => 'shopperTimeZone',
        'payment_link' => 'paymentLink',
        'payment_session' => 'paymentSession',
        'created_by' => 'createdBy',
        'custom_fields' => 'customFields',
        'do_capture' => 'doCapture',
        'do_send_receipt' => 'doSendReceipt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'processor_account' => 'setProcessorAccount',
        'account' => 'setAccount',
        'total' => 'setTotal',
        'sales_tax' => 'setSalesTax',
        'refund_surcharge_advice' => 'setRefundSurchargeAdvice',
        'parent_transaction' => 'setParentTransaction',
        'description' => 'setDescription',
        'shopper_statement' => 'setShopperStatement',
        'custom_reference' => 'setCustomReference',
        'shopper_reference' => 'setShopperReference',
        'shopper_interaction' => 'setShopperInteraction',
        'shopper_email_address' => 'setShopperEmailAddress',
        'shopper_ip_address' => 'setShopperIpAddress',
        'shopper_language_tag' => 'setShopperLanguageTag',
        'shopper_time_zone' => 'setShopperTimeZone',
        'payment_link' => 'setPaymentLink',
        'payment_session' => 'setPaymentSession',
        'created_by' => 'setCreatedBy',
        'custom_fields' => 'setCustomFields',
        'do_capture' => 'setDoCapture',
        'do_send_receipt' => 'setDoSendReceipt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'processor_account' => 'getProcessorAccount',
        'account' => 'getAccount',
        'total' => 'getTotal',
        'sales_tax' => 'getSalesTax',
        'refund_surcharge_advice' => 'getRefundSurchargeAdvice',
        'parent_transaction' => 'getParentTransaction',
        'description' => 'getDescription',
        'shopper_statement' => 'getShopperStatement',
        'custom_reference' => 'getCustomReference',
        'shopper_reference' => 'getShopperReference',
        'shopper_interaction' => 'getShopperInteraction',
        'shopper_email_address' => 'getShopperEmailAddress',
        'shopper_ip_address' => 'getShopperIpAddress',
        'shopper_language_tag' => 'getShopperLanguageTag',
        'shopper_time_zone' => 'getShopperTimeZone',
        'payment_link' => 'getPaymentLink',
        'payment_session' => 'getPaymentSession',
        'created_by' => 'getCreatedBy',
        'custom_fields' => 'getCustomFields',
        'do_capture' => 'getDoCapture',
        'do_send_receipt' => 'getDoSendReceipt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('processor_account', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('sales_tax', $data ?? [], null);
        $this->setIfExists('refund_surcharge_advice', $data ?? [], null);
        $this->setIfExists('parent_transaction', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('shopper_statement', $data ?? [], null);
        $this->setIfExists('custom_reference', $data ?? [], null);
        $this->setIfExists('shopper_reference', $data ?? [], null);
        $this->setIfExists('shopper_interaction', $data ?? [], null);
        $this->setIfExists('shopper_email_address', $data ?? [], null);
        $this->setIfExists('shopper_ip_address', $data ?? [], null);
        $this->setIfExists('shopper_language_tag', $data ?? [], null);
        $this->setIfExists('shopper_time_zone', $data ?? [], null);
        $this->setIfExists('payment_link', $data ?? [], null);
        $this->setIfExists('payment_session', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('do_capture', $data ?? [], null);
        $this->setIfExists('do_send_receipt', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['parent_transaction'] === null) {
            $invalidProperties[] = "'parent_transaction' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['custom_reference']) && (mb_strlen($this->container['custom_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'custom_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['shopper_reference']) && (mb_strlen($this->container['shopper_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'shopper_reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['shopper_email_address']) && (mb_strlen($this->container['shopper_email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'shopper_email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['shopper_language_tag']) && (mb_strlen($this->container['shopper_language_tag']) > 255)) {
            $invalidProperties[] = "invalid value for 'shopper_language_tag', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['created_by']) && (mb_strlen($this->container['created_by']) > 255)) {
            $invalidProperties[] = "invalid value for 'created_by', the character length must be smaller than or equal to 255.";
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
     * Gets source
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\Source|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\Source|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets processor_account
     *
     * @return string|null
     */
    public function getProcessorAccount()
    {
        return $this->container['processor_account'];
    }

    /**
     * Sets processor_account
     *
     * @param string|null $processor_account ProcessorAccount [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setProcessorAccount($processor_account)
    {
        if (is_null($processor_account)) {
            throw new \InvalidArgumentException('non-nullable processor_account cannot be null');
        }
        $this->container['processor_account'] = $processor_account;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account Account [Resource URL](#section/Overview/Values). Defaults to merchant.
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\PositiveAmountAndCurrency|null $total Transaction total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets sales_tax
     *
     * @return object|null
     */
    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    /**
     * Sets sales_tax
     *
     * @param object|null $sales_tax Sales Tax
     *
     * @return self
     */
    public function setSalesTax($sales_tax)
    {
        if (is_null($sales_tax)) {
            throw new \InvalidArgumentException('non-nullable sales_tax cannot be null');
        }
        $this->container['sales_tax'] = $sales_tax;

        return $this;
    }

    /**
     * Gets refund_surcharge_advice
     *
     * @return string|null
     */
    public function getRefundSurchargeAdvice()
    {
        return $this->container['refund_surcharge_advice'];
    }

    /**
     * Sets refund_surcharge_advice
     *
     * @param string|null $refund_surcharge_advice Refund Surcharge Advice [Resource URL](#section/Overview/Values) obtained through the create refundSurchargeAdvice API call.
     *
     * @return self
     */
    public function setRefundSurchargeAdvice($refund_surcharge_advice)
    {
        if (is_null($refund_surcharge_advice)) {
            throw new \InvalidArgumentException('non-nullable refund_surcharge_advice cannot be null');
        }
        $this->container['refund_surcharge_advice'] = $refund_surcharge_advice;

        return $this;
    }

    /**
     * Gets parent_transaction
     *
     * @return string
     */
    public function getParentTransaction()
    {
        return $this->container['parent_transaction'];
    }

    /**
     * Sets parent_transaction
     *
     * @param string $parent_transaction Transaction [Resource URL](#section/Overview/Values) of the parent Transaction
     *
     * @return self
     */
    public function setParentTransaction($parent_transaction)
    {
        if (is_null($parent_transaction)) {
            throw new \InvalidArgumentException('non-nullable parent_transaction cannot be null');
        }
        $this->container['parent_transaction'] = $parent_transaction;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description, which appears on the dashboard and might appear on receipts
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling RefundTransaction., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets shopper_statement
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\ShopperStatement|null
     */
    public function getShopperStatement()
    {
        return $this->container['shopper_statement'];
    }

    /**
     * Sets shopper_statement
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\ShopperStatement|null $shopper_statement Dynamic overrides of what might appear on a shopper's statement
     *
     * @return self
     */
    public function setShopperStatement($shopper_statement)
    {
        if (is_null($shopper_statement)) {
            throw new \InvalidArgumentException('non-nullable shopper_statement cannot be null');
        }
        $this->container['shopper_statement'] = $shopper_statement;

        return $this;
    }

    /**
     * Gets custom_reference
     *
     * @return string|null
     */
    public function getCustomReference()
    {
        return $this->container['custom_reference'];
    }

    /**
     * Sets custom_reference
     *
     * @param string|null $custom_reference Optional reference provided by the merchant
     *
     * @return self
     */
    public function setCustomReference($custom_reference)
    {
        if (is_null($custom_reference)) {
            throw new \InvalidArgumentException('non-nullable custom_reference cannot be null');
        }
        if ((mb_strlen($custom_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $custom_reference when calling RefundTransaction., must be smaller than or equal to 255.');
        }

        $this->container['custom_reference'] = $custom_reference;

        return $this;
    }

    /**
     * Gets shopper_reference
     *
     * @return string|null
     */
    public function getShopperReference()
    {
        return $this->container['shopper_reference'];
    }

    /**
     * Sets shopper_reference
     *
     * @param string|null $shopper_reference Optional reference provided by the shopper, such as a purchase order
     *
     * @return self
     */
    public function setShopperReference($shopper_reference)
    {
        if (is_null($shopper_reference)) {
            throw new \InvalidArgumentException('non-nullable shopper_reference cannot be null');
        }
        if ((mb_strlen($shopper_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $shopper_reference when calling RefundTransaction., must be smaller than or equal to 255.');
        }

        $this->container['shopper_reference'] = $shopper_reference;

        return $this;
    }

    /**
     * Gets shopper_interaction
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction|null
     */
    public function getShopperInteraction()
    {
        return $this->container['shopper_interaction'];
    }

    /**
     * Sets shopper_interaction
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\ShopperInteraction|null $shopper_interaction shopper_interaction
     *
     * @return self
     */
    public function setShopperInteraction($shopper_interaction)
    {
        if (is_null($shopper_interaction)) {
            throw new \InvalidArgumentException('non-nullable shopper_interaction cannot be null');
        }
        $this->container['shopper_interaction'] = $shopper_interaction;

        return $this;
    }

    /**
     * Gets shopper_email_address
     *
     * @return string|null
     */
    public function getShopperEmailAddress()
    {
        return $this->container['shopper_email_address'];
    }

    /**
     * Sets shopper_email_address
     *
     * @param string|null $shopper_email_address Shopper's email address, useful for fraud detection and to provide a receipt
     *
     * @return self
     */
    public function setShopperEmailAddress($shopper_email_address)
    {
        if (is_null($shopper_email_address)) {
            throw new \InvalidArgumentException('non-nullable shopper_email_address cannot be null');
        }
        if ((mb_strlen($shopper_email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $shopper_email_address when calling RefundTransaction., must be smaller than or equal to 254.');
        }

        $this->container['shopper_email_address'] = $shopper_email_address;

        return $this;
    }

    /**
     * Gets shopper_ip_address
     *
     * @return string|null
     */
    public function getShopperIpAddress()
    {
        return $this->container['shopper_ip_address'];
    }

    /**
     * Sets shopper_ip_address
     *
     * @param string|null $shopper_ip_address Shopper's IP address, useful for fraud detection
     *
     * @return self
     */
    public function setShopperIpAddress($shopper_ip_address)
    {
        if (is_null($shopper_ip_address)) {
            throw new \InvalidArgumentException('non-nullable shopper_ip_address cannot be null');
        }
        $this->container['shopper_ip_address'] = $shopper_ip_address;

        return $this;
    }

    /**
     * Gets shopper_language_tag
     *
     * @return string|null
     */
    public function getShopperLanguageTag()
    {
        return $this->container['shopper_language_tag'];
    }

    /**
     * Sets shopper_language_tag
     *
     * @param string|null $shopper_language_tag Shopper's IETF language tag, useful for localising the receipt
     *
     * @return self
     */
    public function setShopperLanguageTag($shopper_language_tag)
    {
        if (is_null($shopper_language_tag)) {
            throw new \InvalidArgumentException('non-nullable shopper_language_tag cannot be null');
        }
        if ((mb_strlen($shopper_language_tag) > 255)) {
            throw new \InvalidArgumentException('invalid length for $shopper_language_tag when calling RefundTransaction., must be smaller than or equal to 255.');
        }

        $this->container['shopper_language_tag'] = $shopper_language_tag;

        return $this;
    }

    /**
     * Gets shopper_time_zone
     *
     * @return string|null
     */
    public function getShopperTimeZone()
    {
        return $this->container['shopper_time_zone'];
    }

    /**
     * Sets shopper_time_zone
     *
     * @param string|null $shopper_time_zone Shopper's time zone, specified by the IANA Time Zone Database name
     *
     * @return self
     */
    public function setShopperTimeZone($shopper_time_zone)
    {
        if (is_null($shopper_time_zone)) {
            throw new \InvalidArgumentException('non-nullable shopper_time_zone cannot be null');
        }
        $this->container['shopper_time_zone'] = $shopper_time_zone;

        return $this;
    }

    /**
     * Gets payment_link
     *
     * @return string|null
     */
    public function getPaymentLink()
    {
        return $this->container['payment_link'];
    }

    /**
     * Sets payment_link
     *
     * @param string|null $payment_link PaymentLink [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setPaymentLink($payment_link)
    {
        if (is_null($payment_link)) {
            throw new \InvalidArgumentException('non-nullable payment_link cannot be null');
        }
        $this->container['payment_link'] = $payment_link;

        return $this;
    }

    /**
     * Gets payment_session
     *
     * @return string|null
     */
    public function getPaymentSession()
    {
        return $this->container['payment_session'];
    }

    /**
     * Sets payment_session
     *
     * @param string|null $payment_session PaymentSession [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setPaymentSession($payment_session)
    {
        if (is_null($payment_session)) {
            throw new \InvalidArgumentException('non-nullable payment_session cannot be null');
        }
        $this->container['payment_session'] = $payment_session;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by Who or what created the transaction? When created in Elavon's virtual terminal, this will be the email address of the currently logged in user. When created otherwise, the integrator may optionally provide any value that helps answer this question.
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        if ((mb_strlen($created_by) > 255)) {
            throw new \InvalidArgumentException('invalid length for $created_by when calling RefundTransaction., must be smaller than or equal to 255.');
        }

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return array<string,string>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,string>|null $custom_fields Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively.
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets do_capture
     *
     * @return bool|null
     */
    public function getDoCapture()
    {
        return $this->container['do_capture'];
    }

    /**
     * Sets do_capture
     *
     * @param bool|null $do_capture If false, authorize only; if true (default), authorize and capture funds for settlement.
     *
     * @return self
     */
    public function setDoCapture($do_capture)
    {
        if (is_null($do_capture)) {
            throw new \InvalidArgumentException('non-nullable do_capture cannot be null');
        }
        $this->container['do_capture'] = $do_capture;

        return $this;
    }

    /**
     * Gets do_send_receipt
     *
     * @return bool|null
     */
    public function getDoSendReceipt()
    {
        return $this->container['do_send_receipt'];
    }

    /**
     * Sets do_send_receipt
     *
     * @param bool|null $do_send_receipt Send receipt to shopper's email address, default is false.
     *
     * @return self
     */
    public function setDoSendReceipt($do_send_receipt)
    {
        if (is_null($do_send_receipt)) {
            throw new \InvalidArgumentException('non-nullable do_send_receipt cannot be null');
        }
        $this->container['do_send_receipt'] = $do_send_receipt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


