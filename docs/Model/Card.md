# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**holder_name** | **string** | Cardholder&#39;s full name | [optional]
**number** | **string** | Cardholder&#39;s personal account number (PAN), not returned | [optional]
**pan_token** | [**ValueToken**](ValueToken.md) | Cardholder&#39;s personal account number (PAN) token, not returned | [optional]
**payment_account_reference** | **string** | Payment Account Reference (PAR). It is a desensitized, non-financial value. A single PAR exists throughout the life of a card account, and can link transactions across different channels and payment instruments. It allows a merchant to identify all transactions made on one credit or debit card account whether a personal account number (PAN), device PAN (DPAN), or network token was used.  PAR is returned from the card network and issuer during authorization whether the transaction is authorized or declined. However, not all card schemes support PAR. Currently, it is returned for Visa, Mastercard, and Discover transactions. In addition, for a given scheme, some card types do not support PAR and is dependent on the issuing bank. | [optional] [readonly]
**pan_fingerprint** | **string** | Cardholder&#39;s personal account number (PAN) fingerprint | [optional] [readonly]
**expiration_month** | **int** | Card&#39;s expiration month |
**expiration_year** | **int** | Card&#39;s expiration year |
**security_code** | **string** | Card&#39;s security code / CVC / CVV / CVD / CID, 3 or 4 digits, not returned and ignored if provided with a StoredCard |
**bill_to** | [**Contact**](Contact.md) | Cardholder&#39;s billing contact details | [optional]
**masked_number** | **string** | Masked card number | [optional] [readonly]
**last4** | **string** | Last 4 digits of the card number | [optional] [readonly]
**bin** | **string** | Issuer/Bank identification number (IIN/BIN) | [optional] [readonly]
**scheme** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CardScheme**](CardScheme.md) |  | [optional]
**brand** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CardBrand**](CardBrand.md) |  | [optional]
**funding_source** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CardFundingSource**](CardFundingSource.md) |  | [optional]
**issuing_bank** | **string** | Issuing bank | [optional] [readonly]
**issuing_country** | **string** | Issuing country | [optional] [readonly]
**issuing_currency** | **string** | Issuer currency | [optional] [readonly]
**is_debit** | [**TrueFalseOrUnknown**](TrueFalseOrUnknown.md) | Is the card debit ? | [optional] [readonly]
**is_corporate** | [**TrueFalseOrUnknown**](TrueFalseOrUnknown.md) | Is the account corporate ? | [optional] [readonly]
**is_dcc_allowed** | [**TrueFalseOrUnknown**](TrueFalseOrUnknown.md) | Is DCC supported ? | [optional] [readonly]
**encrypted_card** | [**EncryptedData**](EncryptedData.md) |  | [optional]
**encrypted_pin** | [**PinEncryptedData**](PinEncryptedData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
