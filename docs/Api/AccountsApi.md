# Yapily\AccountsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountDirectDebitsUsingGET**](AccountsApi.md#getAccountDirectDebitsUsingGET) | **GET** /accounts/{accountId}/direct-debits | Get account direct debits
[**getAccountPeriodicPaymentsUsingGET**](AccountsApi.md#getAccountPeriodicPaymentsUsingGET) | **GET** /accounts/{accountId}/periodic-payments | Get account payments detail
[**getAccountScheduledPaymentsUsingGET**](AccountsApi.md#getAccountScheduledPaymentsUsingGET) | **GET** /accounts/{accountId}/scheduled-payments | Get account scheduled payments
[**getAccountUsingGET**](AccountsApi.md#getAccountUsingGET) | **GET** /accounts/{accountId} | Get account
[**getAccountsUsingGET**](AccountsApi.md#getAccountsUsingGET) | **GET** /accounts | Get accounts
[**initiateAccountRequestUsingPOST**](AccountsApi.md#initiateAccountRequestUsingPOST) | **POST** /account-auth-requests | Initiate a new account request for user to authorize
[**reAuthoriseAccountUsingPATCH**](AccountsApi.md#reAuthoriseAccountUsingPATCH) | **PATCH** /account-auth-requests | Re-authorize account request


# **getAccountDirectDebitsUsingGET**
> \Yapily\Model\ApiListResponseOfPaymentResponse getAccountDirectDebitsUsingGET($account_id, $consent, $limit)

Get account direct debits

### Example
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
$account_id = "account_id_example"; // string | accountId
$consent = "consent_example"; // string | Consent Token
$limit = 56; // int | Use this parameter to limit account's direct debit results

try {
    $result = $apiInstance->getAccountDirectDebitsUsingGET($account_id, $consent, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountDirectDebitsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| accountId |
 **consent** | **string**| Consent Token |
 **limit** | **int**| Use this parameter to limit account&#39;s direct debit results | [optional]

### Return type

[**\Yapily\Model\ApiListResponseOfPaymentResponse**](../Model/ApiListResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountPeriodicPaymentsUsingGET**
> \Yapily\Model\ApiListResponseOfPaymentResponse getAccountPeriodicPaymentsUsingGET($account_id, $consent, $limit)

Get account payments detail

### Example
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
$account_id = "account_id_example"; // string | accountId
$consent = "consent_example"; // string | Consent Token
$limit = 56; // int | Use this parameter to limit account's periodic payment order results

try {
    $result = $apiInstance->getAccountPeriodicPaymentsUsingGET($account_id, $consent, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountPeriodicPaymentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| accountId |
 **consent** | **string**| Consent Token |
 **limit** | **int**| Use this parameter to limit account&#39;s periodic payment order results | [optional]

### Return type

[**\Yapily\Model\ApiListResponseOfPaymentResponse**](../Model/ApiListResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountScheduledPaymentsUsingGET**
> \Yapily\Model\ApiListResponseOfPaymentResponse getAccountScheduledPaymentsUsingGET($account_id, $consent, $limit)

Get account scheduled payments

### Example
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
$account_id = "account_id_example"; // string | accountId
$consent = "consent_example"; // string | Consent Token
$limit = 56; // int | Use this parameter to limit account's scheduled payment results

try {
    $result = $apiInstance->getAccountScheduledPaymentsUsingGET($account_id, $consent, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountScheduledPaymentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| accountId |
 **consent** | **string**| Consent Token |
 **limit** | **int**| Use this parameter to limit account&#39;s scheduled payment results | [optional]

### Return type

[**\Yapily\Model\ApiListResponseOfPaymentResponse**](../Model/ApiListResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountUsingGET**
> \Yapily\Model\ApiResponseOfAccount getAccountUsingGET($consent, $account_id)

Get account

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |

### Return type

[**\Yapily\Model\ApiResponseOfAccount**](../Model/ApiResponseOfAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountsUsingGET**
> \Yapily\Model\ApiListResponseOfAccount getAccountsUsingGET($consent)

Get accounts

### Example
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

try {
    $result = $apiInstance->getAccountsUsingGET($consent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->getAccountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |

### Return type

[**\Yapily\Model\ApiListResponseOfAccount**](../Model/ApiListResponseOfAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateAccountRequestUsingPOST**
> \Yapily\Model\ApiResponseOfAuthorisationRequestResponse initiateAccountRequestUsingPOST($account_auth_request)

Initiate a new account request for user to authorize

### Example
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
$account_auth_request = new \Yapily\Model\AccountAuthorisationRequest(); // \Yapily\Model\AccountAuthorisationRequest | accountAuthRequest

try {
    $result = $apiInstance->initiateAccountRequestUsingPOST($account_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->initiateAccountRequestUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_auth_request** | [**\Yapily\Model\AccountAuthorisationRequest**](../Model/AccountAuthorisationRequest.md)| accountAuthRequest |

### Return type

[**\Yapily\Model\ApiResponseOfAuthorisationRequestResponse**](../Model/ApiResponseOfAuthorisationRequestResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reAuthoriseAccountUsingPATCH**
> \Yapily\Model\ApiResponseOfAuthorisationRequestResponse reAuthoriseAccountUsingPATCH($consent)

Re-authorize account request

### Example
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

try {
    $result = $apiInstance->reAuthoriseAccountUsingPATCH($consent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->reAuthoriseAccountUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |

### Return type

[**\Yapily\Model\ApiResponseOfAuthorisationRequestResponse**](../Model/ApiResponseOfAuthorisationRequestResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

