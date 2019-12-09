# Yapily\StatementsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatementFileUsingGET**](StatementsApi.md#getStatementFileUsingGET) | **GET** /accounts/{accountId}/statements/{statementId}/file | Get account statement file
[**getStatementUsingGET**](StatementsApi.md#getStatementUsingGET) | **GET** /accounts/{accountId}/statements/{statementId} | Get account statement
[**getStatementsUsingGET**](StatementsApi.md#getStatementsUsingGET) | **GET** /accounts/{accountId}/statements | Get account statements


# **getStatementFileUsingGET**
> string getStatementFileUsingGET($consent, $account_id, $statement_id)

Get account statement file

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

$apiInstance = new Yapily\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId
$statement_id = "statement_id_example"; // string | statementId

try {
    $result = $apiInstance->getStatementFileUsingGET($consent, $account_id, $statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getStatementFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |
 **statement_id** | **string**| statementId |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatementUsingGET**
> \Yapily\Model\ApiResponseOfAccountStatement getStatementUsingGET($consent, $account_id, $statement_id)

Get account statement

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

$apiInstance = new Yapily\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId
$statement_id = "statement_id_example"; // string | statementId

try {
    $result = $apiInstance->getStatementUsingGET($consent, $account_id, $statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getStatementUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |
 **statement_id** | **string**| statementId |

### Return type

[**\Yapily\Model\ApiResponseOfAccountStatement**](../Model/ApiResponseOfAccountStatement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatementsUsingGET**
> \Yapily\Model\ApiListResponseOfAccountStatement getStatementsUsingGET($consent, $account_id, $from, $before, $limit, $sort, $offset)

Get account statements

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

$apiInstance = new Yapily\Api\StatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$account_id = "account_id_example"; // string | accountId
$from = "from_example"; // string | from
$before = "before_example"; // string | before
$limit = 56; // int | limit
$sort = "sort_example"; // string | sort
$offset = 56; // int | offset

try {
    $result = $apiInstance->getStatementsUsingGET($consent, $account_id, $from, $before, $limit, $sort, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatementsApi->getStatementsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **account_id** | **string**| accountId |
 **from** | **string**| from | [optional]
 **before** | **string**| before | [optional]
 **limit** | **int**| limit | [optional]
 **sort** | **string**| sort | [optional]
 **offset** | **int**| offset | [optional]

### Return type

[**\Yapily\Model\ApiListResponseOfAccountStatement**](../Model/ApiListResponseOfAccountStatement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

