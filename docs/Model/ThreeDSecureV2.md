# # ThreeDSecureV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**directory_server_transaction_id** | **string** | A universally unique transaction identifier assigned by the directory server that maps authentications to authorizations, in IETF RFC 4122 format |
**transaction_status** | **string** | Often shortened to &#39;transStatus&#39;, a code to indicate the outcome of the shopper authentication  Must be &#39;Y&#39;, &#39;N&#39;, &#39;U&#39;, or &#39;A&#39; |
**electronic_commerce_indicator** | **string** | Often shortened to &#39;eci&#39;, a code to indicate the security level used to authenticate the shopper  Must be &#39;0&#39;, &#39;1&#39;, &#39;2&#39;, &#39;5&#39;, &#39;6&#39;, or &#39;7&#39;, optionally with a leading zero | [optional]
**authentication_value** | **string** | Proof of authentication provided by the access control server, 20 bytes Base64 encoded giving a 28 character value | [optional]
**protocol_version** | **string** | Version provided by the access control server |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
