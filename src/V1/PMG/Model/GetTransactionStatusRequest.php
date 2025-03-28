<?php
/**
 * GetTransactionStatusRequest
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
 * GetTransactionStatusRequest Class Doc Comment
 *
 * @category Class
 * @description Request object regarding acquiring specific transaction status and information.
 * @package  Gear4music\ElavonPlayground\V1\PMG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionStatusRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionStatusRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_id' => 'string',
        'tx_id' => 'string',
        'merchant_tx_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchant_id' => null,
        'tx_id' => null,
        'merchant_tx_id' => null
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
        'merchant_id' => 'merchantId',
        'tx_id' => 'txId',
        'merchant_tx_id' => 'merchantTxId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'tx_id' => 'setTxId',
        'merchant_tx_id' => 'setMerchantTxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'tx_id' => 'getTxId',
        'merchant_tx_id' => 'getMerchantTxId'
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
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['tx_id'] = $data['tx_id'] ?? null;
        $this->container['merchant_tx_id'] = $data['merchant_tx_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,16}$/", $this->container['merchant_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,16}$/.";
        }

        if (!is_null($this->container['tx_id']) && !preg_match("/^[a-zA-Z0-9-]{1,36}$/", $this->container['tx_id'])) {
            $invalidProperties[] = "invalid value for 'tx_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.";
        }

        if (!is_null($this->container['merchant_tx_id']) && !preg_match("/^[a-zA-Z0-9-]{1,30}$/", $this->container['merchant_tx_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_tx_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.";
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
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant ID in Elavon.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,16}$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling GetTransactionStatusRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,16}$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets tx_id
     *
     * @return string|null
     */
    public function getTxId()
    {
        return $this->container['tx_id'];
    }

    /**
     * Sets tx_id
     *
     * @param string|null $tx_id Transaction ID , provided by PMG. Should be always provided if known. Request is considered valid of at least one of txId or merchantTxId is provided. If both are provided txId will be used for locating the transaction.
     *
     * @return self
     */
    public function setTxId($tx_id)
    {

        if (!is_null($tx_id) && (!preg_match("/^[a-zA-Z0-9-]{1,36}$/", $tx_id))) {
            throw new \InvalidArgumentException("invalid value for $tx_id when calling GetTransactionStatusRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.");
        }

        $this->container['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Gets merchant_tx_id
     *
     * @return string|null
     */
    public function getMerchantTxId()
    {
        return $this->container['merchant_tx_id'];
    }

    /**
     * Sets merchant_tx_id
     *
     * @param string|null $merchant_tx_id Should be used in very rare cases, when client could not process Authorization response and txId is not known. It is client responsibility to ensure uniqueness of merchantTxId. If txId is not provided, PMG will try to locate the transaction in context of provided merchantId. If more than one transactions are found with the same id, Error will be returned.
     *
     * @return self
     */
    public function setMerchantTxId($merchant_tx_id)
    {

        if (!is_null($merchant_tx_id) && (!preg_match("/^[a-zA-Z0-9-]{1,30}$/", $merchant_tx_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_tx_id when calling GetTransactionStatusRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.");
        }

        $this->container['merchant_tx_id'] = $merchant_tx_id;

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


