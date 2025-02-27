<?php
/**
 * TransactionAuthorizationEndpointApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Gear4music\ElavonPlayground\V1\PMG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elavon PMG (Transaction Service)
 *
 * Process transactions authorizations.
 *
 * The version of the OpenAPI document: 23.1.2-RELEASE
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gear4music\ElavonPlayground\V1\PMG\ElavonPlayground;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Gear4music\ElavonPlayground\V1\PMG\ApiException;
use Gear4music\ElavonPlayground\V1\PMG\Configuration;
use Gear4music\ElavonPlayground\V1\PMG\HeaderSelector;
use Gear4music\ElavonPlayground\V1\PMG\ObjectSerializer;

/**
 * TransactionAuthorizationEndpointApi Class Doc Comment
 *
 * @category Class
 * @package  Gear4music\ElavonPlayground\V1\PMG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionAuthorizationEndpointApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'authorizeTransaction' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation authorizeTransaction
     *
     * @param  \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest $authorization_request authorization_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizeTransaction'] to see the possible values for this operation
     *
     * @throws \Gear4music\ElavonPlayground\V1\PMG\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse|\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse|\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse
     */
    public function authorizeTransaction($authorization_request, string $contentType = self::contentTypes['authorizeTransaction'][0])
    {
        list($response) = $this->authorizeTransactionWithHttpInfo($authorization_request, $contentType);
        return $response;
    }

    /**
     * Operation authorizeTransactionWithHttpInfo
     *
     * @param  \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest $authorization_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizeTransaction'] to see the possible values for this operation
     *
     * @throws \Gear4music\ElavonPlayground\V1\PMG\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse|\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse|\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function authorizeTransactionWithHttpInfo($authorization_request, string $contentType = self::contentTypes['authorizeTransaction'][0])
    {
        $request = $this->authorizeTransactionRequest($authorization_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 500:
                    if ('\Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 200:
                    if ('\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Gear4music\ElavonPlayground\V1\PMG\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Gear4music\ElavonPlayground\V1\PMG\Model\CancellationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation authorizeTransactionAsync
     *
     * @param  \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest $authorization_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizeTransaction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizeTransactionAsync($authorization_request, string $contentType = self::contentTypes['authorizeTransaction'][0])
    {
        return $this->authorizeTransactionAsyncWithHttpInfo($authorization_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authorizeTransactionAsyncWithHttpInfo
     *
     * @param  \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest $authorization_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizeTransaction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizeTransactionAsyncWithHttpInfo($authorization_request, string $contentType = self::contentTypes['authorizeTransaction'][0])
    {
        $returnType = '\Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationResponse';
        $request = $this->authorizeTransactionRequest($authorization_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'authorizeTransaction'
     *
     * @param  \Gear4music\ElavonPlayground\V1\PMG\Model\AuthorizationRequest $authorization_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['authorizeTransaction'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function authorizeTransactionRequest($authorization_request, string $contentType = self::contentTypes['authorizeTransaction'][0])
    {

        // verify the required parameter 'authorization_request' is set
        if ($authorization_request === null || (is_array($authorization_request) && count($authorization_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization_request when calling authorizeTransaction'
            );
        }


        $resourcePath = '/api/v1/tx/authorization';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['*/*', 'application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($authorization_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($authorization_request));
            } else {
                $httpBody = $authorization_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
