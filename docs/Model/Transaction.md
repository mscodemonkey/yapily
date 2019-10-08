# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction Id returned by the institution if present | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Transaction date as defined by the institution | [optional] 
**booking_date_time** | [**\DateTime**](\DateTime.md) | Date and (if available) time that transaction is posted | [optional] 
**value_date_time** | [**\DateTime**](\DateTime.md) | The actual or expected date and time transaction is cleared | [optional] 
**status** | **string** | The status of the transaction | [optional] 
**amount** | **float** | Deprecated. Use the amount value in &#x60;transactionAmount&#x60; instead | [optional] 
**currency** | **string** | Deprecated. Use the currency value in &#x60;transactionAmount&#x60; instead | [optional] 
**transaction_amount** | [**\Yapily\Model\Amount**](Amount.md) |  | [optional] 
**currency_exchange** | [**\Yapily\Model\CurrencyExchange**](CurrencyExchange.md) |  | [optional] 
**charge_details** | [**\Yapily\Model\ChargeDetails**](ChargeDetails.md) | If present, contains details of any charges applied during this transaction | [optional] 
**reference** | **string** | Transaction reference | [optional] 
**statement_references** | [**\Yapily\Model\StatementReference[]**](StatementReference.md) |  | [optional] 
**description** | **string** | Unstructured text containing details of the transaction. Usage varies according to the institution | [optional] 
**transaction_information** | **string[]** | Further information related to the transaction. Usage varies according to the institution | [optional] 
**address_details** | [**\Yapily\Model\AddressDetails**](AddressDetails.md) |  | [optional] 
**iso_bank_transaction_code** | [**\Yapily\Model\IsoBankTransactionCode**](IsoBankTransactionCode.md) |  | [optional] 
**proprietary_bank_transaction_code** | [**\Yapily\Model\ProprietaryBankTransactionCode**](ProprietaryBankTransactionCode.md) |  | [optional] 
**balance** | [**\Yapily\Model\Balance**](Balance.md) | Running account balance after transaction has been applied | [optional] 
**merchant** | [**\Yapily\Model\Merchant**](Merchant.md) | Merchant details | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


