<?php
/**
 * GetRefundStatusResponse
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Gear4music\ElavonPlayground\V1\PMG\Model;

use \ArrayAccess;
use \Gear4music\ElavonPlayground\V1\PMG\ObjectSerializer;

/**
 * GetRefundStatusResponse Class Doc Comment
 *
 * @category Class
 * @description Response object containing specific refund status and information.
 * @package  Gear4music\ElavonPlayground\V1\PMG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetRefundStatusResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRefundStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'refund_id' => 'string',
        'merchant_refund_id' => 'string',
        'error_message' => 'string',
        'error' => 'string',
        'payload' => 'array<string,object>',
        'fund_state' => 'string',
        'payment_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'refund_id' => null,
        'merchant_refund_id' => null,
        'error_message' => null,
        'error' => null,
        'payload' => null,
        'fund_state' => null,
        'payment_method' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'refund_id' => 'refundId',
        'merchant_refund_id' => 'merchantRefundId',
        'error_message' => 'errorMessage',
        'error' => 'error',
        'payload' => 'payload',
        'fund_state' => 'fundState',
        'payment_method' => 'paymentMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'refund_id' => 'setRefundId',
        'merchant_refund_id' => 'setMerchantRefundId',
        'error_message' => 'setErrorMessage',
        'error' => 'setError',
        'payload' => 'setPayload',
        'fund_state' => 'setFundState',
        'payment_method' => 'setPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'refund_id' => 'getRefundId',
        'merchant_refund_id' => 'getMerchantRefundId',
        'error_message' => 'getErrorMessage',
        'error' => 'getError',
        'payload' => 'getPayload',
        'fund_state' => 'getFundState',
        'payment_method' => 'getPaymentMethod'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const FUND_STATE_RECEIVED = 'FUNDS_RECEIVED';
    const FUND_STATE_MISSING = 'FUNDS_MISSING';
    const FUND_STATE_REJECTED = 'FUNDS_REJECTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundStateAllowableValues()
    {
        return [
            self::FUND_STATE_RECEIVED,
            self::FUND_STATE_MISSING,
            self::FUND_STATE_REJECTED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['status'] = $data['status'] ?? null;
        $this->container['refund_id'] = $data['refund_id'] ?? null;
        $this->container['merchant_refund_id'] = $data['merchant_refund_id'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['fund_state'] = $data['fund_state'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['refund_id'] === null) {
            $invalidProperties[] = "'refund_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,36}$/", $this->container['refund_id'])) {
            $invalidProperties[] = "invalid value for 'refund_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.";
        }

        if ($this->container['merchant_refund_id'] === null) {
            $invalidProperties[] = "'merchant_refund_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,30}$/", $this->container['merchant_refund_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_refund_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.";
        }

        if ($this->container['error'] === null) {
            $invalidProperties[] = "'error' can't be null";
        }
        $allowedValues = $this->getFundStateAllowableValues();
        if (!is_null($this->container['fund_state']) && !in_array($this->container['fund_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fund_state', must be one of '%s'",
                $this->container['fund_state'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of Refund request.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string $refund_id Refund identifier in PMG.
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,36}$/", $refund_id))) {
            throw new \InvalidArgumentException("invalid value for $refund_id when calling GetRefundStatusResponse., must conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.");
        }

        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets merchant_refund_id
     *
     * @return string
     */
    public function getMerchantRefundId()
    {
        return $this->container['merchant_refund_id'];
    }

    /**
     * Sets merchant_refund_id
     *
     * @param string $merchant_refund_id Value of 'merchantRefundId' set in the request.
     *
     * @return self
     */
    public function setMerchantRefundId($merchant_refund_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,30}$/", $merchant_refund_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_refund_id when calling GetRefundStatusResponse., must conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.");
        }

        $this->container['merchant_refund_id'] = $merchant_refund_id;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Human readable message.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error Error code.
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return array<string,object>|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param array<string,object>|null $payload Key - value json structure. Used to set payment type specific parameters.
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets fund_state
     *
     * @return string|null
     */
    public function getFundState()
    {
        return $this->container['fund_state'];
    }

    /**
     * Sets fund_state
     *
     * @param string|null $fund_state Indicates the funds state, whether they are secured or not. Mandatory in case of status is set to SUCCEEDED.
     *
     * @return self
     */
    public function setFundState($fund_state)
    {
        $allowedValues = $this->getFundStateAllowableValues();
        if (!is_null($fund_state) && !in_array($fund_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fund_state', must be one of '%s'",
                    $fund_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fund_state'] = $fund_state;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method Payment method used by this refund.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


