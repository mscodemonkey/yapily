# PaymentResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**institution_consent_id** | **string** |  | [optional] 
**payment_idempotency_id** | **string** |  | [optional] 
**payment_lifecycle_id** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**status_details** | [**\Yapily\Model\PaymentStatusDetails**](PaymentStatusDetails.md) |  | [optional] 
**payee_details** | [**\Yapily\Model\Payee**](Payee.md) |  | [optional] 
**reference** | **string** |  | [optional] 
**amount** | **float** |  | [optional] 
**currency** | **string** |  | [optional] 
**amount_details** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**first_payment_amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**first_payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**next_payment_amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**next_payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**final_payment_amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**final_payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**number_of_payments** | **int** |  | [optional] 
**previous_payment_amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**previous_payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**charge_details** | [**\Yapily\Model\ChargeDetails[]**](ChargeDetails.md) |  | [optional] 
**scheduled_payment_type** | **string** |  | [optional] 
**scheduled_payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**frequency** | [**\Yapily\Model\FrequencyResponse**](FrequencyResponse.md) |  | [optional] 
**currency_of_transfer** | **string** |  | [optional] 
**purpose** | **string** |  | [optional] 
**priority** | **string** |  | [optional] 
**exchange_rate** | [**\Yapily\Model\ExchangeRateInformationResponse**](ExchangeRateInformationResponse.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


