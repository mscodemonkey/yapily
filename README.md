# yapily
To access endpoints that require authentication, use your Application key and secret created in the Dashboard (https://dashboard.yapily.com)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.85
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/mscodemonkey/yapily.git"
    }
  ],
  "require": {
    "mscodemonkey/yapily": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/yapily/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Yapily\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: tokenAuth
$config = Yapily\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Yapily\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId

try {
    $result = $apiInstance->getAccountUsingGET($consent, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountUsingGET: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.yapily.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**getAccountUsingGET**](docs/Api/AccountsApi.md#getaccountusingget) | **GET** /accounts/{accountId} | Get account
*AccountsApi* | [**getAccountsUsingGET**](docs/Api/AccountsApi.md#getaccountsusingget) | **GET** /accounts | Get accounts
*AccountsApi* | [**initiateAccountRequestUsingPOST**](docs/Api/AccountsApi.md#initiateaccountrequestusingpost) | **POST** /account-auth-requests | Initiate a new account request for user to authorize
*ApplicationUsersApi* | [**addUserUsingPOST**](docs/Api/ApplicationUsersApi.md#adduserusingpost) | **POST** /users | Add an application user
*ApplicationUsersApi* | [**deleteUserUsingDELETE**](docs/Api/ApplicationUsersApi.md#deleteuserusingdelete) | **DELETE** /users/{userUuid} | Delete an application user
*ApplicationUsersApi* | [**getUserUsingGET**](docs/Api/ApplicationUsersApi.md#getuserusingget) | **GET** /users/{userUuid} | Get an application user
*ApplicationUsersApi* | [**getUsersUsingGET**](docs/Api/ApplicationUsersApi.md#getusersusingget) | **GET** /users | Get application users
*ApplicationsApi* | [**getApplicationMeUsingGET**](docs/Api/ApplicationsApi.md#getapplicationmeusingget) | **GET** /me | Returns the details of the application that owns the request credentials
*ApplicationsApi* | [**getJwksUsingGET**](docs/Api/ApplicationsApi.md#getjwksusingget) | **GET** /jwks | JSON Web Key Set (JWKS) for authenticated application
*ApplicationsApi* | [**revokeTokensUsingPOST**](docs/Api/ApplicationsApi.md#revoketokensusingpost) | **POST** /revoke-tokens | Revoke existing access tokens for application, which will also generate a new public key discoverable via /jwks
*ConsentsApi* | [**addConsentUsingPOST**](docs/Api/ConsentsApi.md#addconsentusingpost) | **POST** /users/{userUuid}/consents | Post consent
*ConsentsApi* | [**deleteUsingDELETE**](docs/Api/ConsentsApi.md#deleteusingdelete) | **DELETE** /consents/{consentId} | Delete consent
*ConsentsApi* | [**getConsentByIdUsingGET**](docs/Api/ConsentsApi.md#getconsentbyidusingget) | **GET** /consents/{consentId} | Get consent
*ConsentsApi* | [**getUserConsentsUsingGET**](docs/Api/ConsentsApi.md#getuserconsentsusingget) | **GET** /users/{userUuid}/consents | Get user consents
*IdentityApi* | [**getIdentityUsingGET**](docs/Api/IdentityApi.md#getidentityusingget) | **GET** /identity | Get identity
*InstitutionsApi* | [**getFeatureDetailsUsingGET**](docs/Api/InstitutionsApi.md#getfeaturedetailsusingget) | **GET** /features | Retrieve details for Yapily&#39;s institution features
*InstitutionsApi* | [**getInstitutionUsingGET**](docs/Api/InstitutionsApi.md#getinstitutionusingget) | **GET** /institutions/{institutionId} | Retrieves details of a specific institution available in Yapily
*InstitutionsApi* | [**getInstitutionsUsingGET**](docs/Api/InstitutionsApi.md#getinstitutionsusingget) | **GET** /institutions | Retrieves the list of institutions available in Yapily
*InstitutionsOpenDataApi* | [**getATMDataUsingGET**](docs/Api/InstitutionsOpenDataApi.md#getatmdatausingget) | **GET** /institutions/{institutionId}/atms | Retrieves data about all ATMs of the selected institution
*InstitutionsOpenDataApi* | [**getPersonalCurrentAccountsUsingGET**](docs/Api/InstitutionsOpenDataApi.md#getpersonalcurrentaccountsusingget) | **GET** /institutions/{institutionId}/personal-current-accounts | Retrieves details of personal current accounts for an institution
*OAuthApi* | [**oauthToken**](docs/Api/OAuthApi.md#oauthtoken) | **POST** /oauth/token | Retrieve Access Token
*PaymentsApi* | [**createPaymentInitiationUsingPOST**](docs/Api/PaymentsApi.md#createpaymentinitiationusingpost) | **POST** /payment-sortcode-auth-requests | Initiate a new single payment for user to authorise
*PaymentsApi* | [**createPaymentUsingPOST**](docs/Api/PaymentsApi.md#createpaymentusingpost) | **POST** /payment-sortcode | Create a new single payment
*PaymentsApi* | [**getPaymentStatusUsingGET**](docs/Api/PaymentsApi.md#getpaymentstatususingget) | **GET** /payments/{paymentId} | Get status of a payment
*TransactionsApi* | [**getTransactionsUsingGET**](docs/Api/TransactionsApi.md#gettransactionsusingget) | **GET** /accounts/{accountId}/transactions | Get account transactions
*TransfersApi* | [**transferUsingPUT**](docs/Api/TransfersApi.md#transferusingput) | **PUT** /accounts/{accountId}/transfer | Transfer money from one account to another account accessible with the same consent


## Documentation For Models

 - [ATMBranch](docs/Model/ATMBranch.md)
 - [ATMGeoLocation](docs/Model/ATMGeoLocation.md)
 - [ATMGeographicCoordinates](docs/Model/ATMGeographicCoordinates.md)
 - [ATMLocation](docs/Model/ATMLocation.md)
 - [ATMLocationOtherLocationCategory](docs/Model/ATMLocationOtherLocationCategory.md)
 - [ATMMapServiceLinks](docs/Model/ATMMapServiceLinks.md)
 - [ATMOpenData](docs/Model/ATMOpenData.md)
 - [ATMOpenDataATM](docs/Model/ATMOpenDataATM.md)
 - [ATMOpenDataBrand](docs/Model/ATMOpenDataBrand.md)
 - [ATMOpenDataOtherATMServices](docs/Model/ATMOpenDataOtherATMServices.md)
 - [ATMOpenDataOtherAccessibility](docs/Model/ATMOpenDataOtherAccessibility.md)
 - [ATMOpenDataResponse](docs/Model/ATMOpenDataResponse.md)
 - [ATMPostalAddress](docs/Model/ATMPostalAddress.md)
 - [ATMSite](docs/Model/ATMSite.md)
 - [Account](docs/Model/Account.md)
 - [AccountAuthorisationRequest](docs/Model/AccountAuthorisationRequest.md)
 - [AccountRequest](docs/Model/AccountRequest.md)
 - [Address](docs/Model/Address.md)
 - [AgeEligibility](docs/Model/AgeEligibility.md)
 - [ApiListResponseOfAccount](docs/Model/ApiListResponseOfAccount.md)
 - [ApiListResponseOfFeatureDetails](docs/Model/ApiListResponseOfFeatureDetails.md)
 - [ApiListResponseOfInstitution](docs/Model/ApiListResponseOfInstitution.md)
 - [ApiListResponseOfTransaction](docs/Model/ApiListResponseOfTransaction.md)
 - [ApiResponseOfAccount](docs/Model/ApiResponseOfAccount.md)
 - [ApiResponseOfAuthorisationRequestResponse](docs/Model/ApiResponseOfAuthorisationRequestResponse.md)
 - [ApiResponseOfConsent](docs/Model/ApiResponseOfConsent.md)
 - [ApiResponseOfIdentity](docs/Model/ApiResponseOfIdentity.md)
 - [ApiResponseOfListOfATMOpenDataResponse](docs/Model/ApiResponseOfListOfATMOpenDataResponse.md)
 - [ApiResponseOfListOfPersonalCurrentAccountData](docs/Model/ApiResponseOfListOfPersonalCurrentAccountData.md)
 - [ApiResponseOfPaymentResponse](docs/Model/ApiResponseOfPaymentResponse.md)
 - [ApiResponseOfTransferResponse](docs/Model/ApiResponseOfTransferResponse.md)
 - [Application](docs/Model/Application.md)
 - [ApplicationUser](docs/Model/ApplicationUser.md)
 - [AuthorisationRequestResponse](docs/Model/AuthorisationRequestResponse.md)
 - [Consent](docs/Model/Consent.md)
 - [CoreProduct](docs/Model/CoreProduct.md)
 - [Country](docs/Model/Country.md)
 - [CreateConsentAccessToken](docs/Model/CreateConsentAccessToken.md)
 - [CreditCheck](docs/Model/CreditCheck.md)
 - [CreditInterest](docs/Model/CreditInterest.md)
 - [CreditInterestCreditInterestEligibility](docs/Model/CreditInterestCreditInterestEligibility.md)
 - [CreditInterestTierBand](docs/Model/CreditInterestTierBand.md)
 - [CreditInterestTierBandSet](docs/Model/CreditInterestTierBandSet.md)
 - [Eligibility](docs/Model/Eligibility.md)
 - [EligibilityOtherEligibility](docs/Model/EligibilityOtherEligibility.md)
 - [FeatureDetails](docs/Model/FeatureDetails.md)
 - [FilterAndSort](docs/Model/FilterAndSort.md)
 - [IDVerificationCheck](docs/Model/IDVerificationCheck.md)
 - [Identity](docs/Model/Identity.md)
 - [IdentityAddress](docs/Model/IdentityAddress.md)
 - [Institution](docs/Model/Institution.md)
 - [InstitutionConsent](docs/Model/InstitutionConsent.md)
 - [Media](docs/Model/Media.md)
 - [Merchant](docs/Model/Merchant.md)
 - [MerchantInfo](docs/Model/MerchantInfo.md)
 - [NewApplicationUser](docs/Model/NewApplicationUser.md)
 - [Next](docs/Model/Next.md)
 - [OtherApplicationFrequency](docs/Model/OtherApplicationFrequency.md)
 - [OtherBankInterestType](docs/Model/OtherBankInterestType.md)
 - [OtherCalculationFrequency](docs/Model/OtherCalculationFrequency.md)
 - [OtherFeeRateType](docs/Model/OtherFeeRateType.md)
 - [OtherFeeType](docs/Model/OtherFeeType.md)
 - [OtherResidencyType](docs/Model/OtherResidencyType.md)
 - [OtherType](docs/Model/OtherType.md)
 - [Overdraft](docs/Model/Overdraft.md)
 - [OverdraftFeeApplicableRange](docs/Model/OverdraftFeeApplicableRange.md)
 - [OverdraftOtherFeeType](docs/Model/OverdraftOtherFeeType.md)
 - [OverdraftOverdraftFeeChargeCap](docs/Model/OverdraftOverdraftFeeChargeCap.md)
 - [OverdraftOverdraftFeeChargeDetail](docs/Model/OverdraftOverdraftFeeChargeDetail.md)
 - [OverdraftOverdraftFeesCharges](docs/Model/OverdraftOverdraftFeesCharges.md)
 - [OverdraftOverdraftFeesCharges1](docs/Model/OverdraftOverdraftFeesCharges1.md)
 - [OverdraftOverdraftTierBand](docs/Model/OverdraftOverdraftTierBand.md)
 - [OverdraftOverdraftTierBandSet](docs/Model/OverdraftOverdraftTierBandSet.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentResponse](docs/Model/PaymentResponse.md)
 - [PersonalCurrentAccountBrand](docs/Model/PersonalCurrentAccountBrand.md)
 - [PersonalCurrentAccountData](docs/Model/PersonalCurrentAccountData.md)
 - [PersonalCurrentAccountPCA](docs/Model/PersonalCurrentAccountPCA.md)
 - [PersonalCurrentAccountPCAMarketingState](docs/Model/PersonalCurrentAccountPCAMarketingState.md)
 - [ResidencyEligibility](docs/Model/ResidencyEligibility.md)
 - [ResponseEntity](docs/Model/ResponseEntity.md)
 - [ResponseListMeta](docs/Model/ResponseListMeta.md)
 - [ResponseMeta](docs/Model/ResponseMeta.md)
 - [SortCodePaymentAuthRequest](docs/Model/SortCodePaymentAuthRequest.md)
 - [SortCodePaymentRequest](docs/Model/SortCodePaymentRequest.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransferRequest](docs/Model/TransferRequest.md)
 - [TransferResponse](docs/Model/TransferResponse.md)
 - [YapilyAccessToken](docs/Model/YapilyAccessToken.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication

## tokenAuth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A


## Author



