# Yapily\ConsentsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addConsentUsingPOST**](ConsentsApi.md#addConsentUsingPOST) | **POST** /users/{userUuid}/consents | Post consent
[**deleteUsingDELETE**](ConsentsApi.md#deleteUsingDELETE) | **DELETE** /consents/{consentId} | Delete consent
[**getConsentByIdUsingGET**](ConsentsApi.md#getConsentByIdUsingGET) | **GET** /consents/{consentId} | Get consent
[**getUserConsentsUsingGET**](ConsentsApi.md#getUserConsentsUsingGET) | **GET** /users/{userUuid}/consents | Get user consents


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

# **deleteUsingDELETE**
> object deleteUsingDELETE($consent_id)

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

try {
    $result = $apiInstance->deleteUsingDELETE($consent_id);
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

### Return type

**object**

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

# **getUserConsentsUsingGET**
> \Yapily\Model\Consent[] getUserConsentsUsingGET($user_uuid, $institution_id)

Get user consents

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
$institution_id = "institution_id_example"; // string | institutionId

try {
    $result = $apiInstance->getUserConsentsUsingGET($user_uuid, $institution_id);
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
 **institution_id** | **string**| institutionId | [optional]

### Return type

[**\Yapily\Model\Consent[]**](../Model/Consent.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

