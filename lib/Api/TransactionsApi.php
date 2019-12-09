<?php
/**
 * TransactionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yapily API
 *
 * To access endpoints that require authentication, use your application key and secret created in the Dashboard (https://dashboard.yapily.com)
 *
 * OpenAPI spec version: 0.0.161
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yapily\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yapily\ApiException;
use Yapily\Configuration;
use Yapily\HeaderSelector;
use Yapily\ObjectSerializer;

/**
 * TransactionsApi Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getTransactionsUsingGET
     *
     * Get account transactions
     *
     * @param  string $consent Consent Token (required)
     * @param  string $account_id accountId (required)
     * @param  string[] $with with (optional)
     * @param  string $from from (optional)
     * @param  string $before before (optional)
     * @param  int $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  int $offset offset (optional)
     *
     * @throws \Yapily\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yapily\Model\ApiListResponseOfTransaction
     */
    public function getTransactionsUsingGET($consent, $account_id, $with = null, $from = null, $before = null, $limit = null, $sort = null, $offset = null)
    {
        list($response) = $this->getTransactionsUsingGETWithHttpInfo($consent, $account_id, $with, $from, $before, $limit, $sort, $offset);
        return $response;
    }

    /**
     * Operation getTransactionsUsingGETWithHttpInfo
     *
     * Get account transactions
     *
     * @param  string $consent Consent Token (required)
     * @param  string $account_id accountId (required)
     * @param  string[] $with with (optional)
     * @param  string $from from (optional)
     * @param  string $before before (optional)
     * @param  int $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  int $offset offset (optional)
     *
     * @throws \Yapily\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yapily\Model\ApiListResponseOfTransaction, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionsUsingGETWithHttpInfo($consent, $account_id, $with = null, $from = null, $before = null, $limit = null, $sort = null, $offset = null)
    {
        $returnType = '\Yapily\Model\ApiListResponseOfTransaction';
        $request = $this->getTransactionsUsingGETRequest($consent, $account_id, $with, $from, $before, $limit, $sort, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Yapily\Model\ApiListResponseOfTransaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransactionsUsingGETAsync
     *
     * Get account transactions
     *
     * @param  string $consent Consent Token (required)
     * @param  string $account_id accountId (required)
     * @param  string[] $with with (optional)
     * @param  string $from from (optional)
     * @param  string $before before (optional)
     * @param  int $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  int $offset offset (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionsUsingGETAsync($consent, $account_id, $with = null, $from = null, $before = null, $limit = null, $sort = null, $offset = null)
    {
        return $this->getTransactionsUsingGETAsyncWithHttpInfo($consent, $account_id, $with, $from, $before, $limit, $sort, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionsUsingGETAsyncWithHttpInfo
     *
     * Get account transactions
     *
     * @param  string $consent Consent Token (required)
     * @param  string $account_id accountId (required)
     * @param  string[] $with with (optional)
     * @param  string $from from (optional)
     * @param  string $before before (optional)
     * @param  int $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  int $offset offset (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionsUsingGETAsyncWithHttpInfo($consent, $account_id, $with = null, $from = null, $before = null, $limit = null, $sort = null, $offset = null)
    {
        $returnType = '\Yapily\Model\ApiListResponseOfTransaction';
        $request = $this->getTransactionsUsingGETRequest($consent, $account_id, $with, $from, $before, $limit, $sort, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTransactionsUsingGET'
     *
     * @param  string $consent Consent Token (required)
     * @param  string $account_id accountId (required)
     * @param  string[] $with with (optional)
     * @param  string $from from (optional)
     * @param  string $before before (optional)
     * @param  int $limit limit (optional)
     * @param  string $sort sort (optional)
     * @param  int $offset offset (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTransactionsUsingGETRequest($consent, $account_id, $with = null, $from = null, $before = null, $limit = null, $sort = null, $offset = null)
    {
        // verify the required parameter 'consent' is set
        if ($consent === null || (is_array($consent) && count($consent) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $consent when calling getTransactionsUsingGET'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling getTransactionsUsingGET'
            );
        }

        $resourcePath = '/accounts/{accountId}/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($with)) {
            $queryParams['with'] = $with;
        } else
        if ($with !== null) {
            $queryParams['with'] = ObjectSerializer::toQueryValue($with);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($before !== null) {
            $queryParams['before'] = ObjectSerializer::toQueryValue($before);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // header params
        if ($consent !== null) {
            $headerParams['consent'] = ObjectSerializer::toHeaderValue($consent);
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
