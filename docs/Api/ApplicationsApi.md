# Yapily\ApplicationsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApplicationMeUsingGET**](ApplicationsApi.md#getApplicationMeUsingGET) | **GET** /me | Returns the details of the application that owns the request credentials
[**getJwksUsingGET**](ApplicationsApi.md#getJwksUsingGET) | **GET** /jwks | JSON Web Key Set (JWKS) for authenticated application
[**revokeTokensUsingPOST**](ApplicationsApi.md#revokeTokensUsingPOST) | **POST** /revoke-tokens | Revoke existing access tokens for application, which will also generate a new public key discoverable via /jwks


# **getApplicationMeUsingGET**
> \Yapily\Model\Application getApplicationMeUsingGET()

Returns the details of the application that owns the request credentials

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

$apiInstance = new Yapily\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApplicationMeUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationMeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yapily\Model\Application**](../Model/Application.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJwksUsingGET**
> object getJwksUsingGET()

JSON Web Key Set (JWKS) for authenticated application

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

$apiInstance = new Yapily\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJwksUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getJwksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeTokensUsingPOST**
> \Yapily\Model\ResponseEntity revokeTokensUsingPOST()

Revoke existing access tokens for application, which will also generate a new public key discoverable via /jwks

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

$apiInstance = new Yapily\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->revokeTokensUsingPOST();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->revokeTokensUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yapily\Model\ResponseEntity**](../Model/ResponseEntity.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

