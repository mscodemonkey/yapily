# PaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_idempotency_id** | **string** |  | [optional] 
**payer_account_identifications** | [**\Yapily\Model\AccountIdentification[]**](AccountIdentification.md) |  | [optional] 
**amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**reference** | **string** |  | [optional] 
**context_type** | **string** |  | [optional] 
**type** | **string** |  | 
**payment_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**payee** | [**\Yapily\Model\Payee**](Payee.md) |  | 
**periodic_payment** | [**\Yapily\Model\PeriodicPaymentRequest**](PeriodicPaymentRequest.md) |  | [optional] 
**international_payment** | [**\Yapily\Model\InternationalPaymentRequest**](InternationalPaymentRequest.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


