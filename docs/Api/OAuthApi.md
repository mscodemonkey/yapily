# Yapily\OAuthApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthToken**](OAuthApi.md#oauthToken) | **POST** /oauth/token | Retrieve Access Token


# **oauthToken**
> \Yapily\Model\YapilyAccessToken oauthToken($grant_type)

Retrieve Access Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Yapily\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Yapily\Api\OAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = "client_credentials"; // string | Grant type

try {
    $result = $apiInstance->oauthToken($grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->oauthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Grant type | [default to client_credentials]

### Return type

[**\Yapily\Model\YapilyAccessToken**](../Model/YapilyAccessToken.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

