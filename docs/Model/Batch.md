# # Batch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | Batch [Resource URL](#section/Overview/Values) (self link) | [optional] [readonly]
**id** | **string** | Batch [Resource ID](#section/Overview/Values) assigned by server. | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**modified_at** | **\DateTime** | Modification timestamp | [optional] [readonly]
**merchant** | **string** | Merchant [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_account** | **string** | ProcessorAccount [Resource URL](#section/Overview/Values) | [optional] [readonly]
**terminal** | **string** | Terminal [Resource URL](#section/Overview/Values) | [optional] [readonly]
**account** | **string** | Account [Resource URL](#section/Overview/Values) | [optional] [readonly]
**processor_reference** | **string** | Reference assigned by the processor | [optional] [readonly]
**state** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\BatchState**](BatchState.md) |  | [optional]
**credits** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CountAndTotal**](CountAndTotal.md) | Credits | [optional] [readonly]
**debits** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CountAndTotal**](CountAndTotal.md) | Debits | [optional] [readonly]
**net** | [**\Gear4music\ElavonPlayground\V1\EPG\Model\CountAndTotal**](CountAndTotal.md) | Net, credits minus debits | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
