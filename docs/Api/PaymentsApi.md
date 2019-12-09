# Yapily\PaymentsApi

All URIs are relative to *https://api.yapily.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentAuthorisationUsingPOST**](PaymentsApi.md#createPaymentAuthorisationUsingPOST) | **POST** /payment-auth-requests | Initiate a payment for user to authorise
[**createPaymentAuthorisationWithSortCodeUsingPOST**](PaymentsApi.md#createPaymentAuthorisationWithSortCodeUsingPOST) | **POST** /payment-sortcode-auth-requests | Initiate a new single payment for user to authorise
[**createPaymentUsingPOST**](PaymentsApi.md#createPaymentUsingPOST) | **POST** /payments | Create a payment
[**createPaymentWithSortCodeUsingPOST**](PaymentsApi.md#createPaymentWithSortCodeUsingPOST) | **POST** /payment-sortcode | Create a new single payment
[**getPaymentStatusUsingGET**](PaymentsApi.md#getPaymentStatusUsingGET) | **GET** /payments/{paymentId} | Get status of a payment
[**getPaymentsUsingGET**](PaymentsApi.md#getPaymentsUsingGET) | **GET** /payments/{paymentId}/details | Get payments detail


# **createPaymentAuthorisationUsingPOST**
> \Yapily\Model\ApiResponseOfPaymentAuthorisationRequestResponse createPaymentAuthorisationUsingPOST($payment_auth_request)

Initiate a payment for user to authorise

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_auth_request = new \Yapily\Model\PaymentAuthorisationRequest(); // \Yapily\Model\PaymentAuthorisationRequest | paymentAuthRequest

try {
    $result = $apiInstance->createPaymentAuthorisationUsingPOST($payment_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentAuthorisationUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_auth_request** | [**\Yapily\Model\PaymentAuthorisationRequest**](../Model/PaymentAuthorisationRequest.md)| paymentAuthRequest |

### Return type

[**\Yapily\Model\ApiResponseOfPaymentAuthorisationRequestResponse**](../Model/ApiResponseOfPaymentAuthorisationRequestResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentAuthorisationWithSortCodeUsingPOST**
> \Yapily\Model\ApiResponseOfAuthorisationRequestResponse createPaymentAuthorisationWithSortCodeUsingPOST($payment_auth_request)

Initiate a new single payment for user to authorise

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_auth_request = new \Yapily\Model\SortCodePaymentAuthRequest(); // \Yapily\Model\SortCodePaymentAuthRequest | paymentAuthRequest

try {
    $result = $apiInstance->createPaymentAuthorisationWithSortCodeUsingPOST($payment_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentAuthorisationWithSortCodeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_auth_request** | [**\Yapily\Model\SortCodePaymentAuthRequest**](../Model/SortCodePaymentAuthRequest.md)| paymentAuthRequest |

### Return type

[**\Yapily\Model\ApiResponseOfAuthorisationRequestResponse**](../Model/ApiResponseOfAuthorisationRequestResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentUsingPOST**
> \Yapily\Model\ApiResponseOfPaymentResponse createPaymentUsingPOST($consent, $payment_request)

Create a payment

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$payment_request = new \Yapily\Model\PaymentRequest(); // \Yapily\Model\PaymentRequest | paymentRequest

try {
    $result = $apiInstance->createPaymentUsingPOST($consent, $payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **payment_request** | [**\Yapily\Model\PaymentRequest**](../Model/PaymentRequest.md)| paymentRequest |

### Return type

[**\Yapily\Model\ApiResponseOfPaymentResponse**](../Model/ApiResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentWithSortCodeUsingPOST**
> \Yapily\Model\ApiResponseOfPaymentResponse createPaymentWithSortCodeUsingPOST($consent, $payment_request)

Create a new single payment

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent = "consent_example"; // string | Consent Token
$payment_request = new \Yapily\Model\SortCodePaymentRequest(); // \Yapily\Model\SortCodePaymentRequest | paymentRequest

try {
    $result = $apiInstance->createPaymentWithSortCodeUsingPOST($consent, $payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPaymentWithSortCodeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent** | **string**| Consent Token |
 **payment_request** | [**\Yapily\Model\SortCodePaymentRequest**](../Model/SortCodePaymentRequest.md)| paymentRequest |

### Return type

[**\Yapily\Model\ApiResponseOfPaymentResponse**](../Model/ApiResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json;charset=UTF-8
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentStatusUsingGET**
> \Yapily\Model\ApiResponseOfPaymentResponse getPaymentStatusUsingGET($payment_id, $consent)

Get status of a payment

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | paymentId
$consent = "consent_example"; // string | Consent Token

try {
    $result = $apiInstance->getPaymentStatusUsingGET($payment_id, $consent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| paymentId |
 **consent** | **string**| Consent Token |

### Return type

[**\Yapily\Model\ApiResponseOfPaymentResponse**](../Model/ApiResponseOfPaymentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentsUsingGET**
> \Yapily\Model\ApiResponseOfPaymentResponses getPaymentsUsingGET($payment_id, $consent)

Get payments detail

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

$apiInstance = new Yapily\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | paymentId
$consent = "consent_example"; // string | Consent Token

try {
    $result = $apiInstance->getPaymentsUsingGET($payment_id, $consent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| paymentId |
 **consent** | **string**| Consent Token |

### Return type

[**\Yapily\Model\ApiResponseOfPaymentResponses**](../Model/ApiResponseOfPaymentResponses.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

