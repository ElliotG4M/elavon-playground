<?php
/**
 * PaymentSessionInput
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

use \ArrayAccess;
use \Gear4music\ElavonPlayground\V1\EPG\ObjectSerializer;

/**
 * PaymentSessionInput Class Doc Comment
 *
 * @category Class
 * @description A payment session securely collects payment details from the shopper using our hosted payment page and sends them directly to our platform, allowing the merchant to minimize PCI DSS scope.
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentSessionInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSessionInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expires_at' => '\DateTime',
        'account' => 'string',
        'order' => 'string',
        'allowed_payment_methods' => '\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]',
        'allowed_payment_method_origins' => '\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]',
        'payment_link' => 'string',
        'sales_tax' => '\Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency',
        'shopper' => 'string',
        'debtor_account' => '\Gear4music\ElavonPlayground\V1\EPG\Model\DebtorAccount',
        'shopper_email_address' => 'string',
        'bill_to' => '\Gear4music\ElavonPlayground\V1\EPG\Model\Contact',
        'ship_to' => '\Gear4music\ElavonPlayground\V1\EPG\Model\Contact',
        'hpp_type' => '\Gear4music\ElavonPlayground\V1\EPG\Model\HppType',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'origin_url' => 'string',
        'default_language_tag' => 'string',
        'do_create_transaction' => 'bool',
        'do_capture' => 'bool',
        'do_three_d_secure' => 'bool',
        'custom_reference' => 'string',
        'custom_fields' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expires_at' => 'date-time',
        'account' => 'url',
        'order' => 'url',
        'allowed_payment_methods' => null,
        'allowed_payment_method_origins' => null,
        'payment_link' => 'url',
        'sales_tax' => null,
        'shopper' => 'url',
        'debtor_account' => null,
        'shopper_email_address' => null,
        'bill_to' => null,
        'ship_to' => null,
        'hpp_type' => null,
        'return_url' => 'url',
        'cancel_url' => 'url',
        'origin_url' => 'url',
        'default_language_tag' => null,
        'do_create_transaction' => null,
        'do_capture' => null,
        'do_three_d_secure' => null,
        'custom_reference' => null,
        'custom_fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'expires_at' => false,
        'account' => false,
        'order' => false,
        'allowed_payment_methods' => false,
        'allowed_payment_method_origins' => false,
        'payment_link' => false,
        'sales_tax' => false,
        'shopper' => false,
        'debtor_account' => false,
        'shopper_email_address' => false,
        'bill_to' => false,
        'ship_to' => false,
        'hpp_type' => false,
        'return_url' => false,
        'cancel_url' => false,
        'origin_url' => false,
        'default_language_tag' => false,
        'do_create_transaction' => false,
        'do_capture' => false,
        'do_three_d_secure' => false,
        'custom_reference' => false,
        'custom_fields' => false
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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
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
        'expires_at' => 'expiresAt',
        'account' => 'account',
        'order' => 'order',
        'allowed_payment_methods' => 'allowedPaymentMethods',
        'allowed_payment_method_origins' => 'allowedPaymentMethodOrigins',
        'payment_link' => 'paymentLink',
        'sales_tax' => 'salesTax',
        'shopper' => 'shopper',
        'debtor_account' => 'debtorAccount',
        'shopper_email_address' => 'shopperEmailAddress',
        'bill_to' => 'billTo',
        'ship_to' => 'shipTo',
        'hpp_type' => 'hppType',
        'return_url' => 'returnUrl',
        'cancel_url' => 'cancelUrl',
        'origin_url' => 'originUrl',
        'default_language_tag' => 'defaultLanguageTag',
        'do_create_transaction' => 'doCreateTransaction',
        'do_capture' => 'doCapture',
        'do_three_d_secure' => 'doThreeDSecure',
        'custom_reference' => 'customReference',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expires_at' => 'setExpiresAt',
        'account' => 'setAccount',
        'order' => 'setOrder',
        'allowed_payment_methods' => 'setAllowedPaymentMethods',
        'allowed_payment_method_origins' => 'setAllowedPaymentMethodOrigins',
        'payment_link' => 'setPaymentLink',
        'sales_tax' => 'setSalesTax',
        'shopper' => 'setShopper',
        'debtor_account' => 'setDebtorAccount',
        'shopper_email_address' => 'setShopperEmailAddress',
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo',
        'hpp_type' => 'setHppType',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'origin_url' => 'setOriginUrl',
        'default_language_tag' => 'setDefaultLanguageTag',
        'do_create_transaction' => 'setDoCreateTransaction',
        'do_capture' => 'setDoCapture',
        'do_three_d_secure' => 'setDoThreeDSecure',
        'custom_reference' => 'setCustomReference',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expires_at' => 'getExpiresAt',
        'account' => 'getAccount',
        'order' => 'getOrder',
        'allowed_payment_methods' => 'getAllowedPaymentMethods',
        'allowed_payment_method_origins' => 'getAllowedPaymentMethodOrigins',
        'payment_link' => 'getPaymentLink',
        'sales_tax' => 'getSalesTax',
        'shopper' => 'getShopper',
        'debtor_account' => 'getDebtorAccount',
        'shopper_email_address' => 'getShopperEmailAddress',
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo',
        'hpp_type' => 'getHppType',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'origin_url' => 'getOriginUrl',
        'default_language_tag' => 'getDefaultLanguageTag',
        'do_create_transaction' => 'getDoCreateTransaction',
        'do_capture' => 'getDoCapture',
        'do_three_d_secure' => 'getDoThreeDSecure',
        'custom_reference' => 'getCustomReference',
        'custom_fields' => 'getCustomFields'
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
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('allowed_payment_methods', $data ?? [], null);
        $this->setIfExists('allowed_payment_method_origins', $data ?? [], null);
        $this->setIfExists('payment_link', $data ?? [], null);
        $this->setIfExists('sales_tax', $data ?? [], null);
        $this->setIfExists('shopper', $data ?? [], null);
        $this->setIfExists('debtor_account', $data ?? [], null);
        $this->setIfExists('shopper_email_address', $data ?? [], null);
        $this->setIfExists('bill_to', $data ?? [], null);
        $this->setIfExists('ship_to', $data ?? [], null);
        $this->setIfExists('hpp_type', $data ?? [], null);
        $this->setIfExists('return_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('origin_url', $data ?? [], null);
        $this->setIfExists('default_language_tag', $data ?? [], null);
        $this->setIfExists('do_create_transaction', $data ?? [], null);
        $this->setIfExists('do_capture', $data ?? [], true);
        $this->setIfExists('do_three_d_secure', $data ?? [], null);
        $this->setIfExists('custom_reference', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
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
        $invalidProperties = [];

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if (!is_null($this->container['shopper_email_address']) && (mb_strlen($this->container['shopper_email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'shopper_email_address', the character length must be smaller than or equal to 254.";
        }

        if ($this->container['return_url'] === null) {
            $invalidProperties[] = "'return_url' can't be null";
        }
        if ((mb_strlen($this->container['return_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'return_url', the character length must be smaller than or equal to 2048.";
        }

        if (!preg_match("/https?:\/\/[^\/]{2,}.*/", $this->container['return_url'])) {
            $invalidProperties[] = "invalid value for 'return_url', must be conform to the pattern /https?:\/\/[^\/]{2,}.*/.";
        }

        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if ((mb_strlen($this->container['cancel_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'cancel_url', the character length must be smaller than or equal to 2048.";
        }

        if (!preg_match("/https?:\/\/[^\/]{2,}.*/", $this->container['cancel_url'])) {
            $invalidProperties[] = "invalid value for 'cancel_url', must be conform to the pattern /https?:\/\/[^\/]{2,}.*/.";
        }

        if ($this->container['origin_url'] === null) {
            $invalidProperties[] = "'origin_url' can't be null";
        }
        if ((mb_strlen($this->container['origin_url']) > 2048)) {
            $invalidProperties[] = "invalid value for 'origin_url', the character length must be smaller than or equal to 2048.";
        }

        if (!preg_match("/https?:\/\/[^\/]{2,}.*/", $this->container['origin_url'])) {
            $invalidProperties[] = "invalid value for 'origin_url', must be conform to the pattern /https?:\/\/[^\/]{2,}.*/.";
        }

        if (!is_null($this->container['default_language_tag']) && (mb_strlen($this->container['default_language_tag']) > 255)) {
            $invalidProperties[] = "invalid value for 'default_language_tag', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['custom_reference']) && (mb_strlen($this->container['custom_reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'custom_reference', the character length must be smaller than or equal to 255.";
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
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Expiration timestamp
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

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
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order Order [Resource URL](#section/Overview/Values) for which payment is being requested
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets allowed_payment_methods
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]|null
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]|null $allowed_payment_methods Used to specify the payment methods allowed to be shown in the hosted payments page.
     *
     * @return self
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        if (is_null($allowed_payment_methods)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_methods cannot be null');
        }
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }

    /**
     * Gets allowed_payment_method_origins
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]|null
     */
    public function getAllowedPaymentMethodOrigins()
    {
        return $this->container['allowed_payment_method_origins'];
    }

    /**
     * Sets allowed_payment_method_origins
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]|null $allowed_payment_method_origins The allowed origins of the payment methods listed in the allowedPaymentMethods field.
     *
     * @return self
     */
    public function setAllowedPaymentMethodOrigins($allowed_payment_method_origins)
    {
        if (is_null($allowed_payment_method_origins)) {
            throw new \InvalidArgumentException('non-nullable allowed_payment_method_origins cannot be null');
        }
        $this->container['allowed_payment_method_origins'] = $allowed_payment_method_origins;

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
     * Gets sales_tax
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency|null
     */
    public function getSalesTax()
    {
        return $this->container['sales_tax'];
    }

    /**
     * Sets sales_tax
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency|null $sales_tax Sales Tax
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
     * Gets shopper
     *
     * @return string|null
     */
    public function getShopper()
    {
        return $this->container['shopper'];
    }

    /**
     * Sets shopper
     *
     * @param string|null $shopper Shopper [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setShopper($shopper)
    {
        if (is_null($shopper)) {
            throw new \InvalidArgumentException('non-nullable shopper cannot be null');
        }
        $this->container['shopper'] = $shopper;

        return $this;
    }

    /**
     * Gets debtor_account
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\DebtorAccount|null
     */
    public function getDebtorAccount()
    {
        return $this->container['debtor_account'];
    }

    /**
     * Sets debtor_account
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\DebtorAccount|null $debtor_account Account information required for MCC 6012/6050/6051 merchants
     *
     * @return self
     */
    public function setDebtorAccount($debtor_account)
    {
        if (is_null($debtor_account)) {
            throw new \InvalidArgumentException('non-nullable debtor_account cannot be null');
        }
        $this->container['debtor_account'] = $debtor_account;

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
            throw new \InvalidArgumentException('invalid length for $shopper_email_address when calling PaymentSessionInput., must be smaller than or equal to 254.');
        }

        $this->container['shopper_email_address'] = $shopper_email_address;

        return $this;
    }

    /**
     * Gets bill_to
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\Contact|null
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\Contact|null $bill_to Billing contact details that will be used by default for the hosted card
     *
     * @return self
     */
    public function setBillTo($bill_to)
    {
        if (is_null($bill_to)) {
            throw new \InvalidArgumentException('non-nullable bill_to cannot be null');
        }
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\Contact|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\Contact|null $ship_to Shipping contact details
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        if (is_null($ship_to)) {
            throw new \InvalidArgumentException('non-nullable ship_to cannot be null');
        }
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets hpp_type
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\HppType|null
     */
    public function getHppType()
    {
        return $this->container['hpp_type'];
    }

    /**
     * Sets hpp_type
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\HppType|null $hpp_type Hosted payments page type indicates the type of hosted payments page for the payment session, defaults to fullPageRedirect
     *
     * @return self
     */
    public function setHppType($hpp_type)
    {
        if (is_null($hpp_type)) {
            throw new \InvalidArgumentException('non-nullable hpp_type cannot be null');
        }
        $this->container['hpp_type'] = $hpp_type;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string $return_url URL to redirect to after payment details are collected.
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        if (is_null($return_url)) {
            throw new \InvalidArgumentException('non-nullable return_url cannot be null');
        }
        if ((mb_strlen($return_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $return_url when calling PaymentSessionInput., must be smaller than or equal to 2048.');
        }
        if ((!preg_match("/https?:\/\/[^\/]{2,}.*/", ObjectSerializer::toString($return_url)))) {
            throw new \InvalidArgumentException("invalid value for \$return_url when calling PaymentSessionInput., must conform to the pattern /https?:\/\/[^\/]{2,}.*/.");
        }

        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url URL to redirect to if the shopper cancels
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        if ((mb_strlen($cancel_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $cancel_url when calling PaymentSessionInput., must be smaller than or equal to 2048.');
        }
        if ((!preg_match("/https?:\/\/[^\/]{2,}.*/", ObjectSerializer::toString($cancel_url)))) {
            throw new \InvalidArgumentException("invalid value for \$cancel_url when calling PaymentSessionInput., must conform to the pattern /https?:\/\/[^\/]{2,}.*/.");
        }

        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets origin_url
     *
     * @return string
     */
    public function getOriginUrl()
    {
        return $this->container['origin_url'];
    }

    /**
     * Sets origin_url
     *
     * @param string $origin_url Origin where the hosted payment page will be embedded. Required if using the lightbox. Multiple origin URLs are allowed. Each URL must be separated by a space and each URL must follow the regex.
     *
     * @return self
     */
    public function setOriginUrl($origin_url)
    {
        if (is_null($origin_url)) {
            throw new \InvalidArgumentException('non-nullable origin_url cannot be null');
        }
        if ((mb_strlen($origin_url) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $origin_url when calling PaymentSessionInput., must be smaller than or equal to 2048.');
        }
        if ((!preg_match("/https?:\/\/[^\/]{2,}.*/", ObjectSerializer::toString($origin_url)))) {
            throw new \InvalidArgumentException("invalid value for \$origin_url when calling PaymentSessionInput., must conform to the pattern /https?:\/\/[^\/]{2,}.*/.");
        }

        $this->container['origin_url'] = $origin_url;

        return $this;
    }

    /**
     * Gets default_language_tag
     *
     * @return string|null
     */
    public function getDefaultLanguageTag()
    {
        return $this->container['default_language_tag'];
    }

    /**
     * Sets default_language_tag
     *
     * @param string|null $default_language_tag Default IETF language tag, a tag that represents language names and countries, to be used in the Hosted Payment Page, such as en-GB meaning 'English (Great Britain)'.
     *
     * @return self
     */
    public function setDefaultLanguageTag($default_language_tag)
    {
        if (is_null($default_language_tag)) {
            throw new \InvalidArgumentException('non-nullable default_language_tag cannot be null');
        }
        if ((mb_strlen($default_language_tag) > 255)) {
            throw new \InvalidArgumentException('invalid length for $default_language_tag when calling PaymentSessionInput., must be smaller than or equal to 255.');
        }

        $this->container['default_language_tag'] = $default_language_tag;

        return $this;
    }

    /**
     * Gets do_create_transaction
     *
     * @return bool|null
     */
    public function getDoCreateTransaction()
    {
        return $this->container['do_create_transaction'];
    }

    /**
     * Sets do_create_transaction
     *
     * @param bool|null $do_create_transaction Determines whether or not a Hosted Payment Page will perform an end to end transaction. If set to 'true', information a cardholder submits into a hosted payment form will automatically be used to create a Transaction resource. If set to 'false', the information submitted through the hosted payment form will automatically be used to generate a [HostedCard resource](#tag/Hosted-Cards). This value defaults to false. For more information on using the hosted payment form, see the [integration guide](/docs/converge/hosted-payments-overview).  In addition, if set to 'false', then digital wallets are not prompted in the hosted payments page (HPP).
     *
     * @return self
     */
    public function setDoCreateTransaction($do_create_transaction)
    {
        if (is_null($do_create_transaction)) {
            throw new \InvalidArgumentException('non-nullable do_create_transaction cannot be null');
        }
        $this->container['do_create_transaction'] = $do_create_transaction;

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
     * @param bool|null $do_capture This value will be passed along to any transaction created later in the payment flow. See doCapture on transaction
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
     * Gets do_three_d_secure
     *
     * @return bool|null
     */
    public function getDoThreeDSecure()
    {
        return $this->container['do_three_d_secure'];
    }

    /**
     * Sets do_three_d_secure
     *
     * @param bool|null $do_three_d_secure Determines whether or not the HPP will perform 3-D secure validation
     *
     * @return self
     */
    public function setDoThreeDSecure($do_three_d_secure)
    {
        if (is_null($do_three_d_secure)) {
            throw new \InvalidArgumentException('non-nullable do_three_d_secure cannot be null');
        }
        $this->container['do_three_d_secure'] = $do_three_d_secure;

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
            throw new \InvalidArgumentException('invalid length for $custom_reference when calling PaymentSessionInput., must be smaller than or equal to 255.');
        }

        $this->container['custom_reference'] = $custom_reference;

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


