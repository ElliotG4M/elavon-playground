<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @description A subscription associates a shopper with a plan, detailing exactly how and when the shopper will be billed
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'href' => 'string',
        'id' => 'string',
        'created_at' => '\DateTime',
        'modified_at' => '\DateTime',
        'merchant' => 'string',
        'plan' => 'string',
        'shopper' => 'string',
        'account' => 'string',
        'do_send_receipt' => 'string',
        'stored_card' => 'string',
        'bill_count' => 'int',
        'time_zone_id' => 'string',
        'first_bill_at' => '\DateTime',
        'next_bill_at' => '\DateTime',
        'previous_bill_at' => '\DateTime',
        'final_bill_at' => '\DateTime',
        'cancel_requested_at' => '\DateTime',
        'cancel_after_bill_number' => 'int',
        'next_bill_number' => 'int',
        'subscription_state' => '\Gear4music\ElavonPlayground\V1\EPG\Model\SubscriptionState',
        'failure_count' => 'int',
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
        'href' => 'url',
        'id' => null,
        'created_at' => 'date-time',
        'modified_at' => 'date-time',
        'merchant' => 'url',
        'plan' => 'url',
        'shopper' => 'url',
        'account' => 'url',
        'do_send_receipt' => null,
        'stored_card' => 'url',
        'bill_count' => 'int32',
        'time_zone_id' => null,
        'first_bill_at' => 'date',
        'next_bill_at' => 'date',
        'previous_bill_at' => 'date',
        'final_bill_at' => 'date',
        'cancel_requested_at' => 'date',
        'cancel_after_bill_number' => 'int32',
        'next_bill_number' => 'int32',
        'subscription_state' => null,
        'failure_count' => null,
        'custom_reference' => null,
        'custom_fields' => null
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
        'created_at' => 'createdAt',
        'modified_at' => 'modifiedAt',
        'merchant' => 'merchant',
        'plan' => 'plan',
        'shopper' => 'shopper',
        'account' => 'account',
        'do_send_receipt' => 'doSendReceipt',
        'stored_card' => 'storedCard',
        'bill_count' => 'billCount',
        'time_zone_id' => 'timeZoneId',
        'first_bill_at' => 'firstBillAt',
        'next_bill_at' => 'nextBillAt',
        'previous_bill_at' => 'previousBillAt',
        'final_bill_at' => 'finalBillAt',
        'cancel_requested_at' => 'cancelRequestedAt',
        'cancel_after_bill_number' => 'cancelAfterBillNumber',
        'next_bill_number' => 'nextBillNumber',
        'subscription_state' => 'subscriptionState',
        'failure_count' => 'failureCount',
        'custom_reference' => 'customReference',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'href' => 'setHref',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'modified_at' => 'setModifiedAt',
        'merchant' => 'setMerchant',
        'plan' => 'setPlan',
        'shopper' => 'setShopper',
        'account' => 'setAccount',
        'do_send_receipt' => 'setDoSendReceipt',
        'stored_card' => 'setStoredCard',
        'bill_count' => 'setBillCount',
        'time_zone_id' => 'setTimeZoneId',
        'first_bill_at' => 'setFirstBillAt',
        'next_bill_at' => 'setNextBillAt',
        'previous_bill_at' => 'setPreviousBillAt',
        'final_bill_at' => 'setFinalBillAt',
        'cancel_requested_at' => 'setCancelRequestedAt',
        'cancel_after_bill_number' => 'setCancelAfterBillNumber',
        'next_bill_number' => 'setNextBillNumber',
        'subscription_state' => 'setSubscriptionState',
        'failure_count' => 'setFailureCount',
        'custom_reference' => 'setCustomReference',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'href' => 'getHref',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'modified_at' => 'getModifiedAt',
        'merchant' => 'getMerchant',
        'plan' => 'getPlan',
        'shopper' => 'getShopper',
        'account' => 'getAccount',
        'do_send_receipt' => 'getDoSendReceipt',
        'stored_card' => 'getStoredCard',
        'bill_count' => 'getBillCount',
        'time_zone_id' => 'getTimeZoneId',
        'first_bill_at' => 'getFirstBillAt',
        'next_bill_at' => 'getNextBillAt',
        'previous_bill_at' => 'getPreviousBillAt',
        'final_bill_at' => 'getFinalBillAt',
        'cancel_requested_at' => 'getCancelRequestedAt',
        'cancel_after_bill_number' => 'getCancelAfterBillNumber',
        'next_bill_number' => 'getNextBillNumber',
        'subscription_state' => 'getSubscriptionState',
        'failure_count' => 'getFailureCount',
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

    const DO_SEND_RECEIPT_TRUE = 'true';
    const DO_SEND_RECEIPT_FALSE = 'false';
    const DO_SEND_RECEIPT__DEFAULT = 'DEFAULT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDoSendReceiptAllowableValues()
    {
        return [
            self::DO_SEND_RECEIPT_TRUE,
            self::DO_SEND_RECEIPT_FALSE,
            self::DO_SEND_RECEIPT__DEFAULT,
        ];
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['modified_at'] = $data['modified_at'] ?? null;
        $this->container['merchant'] = $data['merchant'] ?? null;
        $this->container['plan'] = $data['plan'] ?? null;
        $this->container['shopper'] = $data['shopper'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['do_send_receipt'] = $data['do_send_receipt'] ?? DO_SEND_RECEIPT__DEFAULT;
        $this->container['stored_card'] = $data['stored_card'] ?? null;
        $this->container['bill_count'] = $data['bill_count'] ?? null;
        $this->container['time_zone_id'] = $data['time_zone_id'] ?? null;
        $this->container['first_bill_at'] = $data['first_bill_at'] ?? null;
        $this->container['next_bill_at'] = $data['next_bill_at'] ?? null;
        $this->container['previous_bill_at'] = $data['previous_bill_at'] ?? null;
        $this->container['final_bill_at'] = $data['final_bill_at'] ?? null;
        $this->container['cancel_requested_at'] = $data['cancel_requested_at'] ?? null;
        $this->container['cancel_after_bill_number'] = $data['cancel_after_bill_number'] ?? null;
        $this->container['next_bill_number'] = $data['next_bill_number'] ?? null;
        $this->container['subscription_state'] = $data['subscription_state'] ?? null;
        $this->container['failure_count'] = $data['failure_count'] ?? null;
        $this->container['custom_reference'] = $data['custom_reference'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDoSendReceiptAllowableValues();
        if (!is_null($this->container['do_send_receipt']) && !in_array($this->container['do_send_receipt'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'do_send_receipt', must be one of '%s'",
                $this->container['do_send_receipt'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['bill_count']) && ($this->container['bill_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'bill_count', must be bigger than or equal to 1.";
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
     * @param string|null $href Subscription [Resource URL](#section/Overview/Values) (self link)
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
     * @param string|null $id Subscription [Resource ID](#section/Overview/Values) assigned by server.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Creation timestamp
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime|null $modified_at Modification timestamp
     *
     * @return self
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

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
     * Gets plan
     *
     * @return string|null
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     *
     * @param string|null $plan Plan [Resource URL](#section/Overview/Values)  Plan determines the billing details and their frequency
     *
     * @return self
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

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
        $this->container['shopper'] = $shopper;

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
     * @param string|null $account Account [Resource URL](#section/Overview/Values)
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets do_send_receipt
     *
     * @return string|null
     */
    public function getDoSendReceipt()
    {
        return $this->container['do_send_receipt'];
    }

    /**
     * Sets do_send_receipt
     *
     * @param string|null $do_send_receipt Send receipt to shopper's email address. The default value is 'DEFAULT', which will use the merchant setting for sending receipts for recurring sales
     *
     * @return self
     */
    public function setDoSendReceipt($do_send_receipt)
    {
        $allowedValues = $this->getDoSendReceiptAllowableValues();
        if (!is_null($do_send_receipt) && !in_array($do_send_receipt, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'do_send_receipt', must be one of '%s'",
                    $do_send_receipt,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['do_send_receipt'] = $do_send_receipt;

        return $this;
    }

    /**
     * Gets stored_card
     *
     * @return string|null
     */
    public function getStoredCard()
    {
        return $this->container['stored_card'];
    }

    /**
     * Sets stored_card
     *
     * @param string|null $stored_card StoredCard [Resource URL](#section/Overview/Values)  StoredCard to which all payments will be billed and which must belong to the provided Shopper
     *
     * @return self
     */
    public function setStoredCard($stored_card)
    {
        $this->container['stored_card'] = $stored_card;

        return $this;
    }

    /**
     * Gets bill_count
     *
     * @return int|null
     */
    public function getBillCount()
    {
        return $this->container['bill_count'];
    }

    /**
     * Sets bill_count
     *
     * @param int|null $bill_count The total number of bills. May only be provided if not defined in plan
     *
     * @return self
     */
    public function setBillCount($bill_count)
    {

        if (!is_null($bill_count) && ($bill_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $bill_count when calling Subscription., must be bigger than or equal to 1.');
        }

        $this->container['bill_count'] = $bill_count;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string|null $time_zone_id The time zone ID for date fields in the subscription.
     *
     * @return self
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets first_bill_at
     *
     * @return \DateTime|null
     */
    public function getFirstBillAt()
    {
        return $this->container['first_bill_at'];
    }

    /**
     * Sets first_bill_at
     *
     * @param \DateTime|null $first_bill_at First bill date, which anchors the billing interval and determines all future bill dates. For monthly and yearly billing intervals, if the first bill date occurs on the last day of the month then all future bill dates will be adjusted to occur on the last day of the month.
     *
     * @return self
     */
    public function setFirstBillAt($first_bill_at)
    {
        $this->container['first_bill_at'] = $first_bill_at;

        return $this;
    }

    /**
     * Gets next_bill_at
     *
     * @return \DateTime|null
     */
    public function getNextBillAt()
    {
        return $this->container['next_bill_at'];
    }

    /**
     * Sets next_bill_at
     *
     * @param \DateTime|null $next_bill_at Next bill date as calculated from the first or previous bill date according to the plan's billing interval
     *
     * @return self
     */
    public function setNextBillAt($next_bill_at)
    {
        $this->container['next_bill_at'] = $next_bill_at;

        return $this;
    }

    /**
     * Gets previous_bill_at
     *
     * @return \DateTime|null
     */
    public function getPreviousBillAt()
    {
        return $this->container['previous_bill_at'];
    }

    /**
     * Sets previous_bill_at
     *
     * @param \DateTime|null $previous_bill_at The most recent bill date, regardless of whether or not the payment has been successfully made
     *
     * @return self
     */
    public function setPreviousBillAt($previous_bill_at)
    {
        $this->container['previous_bill_at'] = $previous_bill_at;

        return $this;
    }

    /**
     * Gets final_bill_at
     *
     * @return \DateTime|null
     */
    public function getFinalBillAt()
    {
        return $this->container['final_bill_at'];
    }

    /**
     * Sets final_bill_at
     *
     * @param \DateTime|null $final_bill_at The date of final bill if not open ended payment plan
     *
     * @return self
     */
    public function setFinalBillAt($final_bill_at)
    {
        $this->container['final_bill_at'] = $final_bill_at;

        return $this;
    }

    /**
     * Gets cancel_requested_at
     *
     * @return \DateTime|null
     */
    public function getCancelRequestedAt()
    {
        return $this->container['cancel_requested_at'];
    }

    /**
     * Sets cancel_requested_at
     *
     * @param \DateTime|null $cancel_requested_at The date in which cancel was requested
     *
     * @return self
     */
    public function setCancelRequestedAt($cancel_requested_at)
    {
        $this->container['cancel_requested_at'] = $cancel_requested_at;

        return $this;
    }

    /**
     * Gets cancel_after_bill_number
     *
     * @return int|null
     */
    public function getCancelAfterBillNumber()
    {
        return $this->container['cancel_after_bill_number'];
    }

    /**
     * Sets cancel_after_bill_number
     *
     * @param int|null $cancel_after_bill_number The bill number after which no further billings will occur
     *
     * @return self
     */
    public function setCancelAfterBillNumber($cancel_after_bill_number)
    {
        $this->container['cancel_after_bill_number'] = $cancel_after_bill_number;

        return $this;
    }

    /**
     * Gets next_bill_number
     *
     * @return int|null
     */
    public function getNextBillNumber()
    {
        return $this->container['next_bill_number'];
    }

    /**
     * Sets next_bill_number
     *
     * @param int|null $next_bill_number The number of the next bill according to the plan's schedule
     *
     * @return self
     */
    public function setNextBillNumber($next_bill_number)
    {
        $this->container['next_bill_number'] = $next_bill_number;

        return $this;
    }

    /**
     * Gets subscription_state
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\SubscriptionState|null
     */
    public function getSubscriptionState()
    {
        return $this->container['subscription_state'];
    }

    /**
     * Sets subscription_state
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\SubscriptionState|null $subscription_state subscription_state
     *
     * @return self
     */
    public function setSubscriptionState($subscription_state)
    {
        $this->container['subscription_state'] = $subscription_state;

        return $this;
    }

    /**
     * Gets failure_count
     *
     * @return int|null
     */
    public function getFailureCount()
    {
        return $this->container['failure_count'];
    }

    /**
     * Sets failure_count
     *
     * @param int|null $failure_count The count of consecutive failures performing current payment
     *
     * @return self
     */
    public function setFailureCount($failure_count)
    {
        $this->container['failure_count'] = $failure_count;

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
        if (!is_null($custom_reference) && (mb_strlen($custom_reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $custom_reference when calling Subscription., must be smaller than or equal to 255.');
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


