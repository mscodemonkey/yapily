# Yapily\TransactionsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionsUsingGET**](TransactionsApi.md#getTransactionsUsingGET) | **GET** /accounts/{accountId}/transactions | Get account transactions


# **getTransactionsUsingGET**
> \Yapily\Model\ApiListResponseOfTransaction getTransactionsUsingGET($consent, $account_id, $with, $from, $before, $limit, $sort)

Get account transactions

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

$apiInstance = new Yapily\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId
$with = array("with_example"); // string[] | with
$from = "from_example"; // string | from
$before = "before_example"; // string | before
$limit = 56; // int | limit
$sort = "sort_example"; // string | sort

try {
    $result = $apiInstance->getTransactionsUsingGET($consent, $account_id, $with, $from, $before, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |
 **with** | [**string[]**](../Model/string.md)| with | [optional]
 **from** | **string**| from | [optional]
 **before** | **string**| before | [optional]
 **limit** | **int**| limit | [optional]
 **sort** | **string**| sort | [optional]

### Return type

[**\Yapily\Model\ApiListResponseOfTransaction**](../Model/ApiListResponseOfTransaction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

