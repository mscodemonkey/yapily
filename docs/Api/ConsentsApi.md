# Yapily\ConsentsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addConsentUsingPOST**](ConsentsApi.md#addConsentUsingPOST) | **POST** /users/{userUuid}/consents | Post consent
[**createConsentWithCodeUsingPOST**](ConsentsApi.md#createConsentWithCodeUsingPOST) | **POST** /consent-auth-code | Post auth-code and auth-state
[**deleteUsingDELETE**](ConsentsApi.md#deleteUsingDELETE) | **DELETE** /consents/{consentId} | Delete consent
[**getConsentByIdUsingGET**](ConsentsApi.md#getConsentByIdUsingGET) | **GET** /consents/{consentId} | Get consent
[**getConsentBySingleAccessConsentUsingPOST**](ConsentsApi.md#getConsentBySingleAccessConsentUsingPOST) | **POST** /consent-one-time-token | Post one time token
[**getConsentsUsingGET**](ConsentsApi.md#getConsentsUsingGET) | **GET** /consents | Get consents sorted by creation date
[**getUserConsentsUsingGET**](ConsentsApi.md#getUserConsentsUsingGET) | **GET** /users/{userUuid}/consents | Get latest user consents


# **addConsentUsingPOST**
> \Yapily\Model\Consent addConsentUsingPOST($user_uuid, $create_consent_access_token)

Post consent

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "user_uuid_example"; // string | userUuid
$create_consent_access_token = new \Yapily\Model\CreateConsentAccessToken(); // \Yapily\Model\CreateConsentAccessToken | createConsentAccessToken

try {
    $result = $apiInstance->addConsentUsingPOST($user_uuid, $create_consent_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->addConsentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| userUuid |
 **create_consent_access_token** | [**\Yapily\Model\CreateConsentAccessToken**](../Model/CreateConsentAccessToken.md)| createConsentAccessToken |

### Return type

[**\Yapily\Model\Consent**](../Model/Consent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConsentWithCodeUsingPOST**
> \Yapily\Model\Consent createConsentWithCodeUsingPOST($consent_by_auth_code)

Post auth-code and auth-state

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_by_auth_code = new \Yapily\Model\ConsentAuthCodeRequest(); // \Yapily\Model\ConsentAuthCodeRequest | consentByAuthCode

try {
    $result = $apiInstance->createConsentWithCodeUsingPOST($consent_by_auth_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->createConsentWithCodeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_by_auth_code** | [**\Yapily\Model\ConsentAuthCodeRequest**](../Model/ConsentAuthCodeRequest.md)| consentByAuthCode |

### Return type

[**\Yapily\Model\Consent**](../Model/Consent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE**
> \Yapily\Model\ApiResponseOfConsentDeleteResponse deleteUsingDELETE($consent_id, $force_delete)

Delete consent

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = "consent_id_example"; // string | consentId
$force_delete = true; // bool | forceDelete

try {
    $result = $apiInstance->deleteUsingDELETE($consent_id, $force_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->deleteUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| consentId |
 **force_delete** | **bool**| forceDelete | [optional]

### Return type

[**\Yapily\Model\ApiResponseOfConsentDeleteResponse**](../Model/ApiResponseOfConsentDeleteResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsentByIdUsingGET**
> \Yapily\Model\ApiResponseOfConsent getConsentByIdUsingGET($consent_id)

Get consent

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_id = "consent_id_example"; // string | consentId

try {
    $result = $apiInstance->getConsentByIdUsingGET($consent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->getConsentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_id** | **string**| consentId |

### Return type

[**\Yapily\Model\ApiResponseOfConsent**](../Model/ApiResponseOfConsent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsentBySingleAccessConsentUsingPOST**
> \Yapily\Model\Consent getConsentBySingleAccessConsentUsingPOST($one_time_token)

Post one time token

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$one_time_token = new \Yapily\Model\OneTimeTokenRequest(); // \Yapily\Model\OneTimeTokenRequest | oneTimeToken

try {
    $result = $apiInstance->getConsentBySingleAccessConsentUsingPOST($one_time_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->getConsentBySingleAccessConsentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **one_time_token** | [**\Yapily\Model\OneTimeTokenRequest**](../Model/OneTimeTokenRequest.md)| oneTimeToken |

### Return type

[**\Yapily\Model\Consent**](../Model/Consent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsentsUsingGET**
> \Yapily\Model\ApiListResponseOfConsent getConsentsUsingGET($filter_application_user_id, $filter_user_uuid, $filter_institution, $filter_status, $from, $before, $limit, $offset)

Get consents sorted by creation date

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter_application_user_id = array("filter_application_user_id_example"); // string[] | Filter consents by your application user Id (applicationUserId)
$filter_user_uuid = array("filter_user_uuid_example"); // string[] | Filter consents by Yapily user Id (userUuid)
$filter_institution = array("filter_institution_example"); // string[] | Use this parameter to filter consent by institution, using the Yapily institution Id
$filter_status = array("filter_status_example"); // string[] | Use this parameter to filter consent by status
$from = "from_example"; // string | Use this parameter to filter consents created after the date specified
$before = "before_example"; // string | Use this parameter to filter consents created before the date specified
$limit = 56; // int | Use this parameter to limit consent results, max limit is 20
$offset = 0; // int | Use this parameter to specify the offset of the results

try {
    $result = $apiInstance->getConsentsUsingGET($filter_application_user_id, $filter_user_uuid, $filter_institution, $filter_status, $from, $before, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->getConsentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_application_user_id** | [**string[]**](../Model/string.md)| Filter consents by your application user Id (applicationUserId) | [optional]
 **filter_user_uuid** | [**string[]**](../Model/string.md)| Filter consents by Yapily user Id (userUuid) | [optional]
 **filter_institution** | [**string[]**](../Model/string.md)| Use this parameter to filter consent by institution, using the Yapily institution Id | [optional]
 **filter_status** | [**string[]**](../Model/string.md)| Use this parameter to filter consent by status | [optional]
 **from** | **string**| Use this parameter to filter consents created after the date specified | [optional]
 **before** | **string**| Use this parameter to filter consents created before the date specified | [optional]
 **limit** | **int**| Use this parameter to limit consent results, max limit is 20 | [optional]
 **offset** | **int**| Use this parameter to specify the offset of the results | [optional] [default to 0]

### Return type

[**\Yapily\Model\ApiListResponseOfConsent**](../Model/ApiListResponseOfConsent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserConsentsUsingGET**
> \Yapily\Model\Consent[] getUserConsentsUsingGET($user_uuid, $filter_institution, $limit)

Get latest user consents

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

$apiInstance = new Yapily\Api\ConsentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "user_uuid_example"; // string | userUuid
$filter_institution = "filter_institution_example"; // string | Use this parameter to filter consent by institution, using the Yapily institution Id. This replaces the deprecated `institutionId` query param.
$limit = 56; // int | Use this parameter to limit consent results, max limit is 20

try {
    $result = $apiInstance->getUserConsentsUsingGET($user_uuid, $filter_institution, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsentsApi->getUserConsentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | **string**| userUuid |
 **filter_institution** | **string**| Use this parameter to filter consent by institution, using the Yapily institution Id. This replaces the deprecated &#x60;institutionId&#x60; query param. | [optional]
 **limit** | **int**| Use this parameter to limit consent results, max limit is 20 | [optional]

### Return type

[**\Yapily\Model\Consent[]**](../Model/Consent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

