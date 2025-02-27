# # PaymentSessionInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_at** | **\DateTime** | Expiration timestamp | [optional]
**account** | **string** | Account [Resource URL](#section/Overview/Values). Defaults to merchant. | [optional]
**order** | **string** | Order [Resource URL](#section/Overview/Values) for which payment is being requested |
**allowed_payment_methods** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethod[]**](PaymentMethod.md) | Used to specify the payment methods allowed to be shown in the hosted payments page. | [optional]
**allowed_payment_method_origins** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\PaymentMethodOrigin[]**](PaymentMethodOrigin.md) | The allowed origins of the payment methods listed in the allowedPaymentMethods field. | [optional]
**payment_link** | **string** | PaymentLink [Resource URL](#section/Overview/Values) | [optional]
**sales_tax** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\NonNegativeAmountAndCurrency**](NonNegativeAmountAndCurrency.md) | Sales Tax | [optional]
**shopper** | **string** | Shopper [Resource URL](#section/Overview/Values) | [optional]
**debtor_account** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\DebtorAccount**](DebtorAccount.md) | Account information required for MCC 6012/6050/6051 merchants | [optional]
**shopper_email_address** | **string** | Shopper&#39;s email address, useful for fraud detection and to provide a receipt | [optional]
**bill_to** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Contact**](Contact.md) | Billing contact details that will be used by default for the hosted card | [optional]
**ship_to** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\Contact**](Contact.md) | Shipping contact details | [optional]
**hpp_type** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\HppType**](HppType.md) | Hosted payments page type indicates the type of hosted payments page for the payment session, defaults to fullPageRedirect | [optional]
**return_url** | **string** | URL to redirect to after payment details are collected. |
**cancel_url** | **string** | URL to redirect to if the shopper cancels |
**origin_url** | **string** | Origin where the hosted payment page will be embedded. Required if using the lightbox. Multiple origin URLs are allowed. Each URL must be separated by a space and each URL must follow the regex. |
**default_language_tag** | **string** | Default IETF language tag, a tag that represents language names and countries, to be used in the Hosted Payment Page, such as en-GB meaning &#39;English (Great Britain)&#39;. | [optional]
**do_create_transaction** | **bool** | Determines whether or not a Hosted Payment Page will perform an end to end transaction. If set to &#39;true&#39;, information a cardholder submits into a hosted payment form will automatically be used to create a Transaction resource. If set to &#39;false&#39;, the information submitted through the hosted payment form will automatically be used to generate a [HostedCard resource](#tag/Hosted-Cards). This value defaults to false. For more information on using the hosted payment form, see the [integration guide](/docs/converge/hosted-payments-overview).  In addition, if set to &#39;false&#39;, then digital wallets are not prompted in the hosted payments page (HPP). | [optional]
**do_capture** | **bool** | This value will be passed along to any transaction created later in the payment flow. See doCapture on transaction | [optional] [default to true]
**do_three_d_secure** | **bool** | Determines whether or not the HPP will perform 3-D secure validation | [optional]
**custom_reference** | **string** | Optional reference provided by the merchant | [optional]
**custom_fields** | **array<string,string>** | Custom fields, an object containing arbitrary string values.  Field names and values must not exceed 64 and 1024 characters, respectively. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
