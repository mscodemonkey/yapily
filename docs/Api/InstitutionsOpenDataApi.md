# Yapily\InstitutionsOpenDataApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getATMDataUsingGET**](InstitutionsOpenDataApi.md#getATMDataUsingGET) | **GET** /institutions/{institutionId}/atms | Retrieves data about all ATMs of the selected institution
[**getPersonalCurrentAccountsUsingGET**](InstitutionsOpenDataApi.md#getPersonalCurrentAccountsUsingGET) | **GET** /institutions/{institutionId}/personal-current-accounts | Retrieves details of personal current accounts for an institution


# **getATMDataUsingGET**
> \Yapily\Model\ApiResponseOfListOfATMOpenDataResponse getATMDataUsingGET($institution_id)

Retrieves data about all ATMs of the selected institution

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

$apiInstance = new Yapily\Api\InstitutionsOpenDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = "institution_id_example"; // string | institutionId

try {
    $result = $apiInstance->getATMDataUsingGET($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsOpenDataApi->getATMDataUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institution_id** | **string**| institutionId |

### Return type

[**\Yapily\Model\ApiResponseOfListOfATMOpenDataResponse**](../Model/ApiResponseOfListOfATMOpenDataResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonalCurrentAccountsUsingGET**
> \Yapily\Model\ApiResponseOfListOfPersonalCurrentAccountData getPersonalCurrentAccountsUsingGET($institution_id)

Retrieves details of personal current accounts for an institution

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

$apiInstance = new Yapily\Api\InstitutionsOpenDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = "institution_id_example"; // string | institutionId

try {
    $result = $apiInstance->getPersonalCurrentAccountsUsingGET($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsOpenDataApi->getPersonalCurrentAccountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institution_id** | **string**| institutionId |

### Return type

[**\Yapily\Model\ApiResponseOfListOfPersonalCurrentAccountData**](../Model/ApiResponseOfListOfPersonalCurrentAccountData.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

