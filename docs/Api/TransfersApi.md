# Yapily\TransfersApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transferUsingPUT**](TransfersApi.md#transferUsingPUT) | **PUT** /accounts/{accountId}/transfer | Transfer money from one account to another account accessible with the same consent


# **transferUsingPUT**
> \Yapily\Model\ApiResponseOfTransferResponse transferUsingPUT($consent, $account_id, $transfer_request)

Transfer money from one account to another account accessible with the same consent

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

$apiInstance = new Yapily\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId
$transfer_request = new \Yapily\Model\TransferRequest(); // \Yapily\Model\TransferRequest | transferRequest

try {
    $result = $apiInstance->transferUsingPUT($consent, $account_id, $transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |
 **transfer_request** | [**\Yapily\Model\TransferRequest**](../Model/TransferRequest.md)| transferRequest | [optional]

### Return type

[**\Yapily\Model\ApiResponseOfTransferResponse**](../Model/ApiResponseOfTransferResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

