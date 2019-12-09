# PaymentAuthorisationRequestResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**user_uuid** | **string** |  | [optional] 
**application_user_id** | **string** |  | [optional] 
**reference_id** | **string** |  | [optional] 
**institution_id** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**transaction_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**transaction_to** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**time_to_expire_in_millis** | **int** | Deprecated. Use &#x60;timeToExpire&#x60; instead. | [optional] 
**time_to_expire** | **string** | ISO 8601 duration | [optional] 
**feature_scope** | **string[]** |  | [optional] 
**charges** | [**\Yapily\Model\ChargeDetails[]**](ChargeDetails.md) |  | [optional] 
**exchange_rate_information** | [**\Yapily\Model\ExchangeRateInformationResponse**](ExchangeRateInformationResponse.md) |  | [optional] 
**consent_token** | **string** |  | [optional] 
**authorisation_url** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


