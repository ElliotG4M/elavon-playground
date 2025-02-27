<?php
/**
 * Emv
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
 * Emv Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Gear4music\ElavonPlayground\V1\EPG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Emv implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Emv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tlv_request' => 'string',
        'keys' => '\Gear4music\ElavonPlayground\V1\EPG\Model\EmvKeys',
        'application_identifier_tag4_f' => 'string',
        'application_label_tag50' => 'string',
        'issuer_script_template_one_tag71' => 'string',
        'issuer_script_template_two_tag72' => 'string',
        'application_interchange_profile_tag82' => 'string',
        'dedicated_file_name_tag84' => 'string',
        'authorization_response_code_tag8_a' => 'string',
        'issuer_authentication_data_tag91' => 'string',
        'terminal_verification_results_tag95' => 'string',
        'transaction_date_tag9_a' => 'string',
        'transaction_status_information_tag9_b' => 'string',
        'transaction_type_tag9_c' => 'string',
        'application_expiration_date_tag5_f24' => 'string',
        'transaction_currency_code_tag5_f2_a' => 'string',
        'language_preference_tag5_f2_d' => 'string',
        'application_pan_sequence_number_tag5_f34' => 'string',
        'account_type_tag5_f57' => 'string',
        'authorized_amount_tag9_f02' => 'string',
        'other_amount_tag9_f03' => 'string',
        'application_identifier_terminal_tag9_f06' => 'string',
        'application_version_number_tag9_f09' => 'string',
        'issuer_application_data_tag9_f10' => 'string',
        'issuer_application_data_tag9_f12' => 'string',
        'terminal_country_code_tag9_f1_a' => 'string',
        'interface_device_serial_number_tag9_f1_e' => 'string',
        'transaction_time_tag9_f21' => 'string',
        'application_cryptogram_tag9_f26' => 'string',
        'cryptogram_information_data_tag9_f27' => 'string',
        'terminal_capabilities_tag9_f33' => 'string',
        'cardholder_verification_method_results_tag9_f34' => 'string',
        'terminal_type_tag9_f35' => 'string',
        'application_transaction_counter_tag9_f36' => 'string',
        'unpredictable_number_tag9_f37' => 'string',
        'transaction_sequence_counter_tag9_f41' => 'string',
        'transaction_category_code_tag9_f53' => 'string',
        'issuer_script_results_tag9_f5_b' => 'string',
        'third_party_data_tag9_f6_e' => 'string',
        'customer_exclusive_data_tag9_f7_c' => 'string',
        'cardholder_name_tag5_f20' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tlv_request' => null,
        'keys' => null,
        'application_identifier_tag4_f' => null,
        'application_label_tag50' => null,
        'issuer_script_template_one_tag71' => null,
        'issuer_script_template_two_tag72' => null,
        'application_interchange_profile_tag82' => null,
        'dedicated_file_name_tag84' => null,
        'authorization_response_code_tag8_a' => null,
        'issuer_authentication_data_tag91' => null,
        'terminal_verification_results_tag95' => null,
        'transaction_date_tag9_a' => null,
        'transaction_status_information_tag9_b' => null,
        'transaction_type_tag9_c' => null,
        'application_expiration_date_tag5_f24' => null,
        'transaction_currency_code_tag5_f2_a' => null,
        'language_preference_tag5_f2_d' => null,
        'application_pan_sequence_number_tag5_f34' => null,
        'account_type_tag5_f57' => null,
        'authorized_amount_tag9_f02' => null,
        'other_amount_tag9_f03' => null,
        'application_identifier_terminal_tag9_f06' => null,
        'application_version_number_tag9_f09' => null,
        'issuer_application_data_tag9_f10' => null,
        'issuer_application_data_tag9_f12' => null,
        'terminal_country_code_tag9_f1_a' => null,
        'interface_device_serial_number_tag9_f1_e' => null,
        'transaction_time_tag9_f21' => null,
        'application_cryptogram_tag9_f26' => null,
        'cryptogram_information_data_tag9_f27' => null,
        'terminal_capabilities_tag9_f33' => null,
        'cardholder_verification_method_results_tag9_f34' => null,
        'terminal_type_tag9_f35' => null,
        'application_transaction_counter_tag9_f36' => null,
        'unpredictable_number_tag9_f37' => null,
        'transaction_sequence_counter_tag9_f41' => null,
        'transaction_category_code_tag9_f53' => null,
        'issuer_script_results_tag9_f5_b' => null,
        'third_party_data_tag9_f6_e' => null,
        'customer_exclusive_data_tag9_f7_c' => null,
        'cardholder_name_tag5_f20' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tlv_request' => false,
        'keys' => false,
        'application_identifier_tag4_f' => false,
        'application_label_tag50' => false,
        'issuer_script_template_one_tag71' => false,
        'issuer_script_template_two_tag72' => false,
        'application_interchange_profile_tag82' => false,
        'dedicated_file_name_tag84' => false,
        'authorization_response_code_tag8_a' => false,
        'issuer_authentication_data_tag91' => false,
        'terminal_verification_results_tag95' => false,
        'transaction_date_tag9_a' => false,
        'transaction_status_information_tag9_b' => false,
        'transaction_type_tag9_c' => false,
        'application_expiration_date_tag5_f24' => false,
        'transaction_currency_code_tag5_f2_a' => false,
        'language_preference_tag5_f2_d' => false,
        'application_pan_sequence_number_tag5_f34' => false,
        'account_type_tag5_f57' => false,
        'authorized_amount_tag9_f02' => false,
        'other_amount_tag9_f03' => false,
        'application_identifier_terminal_tag9_f06' => false,
        'application_version_number_tag9_f09' => false,
        'issuer_application_data_tag9_f10' => false,
        'issuer_application_data_tag9_f12' => false,
        'terminal_country_code_tag9_f1_a' => false,
        'interface_device_serial_number_tag9_f1_e' => false,
        'transaction_time_tag9_f21' => false,
        'application_cryptogram_tag9_f26' => false,
        'cryptogram_information_data_tag9_f27' => false,
        'terminal_capabilities_tag9_f33' => false,
        'cardholder_verification_method_results_tag9_f34' => false,
        'terminal_type_tag9_f35' => false,
        'application_transaction_counter_tag9_f36' => false,
        'unpredictable_number_tag9_f37' => false,
        'transaction_sequence_counter_tag9_f41' => false,
        'transaction_category_code_tag9_f53' => false,
        'issuer_script_results_tag9_f5_b' => false,
        'third_party_data_tag9_f6_e' => false,
        'customer_exclusive_data_tag9_f7_c' => false,
        'cardholder_name_tag5_f20' => false
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
        'tlv_request' => 'tlvRequest',
        'keys' => 'keys',
        'application_identifier_tag4_f' => 'applicationIdentifierTag4F',
        'application_label_tag50' => 'applicationLabelTag50',
        'issuer_script_template_one_tag71' => 'issuerScriptTemplateOneTag71',
        'issuer_script_template_two_tag72' => 'issuerScriptTemplateTwoTag72',
        'application_interchange_profile_tag82' => 'applicationInterchangeProfileTag82',
        'dedicated_file_name_tag84' => 'dedicatedFileNameTag84',
        'authorization_response_code_tag8_a' => 'authorizationResponseCodeTag8A',
        'issuer_authentication_data_tag91' => 'issuerAuthenticationDataTag91',
        'terminal_verification_results_tag95' => 'terminalVerificationResultsTag95',
        'transaction_date_tag9_a' => 'transactionDateTag9A',
        'transaction_status_information_tag9_b' => 'transactionStatusInformationTag9B',
        'transaction_type_tag9_c' => 'transactionTypeTag9C',
        'application_expiration_date_tag5_f24' => 'applicationExpirationDateTag5F24',
        'transaction_currency_code_tag5_f2_a' => 'transactionCurrencyCodeTag5F2A',
        'language_preference_tag5_f2_d' => 'languagePreferenceTag5F2D',
        'application_pan_sequence_number_tag5_f34' => 'applicationPanSequenceNumberTag5F34',
        'account_type_tag5_f57' => 'accountTypeTag5F57',
        'authorized_amount_tag9_f02' => 'authorizedAmountTag9F02',
        'other_amount_tag9_f03' => 'otherAmountTag9F03',
        'application_identifier_terminal_tag9_f06' => 'applicationIdentifierTerminalTag9F06',
        'application_version_number_tag9_f09' => 'applicationVersionNumberTag9F09',
        'issuer_application_data_tag9_f10' => 'issuerApplicationDataTag9F10',
        'issuer_application_data_tag9_f12' => 'issuerApplicationDataTag9F12',
        'terminal_country_code_tag9_f1_a' => 'terminalCountryCodeTag9F1A',
        'interface_device_serial_number_tag9_f1_e' => 'interfaceDeviceSerialNumberTag9F1E',
        'transaction_time_tag9_f21' => 'transactionTimeTag9F21',
        'application_cryptogram_tag9_f26' => 'applicationCryptogramTag9F26',
        'cryptogram_information_data_tag9_f27' => 'cryptogramInformationDataTag9F27',
        'terminal_capabilities_tag9_f33' => 'terminalCapabilitiesTag9F33',
        'cardholder_verification_method_results_tag9_f34' => 'cardholderVerificationMethodResultsTag9F34',
        'terminal_type_tag9_f35' => 'terminalTypeTag9F35',
        'application_transaction_counter_tag9_f36' => 'applicationTransactionCounterTag9F36',
        'unpredictable_number_tag9_f37' => 'unpredictableNumberTag9F37',
        'transaction_sequence_counter_tag9_f41' => 'transactionSequenceCounterTag9F41',
        'transaction_category_code_tag9_f53' => 'transactionCategoryCodeTag9F53',
        'issuer_script_results_tag9_f5_b' => 'issuerScriptResultsTag9F5B',
        'third_party_data_tag9_f6_e' => 'thirdPartyDataTag9F6E',
        'customer_exclusive_data_tag9_f7_c' => 'customerExclusiveDataTag9F7C',
        'cardholder_name_tag5_f20' => 'cardholderNameTag5F20'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tlv_request' => 'setTlvRequest',
        'keys' => 'setKeys',
        'application_identifier_tag4_f' => 'setApplicationIdentifierTag4F',
        'application_label_tag50' => 'setApplicationLabelTag50',
        'issuer_script_template_one_tag71' => 'setIssuerScriptTemplateOneTag71',
        'issuer_script_template_two_tag72' => 'setIssuerScriptTemplateTwoTag72',
        'application_interchange_profile_tag82' => 'setApplicationInterchangeProfileTag82',
        'dedicated_file_name_tag84' => 'setDedicatedFileNameTag84',
        'authorization_response_code_tag8_a' => 'setAuthorizationResponseCodeTag8A',
        'issuer_authentication_data_tag91' => 'setIssuerAuthenticationDataTag91',
        'terminal_verification_results_tag95' => 'setTerminalVerificationResultsTag95',
        'transaction_date_tag9_a' => 'setTransactionDateTag9A',
        'transaction_status_information_tag9_b' => 'setTransactionStatusInformationTag9B',
        'transaction_type_tag9_c' => 'setTransactionTypeTag9C',
        'application_expiration_date_tag5_f24' => 'setApplicationExpirationDateTag5F24',
        'transaction_currency_code_tag5_f2_a' => 'setTransactionCurrencyCodeTag5F2A',
        'language_preference_tag5_f2_d' => 'setLanguagePreferenceTag5F2D',
        'application_pan_sequence_number_tag5_f34' => 'setApplicationPanSequenceNumberTag5F34',
        'account_type_tag5_f57' => 'setAccountTypeTag5F57',
        'authorized_amount_tag9_f02' => 'setAuthorizedAmountTag9F02',
        'other_amount_tag9_f03' => 'setOtherAmountTag9F03',
        'application_identifier_terminal_tag9_f06' => 'setApplicationIdentifierTerminalTag9F06',
        'application_version_number_tag9_f09' => 'setApplicationVersionNumberTag9F09',
        'issuer_application_data_tag9_f10' => 'setIssuerApplicationDataTag9F10',
        'issuer_application_data_tag9_f12' => 'setIssuerApplicationDataTag9F12',
        'terminal_country_code_tag9_f1_a' => 'setTerminalCountryCodeTag9F1A',
        'interface_device_serial_number_tag9_f1_e' => 'setInterfaceDeviceSerialNumberTag9F1E',
        'transaction_time_tag9_f21' => 'setTransactionTimeTag9F21',
        'application_cryptogram_tag9_f26' => 'setApplicationCryptogramTag9F26',
        'cryptogram_information_data_tag9_f27' => 'setCryptogramInformationDataTag9F27',
        'terminal_capabilities_tag9_f33' => 'setTerminalCapabilitiesTag9F33',
        'cardholder_verification_method_results_tag9_f34' => 'setCardholderVerificationMethodResultsTag9F34',
        'terminal_type_tag9_f35' => 'setTerminalTypeTag9F35',
        'application_transaction_counter_tag9_f36' => 'setApplicationTransactionCounterTag9F36',
        'unpredictable_number_tag9_f37' => 'setUnpredictableNumberTag9F37',
        'transaction_sequence_counter_tag9_f41' => 'setTransactionSequenceCounterTag9F41',
        'transaction_category_code_tag9_f53' => 'setTransactionCategoryCodeTag9F53',
        'issuer_script_results_tag9_f5_b' => 'setIssuerScriptResultsTag9F5B',
        'third_party_data_tag9_f6_e' => 'setThirdPartyDataTag9F6E',
        'customer_exclusive_data_tag9_f7_c' => 'setCustomerExclusiveDataTag9F7C',
        'cardholder_name_tag5_f20' => 'setCardholderNameTag5F20'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tlv_request' => 'getTlvRequest',
        'keys' => 'getKeys',
        'application_identifier_tag4_f' => 'getApplicationIdentifierTag4F',
        'application_label_tag50' => 'getApplicationLabelTag50',
        'issuer_script_template_one_tag71' => 'getIssuerScriptTemplateOneTag71',
        'issuer_script_template_two_tag72' => 'getIssuerScriptTemplateTwoTag72',
        'application_interchange_profile_tag82' => 'getApplicationInterchangeProfileTag82',
        'dedicated_file_name_tag84' => 'getDedicatedFileNameTag84',
        'authorization_response_code_tag8_a' => 'getAuthorizationResponseCodeTag8A',
        'issuer_authentication_data_tag91' => 'getIssuerAuthenticationDataTag91',
        'terminal_verification_results_tag95' => 'getTerminalVerificationResultsTag95',
        'transaction_date_tag9_a' => 'getTransactionDateTag9A',
        'transaction_status_information_tag9_b' => 'getTransactionStatusInformationTag9B',
        'transaction_type_tag9_c' => 'getTransactionTypeTag9C',
        'application_expiration_date_tag5_f24' => 'getApplicationExpirationDateTag5F24',
        'transaction_currency_code_tag5_f2_a' => 'getTransactionCurrencyCodeTag5F2A',
        'language_preference_tag5_f2_d' => 'getLanguagePreferenceTag5F2D',
        'application_pan_sequence_number_tag5_f34' => 'getApplicationPanSequenceNumberTag5F34',
        'account_type_tag5_f57' => 'getAccountTypeTag5F57',
        'authorized_amount_tag9_f02' => 'getAuthorizedAmountTag9F02',
        'other_amount_tag9_f03' => 'getOtherAmountTag9F03',
        'application_identifier_terminal_tag9_f06' => 'getApplicationIdentifierTerminalTag9F06',
        'application_version_number_tag9_f09' => 'getApplicationVersionNumberTag9F09',
        'issuer_application_data_tag9_f10' => 'getIssuerApplicationDataTag9F10',
        'issuer_application_data_tag9_f12' => 'getIssuerApplicationDataTag9F12',
        'terminal_country_code_tag9_f1_a' => 'getTerminalCountryCodeTag9F1A',
        'interface_device_serial_number_tag9_f1_e' => 'getInterfaceDeviceSerialNumberTag9F1E',
        'transaction_time_tag9_f21' => 'getTransactionTimeTag9F21',
        'application_cryptogram_tag9_f26' => 'getApplicationCryptogramTag9F26',
        'cryptogram_information_data_tag9_f27' => 'getCryptogramInformationDataTag9F27',
        'terminal_capabilities_tag9_f33' => 'getTerminalCapabilitiesTag9F33',
        'cardholder_verification_method_results_tag9_f34' => 'getCardholderVerificationMethodResultsTag9F34',
        'terminal_type_tag9_f35' => 'getTerminalTypeTag9F35',
        'application_transaction_counter_tag9_f36' => 'getApplicationTransactionCounterTag9F36',
        'unpredictable_number_tag9_f37' => 'getUnpredictableNumberTag9F37',
        'transaction_sequence_counter_tag9_f41' => 'getTransactionSequenceCounterTag9F41',
        'transaction_category_code_tag9_f53' => 'getTransactionCategoryCodeTag9F53',
        'issuer_script_results_tag9_f5_b' => 'getIssuerScriptResultsTag9F5B',
        'third_party_data_tag9_f6_e' => 'getThirdPartyDataTag9F6E',
        'customer_exclusive_data_tag9_f7_c' => 'getCustomerExclusiveDataTag9F7C',
        'cardholder_name_tag5_f20' => 'getCardholderNameTag5F20'
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
        $this->setIfExists('tlv_request', $data ?? [], null);
        $this->setIfExists('keys', $data ?? [], null);
        $this->setIfExists('application_identifier_tag4_f', $data ?? [], null);
        $this->setIfExists('application_label_tag50', $data ?? [], null);
        $this->setIfExists('issuer_script_template_one_tag71', $data ?? [], null);
        $this->setIfExists('issuer_script_template_two_tag72', $data ?? [], null);
        $this->setIfExists('application_interchange_profile_tag82', $data ?? [], null);
        $this->setIfExists('dedicated_file_name_tag84', $data ?? [], null);
        $this->setIfExists('authorization_response_code_tag8_a', $data ?? [], null);
        $this->setIfExists('issuer_authentication_data_tag91', $data ?? [], null);
        $this->setIfExists('terminal_verification_results_tag95', $data ?? [], null);
        $this->setIfExists('transaction_date_tag9_a', $data ?? [], null);
        $this->setIfExists('transaction_status_information_tag9_b', $data ?? [], null);
        $this->setIfExists('transaction_type_tag9_c', $data ?? [], null);
        $this->setIfExists('application_expiration_date_tag5_f24', $data ?? [], null);
        $this->setIfExists('transaction_currency_code_tag5_f2_a', $data ?? [], null);
        $this->setIfExists('language_preference_tag5_f2_d', $data ?? [], null);
        $this->setIfExists('application_pan_sequence_number_tag5_f34', $data ?? [], null);
        $this->setIfExists('account_type_tag5_f57', $data ?? [], null);
        $this->setIfExists('authorized_amount_tag9_f02', $data ?? [], null);
        $this->setIfExists('other_amount_tag9_f03', $data ?? [], null);
        $this->setIfExists('application_identifier_terminal_tag9_f06', $data ?? [], null);
        $this->setIfExists('application_version_number_tag9_f09', $data ?? [], null);
        $this->setIfExists('issuer_application_data_tag9_f10', $data ?? [], null);
        $this->setIfExists('issuer_application_data_tag9_f12', $data ?? [], null);
        $this->setIfExists('terminal_country_code_tag9_f1_a', $data ?? [], null);
        $this->setIfExists('interface_device_serial_number_tag9_f1_e', $data ?? [], null);
        $this->setIfExists('transaction_time_tag9_f21', $data ?? [], null);
        $this->setIfExists('application_cryptogram_tag9_f26', $data ?? [], null);
        $this->setIfExists('cryptogram_information_data_tag9_f27', $data ?? [], null);
        $this->setIfExists('terminal_capabilities_tag9_f33', $data ?? [], null);
        $this->setIfExists('cardholder_verification_method_results_tag9_f34', $data ?? [], null);
        $this->setIfExists('terminal_type_tag9_f35', $data ?? [], null);
        $this->setIfExists('application_transaction_counter_tag9_f36', $data ?? [], null);
        $this->setIfExists('unpredictable_number_tag9_f37', $data ?? [], null);
        $this->setIfExists('transaction_sequence_counter_tag9_f41', $data ?? [], null);
        $this->setIfExists('transaction_category_code_tag9_f53', $data ?? [], null);
        $this->setIfExists('issuer_script_results_tag9_f5_b', $data ?? [], null);
        $this->setIfExists('third_party_data_tag9_f6_e', $data ?? [], null);
        $this->setIfExists('customer_exclusive_data_tag9_f7_c', $data ?? [], null);
        $this->setIfExists('cardholder_name_tag5_f20', $data ?? [], null);
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

        if ($this->container['tlv_request'] === null) {
            $invalidProperties[] = "'tlv_request' can't be null";
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
     * Gets tlv_request
     *
     * @return string
     */
    public function getTlvRequest()
    {
        return $this->container['tlv_request'];
    }

    /**
     * Sets tlv_request
     *
     * @param string $tlv_request TLV-formatted string, length must be at least 6
     *
     * @return self
     */
    public function setTlvRequest($tlv_request)
    {
        if (is_null($tlv_request)) {
            throw new \InvalidArgumentException('non-nullable tlv_request cannot be null');
        }
        $this->container['tlv_request'] = $tlv_request;

        return $this;
    }

    /**
     * Gets keys
     *
     * @return \Gear4music\ElavonPlayground\V1\EPG\Model\EmvKeys|null
     */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
     * Sets keys
     *
     * @param \Gear4music\ElavonPlayground\V1\EPG\Model\EmvKeys|null $keys Date information for Emv keys
     *
     * @return self
     */
    public function setKeys($keys)
    {
        if (is_null($keys)) {
            throw new \InvalidArgumentException('non-nullable keys cannot be null');
        }
        $this->container['keys'] = $keys;

        return $this;
    }

    /**
     * Gets application_identifier_tag4_f
     *
     * @return string|null
     */
    public function getApplicationIdentifierTag4F()
    {
        return $this->container['application_identifier_tag4_f'];
    }

    /**
     * Sets application_identifier_tag4_f
     *
     * @param string|null $application_identifier_tag4_f EMV Tag 4F - identifies the application as described in [ISO 7816-5]
     *
     * @return self
     */
    public function setApplicationIdentifierTag4F($application_identifier_tag4_f)
    {
        if (is_null($application_identifier_tag4_f)) {
            throw new \InvalidArgumentException('non-nullable application_identifier_tag4_f cannot be null');
        }
        $this->container['application_identifier_tag4_f'] = $application_identifier_tag4_f;

        return $this;
    }

    /**
     * Gets application_label_tag50
     *
     * @return string|null
     */
    public function getApplicationLabelTag50()
    {
        return $this->container['application_label_tag50'];
    }

    /**
     * Sets application_label_tag50
     *
     * @param string|null $application_label_tag50 EMV Tag 50 - this tag typically contains a label or name associated with the card application
     *
     * @return self
     */
    public function setApplicationLabelTag50($application_label_tag50)
    {
        if (is_null($application_label_tag50)) {
            throw new \InvalidArgumentException('non-nullable application_label_tag50 cannot be null');
        }
        $this->container['application_label_tag50'] = $application_label_tag50;

        return $this;
    }

    /**
     * Gets issuer_script_template_one_tag71
     *
     * @return string|null
     */
    public function getIssuerScriptTemplateOneTag71()
    {
        return $this->container['issuer_script_template_one_tag71'];
    }

    /**
     * Sets issuer_script_template_one_tag71
     *
     * @param string|null $issuer_script_template_one_tag71 EMV Tag 71 - value returned from authorization
     *
     * @return self
     */
    public function setIssuerScriptTemplateOneTag71($issuer_script_template_one_tag71)
    {
        if (is_null($issuer_script_template_one_tag71)) {
            throw new \InvalidArgumentException('non-nullable issuer_script_template_one_tag71 cannot be null');
        }
        $this->container['issuer_script_template_one_tag71'] = $issuer_script_template_one_tag71;

        return $this;
    }

    /**
     * Gets issuer_script_template_two_tag72
     *
     * @return string|null
     */
    public function getIssuerScriptTemplateTwoTag72()
    {
        return $this->container['issuer_script_template_two_tag72'];
    }

    /**
     * Sets issuer_script_template_two_tag72
     *
     * @param string|null $issuer_script_template_two_tag72 EMV Tag 72 - value returned from authorization
     *
     * @return self
     */
    public function setIssuerScriptTemplateTwoTag72($issuer_script_template_two_tag72)
    {
        if (is_null($issuer_script_template_two_tag72)) {
            throw new \InvalidArgumentException('non-nullable issuer_script_template_two_tag72 cannot be null');
        }
        $this->container['issuer_script_template_two_tag72'] = $issuer_script_template_two_tag72;

        return $this;
    }

    /**
     * Gets application_interchange_profile_tag82
     *
     * @return string|null
     */
    public function getApplicationInterchangeProfileTag82()
    {
        return $this->container['application_interchange_profile_tag82'];
    }

    /**
     * Sets application_interchange_profile_tag82
     *
     * @param string|null $application_interchange_profile_tag82 EMV Tag 82 - value used to indicate the capabilities of the card to support specific functions within the application
     *
     * @return self
     */
    public function setApplicationInterchangeProfileTag82($application_interchange_profile_tag82)
    {
        if (is_null($application_interchange_profile_tag82)) {
            throw new \InvalidArgumentException('non-nullable application_interchange_profile_tag82 cannot be null');
        }
        $this->container['application_interchange_profile_tag82'] = $application_interchange_profile_tag82;

        return $this;
    }

    /**
     * Gets dedicated_file_name_tag84
     *
     * @return string|null
     */
    public function getDedicatedFileNameTag84()
    {
        return $this->container['dedicated_file_name_tag84'];
    }

    /**
     * Sets dedicated_file_name_tag84
     *
     * @param string|null $dedicated_file_name_tag84 EMV Tag 84 - indicates the selected Application Identifier (AID) used in the transaction request
     *
     * @return self
     */
    public function setDedicatedFileNameTag84($dedicated_file_name_tag84)
    {
        if (is_null($dedicated_file_name_tag84)) {
            throw new \InvalidArgumentException('non-nullable dedicated_file_name_tag84 cannot be null');
        }
        $this->container['dedicated_file_name_tag84'] = $dedicated_file_name_tag84;

        return $this;
    }

    /**
     * Gets authorization_response_code_tag8_a
     *
     * @return string|null
     */
    public function getAuthorizationResponseCodeTag8A()
    {
        return $this->container['authorization_response_code_tag8_a'];
    }

    /**
     * Sets authorization_response_code_tag8_a
     *
     * @param string|null $authorization_response_code_tag8_a EMV Tag 8A - generated by the authorization authority for an approved transaction
     *
     * @return self
     */
    public function setAuthorizationResponseCodeTag8A($authorization_response_code_tag8_a)
    {
        if (is_null($authorization_response_code_tag8_a)) {
            throw new \InvalidArgumentException('non-nullable authorization_response_code_tag8_a cannot be null');
        }
        $this->container['authorization_response_code_tag8_a'] = $authorization_response_code_tag8_a;

        return $this;
    }

    /**
     * Gets issuer_authentication_data_tag91
     *
     * @return string|null
     */
    public function getIssuerAuthenticationDataTag91()
    {
        return $this->container['issuer_authentication_data_tag91'];
    }

    /**
     * Sets issuer_authentication_data_tag91
     *
     * @param string|null $issuer_authentication_data_tag91 EMV Tag 91 - contains data sent to the chip card for online issuer authentication
     *
     * @return self
     */
    public function setIssuerAuthenticationDataTag91($issuer_authentication_data_tag91)
    {
        if (is_null($issuer_authentication_data_tag91)) {
            throw new \InvalidArgumentException('non-nullable issuer_authentication_data_tag91 cannot be null');
        }
        $this->container['issuer_authentication_data_tag91'] = $issuer_authentication_data_tag91;

        return $this;
    }

    /**
     * Gets terminal_verification_results_tag95
     *
     * @return string|null
     */
    public function getTerminalVerificationResultsTag95()
    {
        return $this->container['terminal_verification_results_tag95'];
    }

    /**
     * Sets terminal_verification_results_tag95
     *
     * @param string|null $terminal_verification_results_tag95 EMV Tag 95 - indicates the status of the different functions as seen from the terminal
     *
     * @return self
     */
    public function setTerminalVerificationResultsTag95($terminal_verification_results_tag95)
    {
        if (is_null($terminal_verification_results_tag95)) {
            throw new \InvalidArgumentException('non-nullable terminal_verification_results_tag95 cannot be null');
        }
        $this->container['terminal_verification_results_tag95'] = $terminal_verification_results_tag95;

        return $this;
    }

    /**
     * Gets transaction_date_tag9_a
     *
     * @return string|null
     */
    public function getTransactionDateTag9A()
    {
        return $this->container['transaction_date_tag9_a'];
    }

    /**
     * Sets transaction_date_tag9_a
     *
     * @param string|null $transaction_date_tag9_a EMV Tag 9A - used to indicate the local date that the transaction was authorized
     *
     * @return self
     */
    public function setTransactionDateTag9A($transaction_date_tag9_a)
    {
        if (is_null($transaction_date_tag9_a)) {
            throw new \InvalidArgumentException('non-nullable transaction_date_tag9_a cannot be null');
        }
        $this->container['transaction_date_tag9_a'] = $transaction_date_tag9_a;

        return $this;
    }

    /**
     * Gets transaction_status_information_tag9_b
     *
     * @return string|null
     */
    public function getTransactionStatusInformationTag9B()
    {
        return $this->container['transaction_status_information_tag9_b'];
    }

    /**
     * Sets transaction_status_information_tag9_b
     *
     * @param string|null $transaction_status_information_tag9_b EMV Tag 9B - indicates the functions performed in a transaction
     *
     * @return self
     */
    public function setTransactionStatusInformationTag9B($transaction_status_information_tag9_b)
    {
        if (is_null($transaction_status_information_tag9_b)) {
            throw new \InvalidArgumentException('non-nullable transaction_status_information_tag9_b cannot be null');
        }
        $this->container['transaction_status_information_tag9_b'] = $transaction_status_information_tag9_b;

        return $this;
    }

    /**
     * Gets transaction_type_tag9_c
     *
     * @return string|null
     */
    public function getTransactionTypeTag9C()
    {
        return $this->container['transaction_type_tag9_c'];
    }

    /**
     * Sets transaction_type_tag9_c
     *
     * @param string|null $transaction_type_tag9_c EMV Tag 9C - indicates the type of financial transaction, represented by the first two digits of the ISO 8583 processing code
     *
     * @return self
     */
    public function setTransactionTypeTag9C($transaction_type_tag9_c)
    {
        if (is_null($transaction_type_tag9_c)) {
            throw new \InvalidArgumentException('non-nullable transaction_type_tag9_c cannot be null');
        }
        $this->container['transaction_type_tag9_c'] = $transaction_type_tag9_c;

        return $this;
    }

    /**
     * Gets application_expiration_date_tag5_f24
     *
     * @return string|null
     */
    public function getApplicationExpirationDateTag5F24()
    {
        return $this->container['application_expiration_date_tag5_f24'];
    }

    /**
     * Sets application_expiration_date_tag5_f24
     *
     * @param string|null $application_expiration_date_tag5_f24 EMV Tag 5F24 - used to identify the date after which the application expires
     *
     * @return self
     */
    public function setApplicationExpirationDateTag5F24($application_expiration_date_tag5_f24)
    {
        if (is_null($application_expiration_date_tag5_f24)) {
            throw new \InvalidArgumentException('non-nullable application_expiration_date_tag5_f24 cannot be null');
        }
        $this->container['application_expiration_date_tag5_f24'] = $application_expiration_date_tag5_f24;

        return $this;
    }

    /**
     * Gets transaction_currency_code_tag5_f2_a
     *
     * @return string|null
     */
    public function getTransactionCurrencyCodeTag5F2A()
    {
        return $this->container['transaction_currency_code_tag5_f2_a'];
    }

    /**
     * Sets transaction_currency_code_tag5_f2_a
     *
     * @param string|null $transaction_currency_code_tag5_f2_a EMV Tag 5F2A - used to indicate the currency code of the transaction according to the ISO 4217 standard
     *
     * @return self
     */
    public function setTransactionCurrencyCodeTag5F2A($transaction_currency_code_tag5_f2_a)
    {
        if (is_null($transaction_currency_code_tag5_f2_a)) {
            throw new \InvalidArgumentException('non-nullable transaction_currency_code_tag5_f2_a cannot be null');
        }
        $this->container['transaction_currency_code_tag5_f2_a'] = $transaction_currency_code_tag5_f2_a;

        return $this;
    }

    /**
     * Gets language_preference_tag5_f2_d
     *
     * @return string|null
     */
    public function getLanguagePreferenceTag5F2D()
    {
        return $this->container['language_preference_tag5_f2_d'];
    }

    /**
     * Sets language_preference_tag5_f2_d
     *
     * @param string|null $language_preference_tag5_f2_d EMV Tag 5F2D - used to identify the language preference
     *
     * @return self
     */
    public function setLanguagePreferenceTag5F2D($language_preference_tag5_f2_d)
    {
        if (is_null($language_preference_tag5_f2_d)) {
            throw new \InvalidArgumentException('non-nullable language_preference_tag5_f2_d cannot be null');
        }
        $this->container['language_preference_tag5_f2_d'] = $language_preference_tag5_f2_d;

        return $this;
    }

    /**
     * Gets application_pan_sequence_number_tag5_f34
     *
     * @return string|null
     */
    public function getApplicationPanSequenceNumberTag5F34()
    {
        return $this->container['application_pan_sequence_number_tag5_f34'];
    }

    /**
     * Sets application_pan_sequence_number_tag5_f34
     *
     * @param string|null $application_pan_sequence_number_tag5_f34 EMV Tag 5F34 - used to differentiate chip cards using the same Primary Account Number (PAN)
     *
     * @return self
     */
    public function setApplicationPanSequenceNumberTag5F34($application_pan_sequence_number_tag5_f34)
    {
        if (is_null($application_pan_sequence_number_tag5_f34)) {
            throw new \InvalidArgumentException('non-nullable application_pan_sequence_number_tag5_f34 cannot be null');
        }
        $this->container['application_pan_sequence_number_tag5_f34'] = $application_pan_sequence_number_tag5_f34;

        return $this;
    }

    /**
     * Gets account_type_tag5_f57
     *
     * @return string|null
     */
    public function getAccountTypeTag5F57()
    {
        return $this->container['account_type_tag5_f57'];
    }

    /**
     * Sets account_type_tag5_f57
     *
     * @param string|null $account_type_tag5_f57 EMV Tag 5F57 - used to identify the account type
     *
     * @return self
     */
    public function setAccountTypeTag5F57($account_type_tag5_f57)
    {
        if (is_null($account_type_tag5_f57)) {
            throw new \InvalidArgumentException('non-nullable account_type_tag5_f57 cannot be null');
        }
        $this->container['account_type_tag5_f57'] = $account_type_tag5_f57;

        return $this;
    }

    /**
     * Gets authorized_amount_tag9_f02
     *
     * @return string|null
     */
    public function getAuthorizedAmountTag9F02()
    {
        return $this->container['authorized_amount_tag9_f02'];
    }

    /**
     * Sets authorized_amount_tag9_f02
     *
     * @param string|null $authorized_amount_tag9_f02 EMV Tag 9F02 - used to indicate the authorized amount of the transaction (excluding adjustments)
     *
     * @return self
     */
    public function setAuthorizedAmountTag9F02($authorized_amount_tag9_f02)
    {
        if (is_null($authorized_amount_tag9_f02)) {
            throw new \InvalidArgumentException('non-nullable authorized_amount_tag9_f02 cannot be null');
        }
        $this->container['authorized_amount_tag9_f02'] = $authorized_amount_tag9_f02;

        return $this;
    }

    /**
     * Gets other_amount_tag9_f03
     *
     * @return string|null
     */
    public function getOtherAmountTag9F03()
    {
        return $this->container['other_amount_tag9_f03'];
    }

    /**
     * Sets other_amount_tag9_f03
     *
     * @param string|null $other_amount_tag9_f03 EMV Tag 9F03 - used to indicate a secondary “Cashback” amount associated with the transaction
     *
     * @return self
     */
    public function setOtherAmountTag9F03($other_amount_tag9_f03)
    {
        if (is_null($other_amount_tag9_f03)) {
            throw new \InvalidArgumentException('non-nullable other_amount_tag9_f03 cannot be null');
        }
        $this->container['other_amount_tag9_f03'] = $other_amount_tag9_f03;

        return $this;
    }

    /**
     * Gets application_identifier_terminal_tag9_f06
     *
     * @return string|null
     */
    public function getApplicationIdentifierTerminalTag9F06()
    {
        return $this->container['application_identifier_terminal_tag9_f06'];
    }

    /**
     * Sets application_identifier_terminal_tag9_f06
     *
     * @param string|null $application_identifier_terminal_tag9_f06 EMV Tag 9F06 - used to identify the Application Identifier (AID), Terminal used in the transaction request
     *
     * @return self
     */
    public function setApplicationIdentifierTerminalTag9F06($application_identifier_terminal_tag9_f06)
    {
        if (is_null($application_identifier_terminal_tag9_f06)) {
            throw new \InvalidArgumentException('non-nullable application_identifier_terminal_tag9_f06 cannot be null');
        }
        $this->container['application_identifier_terminal_tag9_f06'] = $application_identifier_terminal_tag9_f06;

        return $this;
    }

    /**
     * Gets application_version_number_tag9_f09
     *
     * @return string|null
     */
    public function getApplicationVersionNumberTag9F09()
    {
        return $this->container['application_version_number_tag9_f09'];
    }

    /**
     * Sets application_version_number_tag9_f09
     *
     * @param string|null $application_version_number_tag9_f09 EMV Tag 9F09 - taken from the application (application specific data)
     *
     * @return self
     */
    public function setApplicationVersionNumberTag9F09($application_version_number_tag9_f09)
    {
        if (is_null($application_version_number_tag9_f09)) {
            throw new \InvalidArgumentException('non-nullable application_version_number_tag9_f09 cannot be null');
        }
        $this->container['application_version_number_tag9_f09'] = $application_version_number_tag9_f09;

        return $this;
    }

    /**
     * Gets issuer_application_data_tag9_f10
     *
     * @return string|null
     */
    public function getIssuerApplicationDataTag9F10()
    {
        return $this->container['issuer_application_data_tag9_f10'];
    }

    /**
     * Sets issuer_application_data_tag9_f10
     *
     * @param string|null $issuer_application_data_tag9_f10 EMV Tag 9F10 - used to send proprietary application data to the issuer in an online transaction
     *
     * @return self
     */
    public function setIssuerApplicationDataTag9F10($issuer_application_data_tag9_f10)
    {
        if (is_null($issuer_application_data_tag9_f10)) {
            throw new \InvalidArgumentException('non-nullable issuer_application_data_tag9_f10 cannot be null');
        }
        $this->container['issuer_application_data_tag9_f10'] = $issuer_application_data_tag9_f10;

        return $this;
    }

    /**
     * Gets issuer_application_data_tag9_f12
     *
     * @return string|null
     */
    public function getIssuerApplicationDataTag9F12()
    {
        return $this->container['issuer_application_data_tag9_f12'];
    }

    /**
     * Sets issuer_application_data_tag9_f12
     *
     * @param string|null $issuer_application_data_tag9_f12 EMV Tag 9F12 - preferred mnemonic associated with the AID
     *
     * @return self
     */
    public function setIssuerApplicationDataTag9F12($issuer_application_data_tag9_f12)
    {
        if (is_null($issuer_application_data_tag9_f12)) {
            throw new \InvalidArgumentException('non-nullable issuer_application_data_tag9_f12 cannot be null');
        }
        $this->container['issuer_application_data_tag9_f12'] = $issuer_application_data_tag9_f12;

        return $this;
    }

    /**
     * Gets terminal_country_code_tag9_f1_a
     *
     * @return string|null
     */
    public function getTerminalCountryCodeTag9F1A()
    {
        return $this->container['terminal_country_code_tag9_f1_a'];
    }

    /**
     * Sets terminal_country_code_tag9_f1_a
     *
     * @param string|null $terminal_country_code_tag9_f1_a EMV Tag 9F1A - used to identify the country code where the terminal is located
     *
     * @return self
     */
    public function setTerminalCountryCodeTag9F1A($terminal_country_code_tag9_f1_a)
    {
        if (is_null($terminal_country_code_tag9_f1_a)) {
            throw new \InvalidArgumentException('non-nullable terminal_country_code_tag9_f1_a cannot be null');
        }
        $this->container['terminal_country_code_tag9_f1_a'] = $terminal_country_code_tag9_f1_a;

        return $this;
    }

    /**
     * Gets interface_device_serial_number_tag9_f1_e
     *
     * @return string|null
     */
    public function getInterfaceDeviceSerialNumberTag9F1E()
    {
        return $this->container['interface_device_serial_number_tag9_f1_e'];
    }

    /**
     * Sets interface_device_serial_number_tag9_f1_e
     *
     * @param string|null $interface_device_serial_number_tag9_f1_e EMV Tag 9F1E - Unique and permanent serial number assigned to the interface device by the manufacturer
     *
     * @return self
     */
    public function setInterfaceDeviceSerialNumberTag9F1E($interface_device_serial_number_tag9_f1_e)
    {
        if (is_null($interface_device_serial_number_tag9_f1_e)) {
            throw new \InvalidArgumentException('non-nullable interface_device_serial_number_tag9_f1_e cannot be null');
        }
        $this->container['interface_device_serial_number_tag9_f1_e'] = $interface_device_serial_number_tag9_f1_e;

        return $this;
    }

    /**
     * Gets transaction_time_tag9_f21
     *
     * @return string|null
     */
    public function getTransactionTimeTag9F21()
    {
        return $this->container['transaction_time_tag9_f21'];
    }

    /**
     * Sets transaction_time_tag9_f21
     *
     * @param string|null $transaction_time_tag9_f21 EMV Tag 9F21 - local time that the transaction was authorised
     *
     * @return self
     */
    public function setTransactionTimeTag9F21($transaction_time_tag9_f21)
    {
        if (is_null($transaction_time_tag9_f21)) {
            throw new \InvalidArgumentException('non-nullable transaction_time_tag9_f21 cannot be null');
        }
        $this->container['transaction_time_tag9_f21'] = $transaction_time_tag9_f21;

        return $this;
    }

    /**
     * Gets application_cryptogram_tag9_f26
     *
     * @return string|null
     */
    public function getApplicationCryptogramTag9F26()
    {
        return $this->container['application_cryptogram_tag9_f26'];
    }

    /**
     * Sets application_cryptogram_tag9_f26
     *
     * @param string|null $application_cryptogram_tag9_f26 EMV Tag 9F26 - returned by the Chip (ICC) in response to a “Generate AC” command\"
     *
     * @return self
     */
    public function setApplicationCryptogramTag9F26($application_cryptogram_tag9_f26)
    {
        if (is_null($application_cryptogram_tag9_f26)) {
            throw new \InvalidArgumentException('non-nullable application_cryptogram_tag9_f26 cannot be null');
        }
        $this->container['application_cryptogram_tag9_f26'] = $application_cryptogram_tag9_f26;

        return $this;
    }

    /**
     * Gets cryptogram_information_data_tag9_f27
     *
     * @return string|null
     */
    public function getCryptogramInformationDataTag9F27()
    {
        return $this->container['cryptogram_information_data_tag9_f27'];
    }

    /**
     * Sets cryptogram_information_data_tag9_f27
     *
     * @param string|null $cryptogram_information_data_tag9_f27 EMV Tag 9F27 - indicates the type of cryptogram and the actions to be performed by the terminal
     *
     * @return self
     */
    public function setCryptogramInformationDataTag9F27($cryptogram_information_data_tag9_f27)
    {
        if (is_null($cryptogram_information_data_tag9_f27)) {
            throw new \InvalidArgumentException('non-nullable cryptogram_information_data_tag9_f27 cannot be null');
        }
        $this->container['cryptogram_information_data_tag9_f27'] = $cryptogram_information_data_tag9_f27;

        return $this;
    }

    /**
     * Gets terminal_capabilities_tag9_f33
     *
     * @return string|null
     */
    public function getTerminalCapabilitiesTag9F33()
    {
        return $this->container['terminal_capabilities_tag9_f33'];
    }

    /**
     * Sets terminal_capabilities_tag9_f33
     *
     * @param string|null $terminal_capabilities_tag9_f33 EMV Tag 9F33 - indicates the card data input, CVM, and security capabilities of the terminal
     *
     * @return self
     */
    public function setTerminalCapabilitiesTag9F33($terminal_capabilities_tag9_f33)
    {
        if (is_null($terminal_capabilities_tag9_f33)) {
            throw new \InvalidArgumentException('non-nullable terminal_capabilities_tag9_f33 cannot be null');
        }
        $this->container['terminal_capabilities_tag9_f33'] = $terminal_capabilities_tag9_f33;

        return $this;
    }

    /**
     * Gets cardholder_verification_method_results_tag9_f34
     *
     * @return string|null
     */
    public function getCardholderVerificationMethodResultsTag9F34()
    {
        return $this->container['cardholder_verification_method_results_tag9_f34'];
    }

    /**
     * Sets cardholder_verification_method_results_tag9_f34
     *
     * @param string|null $cardholder_verification_method_results_tag9_f34 EMV Tag 9F34 - used to indicate the results of the last CVM preformed
     *
     * @return self
     */
    public function setCardholderVerificationMethodResultsTag9F34($cardholder_verification_method_results_tag9_f34)
    {
        if (is_null($cardholder_verification_method_results_tag9_f34)) {
            throw new \InvalidArgumentException('non-nullable cardholder_verification_method_results_tag9_f34 cannot be null');
        }
        $this->container['cardholder_verification_method_results_tag9_f34'] = $cardholder_verification_method_results_tag9_f34;

        return $this;
    }

    /**
     * Gets terminal_type_tag9_f35
     *
     * @return string|null
     */
    public function getTerminalTypeTag9F35()
    {
        return $this->container['terminal_type_tag9_f35'];
    }

    /**
     * Sets terminal_type_tag9_f35
     *
     * @param string|null $terminal_type_tag9_f35 EMV Tag 9F35 - used to indicate the environment of the terminal, its communication capability, and its operational control
     *
     * @return self
     */
    public function setTerminalTypeTag9F35($terminal_type_tag9_f35)
    {
        if (is_null($terminal_type_tag9_f35)) {
            throw new \InvalidArgumentException('non-nullable terminal_type_tag9_f35 cannot be null');
        }
        $this->container['terminal_type_tag9_f35'] = $terminal_type_tag9_f35;

        return $this;
    }

    /**
     * Gets application_transaction_counter_tag9_f36
     *
     * @return string|null
     */
    public function getApplicationTransactionCounterTag9F36()
    {
        return $this->container['application_transaction_counter_tag9_f36'];
    }

    /**
     * Sets application_transaction_counter_tag9_f36
     *
     * @param string|null $application_transaction_counter_tag9_f36 EMV Tag 9F36 - an incrementing counter value that is managed by the application in the chip card
     *
     * @return self
     */
    public function setApplicationTransactionCounterTag9F36($application_transaction_counter_tag9_f36)
    {
        if (is_null($application_transaction_counter_tag9_f36)) {
            throw new \InvalidArgumentException('non-nullable application_transaction_counter_tag9_f36 cannot be null');
        }
        $this->container['application_transaction_counter_tag9_f36'] = $application_transaction_counter_tag9_f36;

        return $this;
    }

    /**
     * Gets unpredictable_number_tag9_f37
     *
     * @return string|null
     */
    public function getUnpredictableNumberTag9F37()
    {
        return $this->container['unpredictable_number_tag9_f37'];
    }

    /**
     * Sets unpredictable_number_tag9_f37
     *
     * @param string|null $unpredictable_number_tag9_f37 EMV Tag 9F37 - used to provide variability and uniqueness to the generation of a cryptogram
     *
     * @return self
     */
    public function setUnpredictableNumberTag9F37($unpredictable_number_tag9_f37)
    {
        if (is_null($unpredictable_number_tag9_f37)) {
            throw new \InvalidArgumentException('non-nullable unpredictable_number_tag9_f37 cannot be null');
        }
        $this->container['unpredictable_number_tag9_f37'] = $unpredictable_number_tag9_f37;

        return $this;
    }

    /**
     * Gets transaction_sequence_counter_tag9_f41
     *
     * @return string|null
     */
    public function getTransactionSequenceCounterTag9F41()
    {
        return $this->container['transaction_sequence_counter_tag9_f41'];
    }

    /**
     * Sets transaction_sequence_counter_tag9_f41
     *
     * @param string|null $transaction_sequence_counter_tag9_f41 EMV Tag 9F41 - Counter maintained by the terminal that is incremented by one for each transaction
     *
     * @return self
     */
    public function setTransactionSequenceCounterTag9F41($transaction_sequence_counter_tag9_f41)
    {
        if (is_null($transaction_sequence_counter_tag9_f41)) {
            throw new \InvalidArgumentException('non-nullable transaction_sequence_counter_tag9_f41 cannot be null');
        }
        $this->container['transaction_sequence_counter_tag9_f41'] = $transaction_sequence_counter_tag9_f41;

        return $this;
    }

    /**
     * Gets transaction_category_code_tag9_f53
     *
     * @return string|null
     */
    public function getTransactionCategoryCodeTag9F53()
    {
        return $this->container['transaction_category_code_tag9_f53'];
    }

    /**
     * Sets transaction_category_code_tag9_f53
     *
     * @param string|null $transaction_category_code_tag9_f53 EMV Tag 9F53 - Usually provided by the acquirer
     *
     * @return self
     */
    public function setTransactionCategoryCodeTag9F53($transaction_category_code_tag9_f53)
    {
        if (is_null($transaction_category_code_tag9_f53)) {
            throw new \InvalidArgumentException('non-nullable transaction_category_code_tag9_f53 cannot be null');
        }
        $this->container['transaction_category_code_tag9_f53'] = $transaction_category_code_tag9_f53;

        return $this;
    }

    /**
     * Gets issuer_script_results_tag9_f5_b
     *
     * @return string|null
     */
    public function getIssuerScriptResultsTag9F5B()
    {
        return $this->container['issuer_script_results_tag9_f5_b'];
    }

    /**
     * Sets issuer_script_results_tag9_f5_b
     *
     * @param string|null $issuer_script_results_tag9_f5_b EMV Tag 9F5B - used to identify the results of the terminal script processing
     *
     * @return self
     */
    public function setIssuerScriptResultsTag9F5B($issuer_script_results_tag9_f5_b)
    {
        if (is_null($issuer_script_results_tag9_f5_b)) {
            throw new \InvalidArgumentException('non-nullable issuer_script_results_tag9_f5_b cannot be null');
        }
        $this->container['issuer_script_results_tag9_f5_b'] = $issuer_script_results_tag9_f5_b;

        return $this;
    }

    /**
     * Gets third_party_data_tag9_f6_e
     *
     * @return string|null
     */
    public function getThirdPartyDataTag9F6E()
    {
        return $this->container['third_party_data_tag9_f6_e'];
    }

    /**
     * Sets third_party_data_tag9_f6_e
     *
     * @param string|null $third_party_data_tag9_f6_e EMV Tag 9F6E - contains indicators about the attributes of the card holder’s device and the technology used for communication between the cardholder’s device and the acquiring POS Device
     *
     * @return self
     */
    public function setThirdPartyDataTag9F6E($third_party_data_tag9_f6_e)
    {
        if (is_null($third_party_data_tag9_f6_e)) {
            throw new \InvalidArgumentException('non-nullable third_party_data_tag9_f6_e cannot be null');
        }
        $this->container['third_party_data_tag9_f6_e'] = $third_party_data_tag9_f6_e;

        return $this;
    }

    /**
     * Gets customer_exclusive_data_tag9_f7_c
     *
     * @return string|null
     */
    public function getCustomerExclusiveDataTag9F7C()
    {
        return $this->container['customer_exclusive_data_tag9_f7_c'];
    }

    /**
     * Sets customer_exclusive_data_tag9_f7_c
     *
     * @param string|null $customer_exclusive_data_tag9_f7_c EMV Tag 9F7C - available for the Issuer’s discretionary use. The issuer is responsible for ensuring its use of the field complies with all applicable laws and its own privacy policy
     *
     * @return self
     */
    public function setCustomerExclusiveDataTag9F7C($customer_exclusive_data_tag9_f7_c)
    {
        if (is_null($customer_exclusive_data_tag9_f7_c)) {
            throw new \InvalidArgumentException('non-nullable customer_exclusive_data_tag9_f7_c cannot be null');
        }
        $this->container['customer_exclusive_data_tag9_f7_c'] = $customer_exclusive_data_tag9_f7_c;

        return $this;
    }

    /**
     * Gets cardholder_name_tag5_f20
     *
     * @return string|null
     */
    public function getCardholderNameTag5F20()
    {
        return $this->container['cardholder_name_tag5_f20'];
    }

    /**
     * Sets cardholder_name_tag5_f20
     *
     * @param string|null $cardholder_name_tag5_f20 EMV Tag 5F20 - used to identify the card holder
     *
     * @return self
     */
    public function setCardholderNameTag5F20($cardholder_name_tag5_f20)
    {
        if (is_null($cardholder_name_tag5_f20)) {
            throw new \InvalidArgumentException('non-nullable cardholder_name_tag5_f20 cannot be null');
        }
        $this->container['cardholder_name_tag5_f20'] = $cardholder_name_tag5_f20;

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


