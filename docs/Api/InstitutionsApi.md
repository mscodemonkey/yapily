# Yapily\InstitutionsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFeatureDetailsUsingGET**](InstitutionsApi.md#getFeatureDetailsUsingGET) | **GET** /features | Retrieve details for Yapily&#39;s institution features
[**getInstitutionUsingGET**](InstitutionsApi.md#getInstitutionUsingGET) | **GET** /institutions/{institutionId} | Retrieves details of a specific institution available in Yapily
[**getInstitutionsUsingGET**](InstitutionsApi.md#getInstitutionsUsingGET) | **GET** /institutions | Retrieves the list of institutions available in Yapily


# **getFeatureDetailsUsingGET**
> \Yapily\Model\ApiListResponseOfFeatureDetails getFeatureDetailsUsingGET()

Retrieve details for Yapily's institution features

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

$apiInstance = new Yapily\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFeatureDetailsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getFeatureDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yapily\Model\ApiListResponseOfFeatureDetails**](../Model/ApiListResponseOfFeatureDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstitutionUsingGET**
> \Yapily\Model\Institution getInstitutionUsingGET($institution_id)

Retrieves details of a specific institution available in Yapily

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

$apiInstance = new Yapily\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = "institution_id_example"; // string | institutionId

try {
    $result = $apiInstance->getInstitutionUsingGET($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getInstitutionUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **institution_id** | **string**| institutionId |

### Return type

[**\Yapily\Model\Institution**](../Model/Institution.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInstitutionsUsingGET**
> \Yapily\Model\ApiListResponseOfInstitution getInstitutionsUsingGET()

Retrieves the list of institutions available in Yapily

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

$apiInstance = new Yapily\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInstitutionsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getInstitutionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yapily\Model\ApiListResponseOfInstitution**](../Model/ApiListResponseOfInstitution.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

