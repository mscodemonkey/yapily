# PaymentAuthorisationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_uuid** | **string** |  | [optional] 
**application_user_id** | **string** |  | [optional] 
**forward_parameters** | **string[]** |  | [optional] 
**institution_id** | **string** |  | 
**callback** | **string** |  | 
**one_time_token** | **bool** |  | 
**payment_request** | [**\Yapily\Model\PaymentRequest**](PaymentRequest.md) |  | 
**total_max_amount** | **float** |  | [optional] 
**total_max_amount_frequency** | **string** |  | [optional] 
**max_amount_per_request** | **float** |  | [optional] 
**starts_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**allow_overdraft** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


