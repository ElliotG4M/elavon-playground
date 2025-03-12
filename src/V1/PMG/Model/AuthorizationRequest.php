<?php
/**
 * AuthorizationRequest
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
 * AuthorizationRequest Class Doc Comment
 *
 * @category Class
 * @description Request object with required information.
 * @package  Gear4music\ElavonPlayground\V1\PMG
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AuthorizationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthorizationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_id' => 'string',
        'merchant_id' => 'string',
        'merchant_tx_id' => 'string',
        'payment_method' => 'string',
        'currency_code' => 'string',
        'country_code' => 'string',
        'amount' => 'string',
        'shopper_name' => 'string',
        'shopper_type' => 'string',
        'language_code' => 'string',
        'description' => 'string',
        'redirect_url' => 'string',
        'system_id' => 'string',
        'payload' => 'array<string,object>',
        'push_status_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_id' => null,
        'merchant_id' => null,
        'merchant_tx_id' => null,
        'payment_method' => null,
        'currency_code' => null,
        'country_code' => null,
        'amount' => null,
        'shopper_name' => null,
        'shopper_type' => null,
        'language_code' => null,
        'description' => null,
        'redirect_url' => null,
        'system_id' => null,
        'payload' => null,
        'push_status_url' => null
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
        'request_id' => 'requestId',
        'merchant_id' => 'merchantId',
        'merchant_tx_id' => 'merchantTxId',
        'payment_method' => 'paymentMethod',
        'currency_code' => 'currencyCode',
        'country_code' => 'countryCode',
        'amount' => 'amount',
        'shopper_name' => 'shopperName',
        'shopper_type' => 'shopperType',
        'language_code' => 'languageCode',
        'description' => 'description',
        'redirect_url' => 'redirectUrl',
        'system_id' => 'systemId',
        'payload' => 'payload',
        'push_status_url' => 'pushStatusUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_id' => 'setRequestId',
        'merchant_id' => 'setMerchantId',
        'merchant_tx_id' => 'setMerchantTxId',
        'payment_method' => 'setPaymentMethod',
        'currency_code' => 'setCurrencyCode',
        'country_code' => 'setCountryCode',
        'amount' => 'setAmount',
        'shopper_name' => 'setShopperName',
        'shopper_type' => 'setShopperType',
        'language_code' => 'setLanguageCode',
        'description' => 'setDescription',
        'redirect_url' => 'setRedirectUrl',
        'system_id' => 'setSystemId',
        'payload' => 'setPayload',
        'push_status_url' => 'setPushStatusUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_id' => 'getRequestId',
        'merchant_id' => 'getMerchantId',
        'merchant_tx_id' => 'getMerchantTxId',
        'payment_method' => 'getPaymentMethod',
        'currency_code' => 'getCurrencyCode',
        'country_code' => 'getCountryCode',
        'amount' => 'getAmount',
        'shopper_name' => 'getShopperName',
        'shopper_type' => 'getShopperType',
        'language_code' => 'getLanguageCode',
        'description' => 'getDescription',
        'redirect_url' => 'getRedirectUrl',
        'system_id' => 'getSystemId',
        'payload' => 'getPayload',
        'push_status_url' => 'getPushStatusUrl'
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
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['merchant_tx_id'] = $data['merchant_tx_id'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['shopper_name'] = $data['shopper_name'] ?? null;
        $this->container['shopper_type'] = $data['shopper_type'] ?? null;
        $this->container['language_code'] = $data['language_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['redirect_url'] = $data['redirect_url'] ?? null;
        $this->container['system_id'] = $data['system_id'] ?? null;
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['push_status_url'] = $data['push_status_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,60}$/", $this->container['request_id'])) {
            $invalidProperties[] = "invalid value for 'request_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,60}$/.";
        }

        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,16}$/", $this->container['merchant_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,16}$/.";
        }

        if ($this->container['merchant_tx_id'] === null) {
            $invalidProperties[] = "'merchant_tx_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,30}$/", $this->container['merchant_tx_id'])) {
            $invalidProperties[] = "invalid value for 'merchant_tx_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.";
        }

        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if (!preg_match("/^[A-Z][A-Z][A-Z]$/", $this->container['currency_code'])) {
            $invalidProperties[] = "invalid value for 'currency_code', must be conform to the pattern /^[A-Z][A-Z][A-Z]$/.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!preg_match("/^[1-9][0-9]{0,9}$/", $this->container['amount'])) {
            $invalidProperties[] = "invalid value for 'amount', must be conform to the pattern /^[1-9][0-9]{0,9}$/.";
        }

        if ($this->container['shopper_name'] === null) {
            $invalidProperties[] = "'shopper_name' can't be null";
        }
        if (!preg_match("/^[^<>{}]{3,100}$/", $this->container['shopper_name'])) {
            $invalidProperties[] = "invalid value for 'shopper_name', must be conform to the pattern /^[^<>{}]{3,100}$/.";
        }

        if ($this->container['shopper_type'] === null) {
            $invalidProperties[] = "'shopper_type' can't be null";
        }
        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
        }
        if (!is_null($this->container['description']) && !preg_match("/^[^<>{}]{0,255}$/", $this->container['description'])) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>{}]{0,255}$/.";
        }

        if (!is_null($this->container['redirect_url']) && !preg_match("/^.{0,255}$/", $this->container['redirect_url'])) {
            $invalidProperties[] = "invalid value for 'redirect_url', must be conform to the pattern /^.{0,255}$/.";
        }

        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9-]{1,60}$/", $this->container['system_id'])) {
            $invalidProperties[] = "invalid value for 'system_id', must be conform to the pattern /^[a-zA-Z0-9-]{1,60}$/.";
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
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Any Random String/Number generated by the caller. Used for tracing purposes.
     *
     * @return self
     */
    public function setRequestId($request_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,60}$/", $request_id))) {
            throw new \InvalidArgumentException("invalid value for $request_id when calling AuthorizationRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,60}$/.");
        }

        $this->container['request_id'] = $request_id;

        return $this;
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
     * @param string $merchant_id Merchant ID.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,16}$/", $merchant_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_id when calling AuthorizationRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,16}$/.");
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merchant_tx_id
     *
     * @return string
     */
    public function getMerchantTxId()
    {
        return $this->container['merchant_tx_id'];
    }

    /**
     * Sets merchant_tx_id
     *
     * @param string $merchant_tx_id Client's Transaction identifier (Generated by Ecommerce or Terminal).
     *
     * @return self
     */
    public function setMerchantTxId($merchant_tx_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,30}$/", $merchant_tx_id))) {
            throw new \InvalidArgumentException("invalid value for $merchant_tx_id when calling AuthorizationRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,30}$/.");
        }

        $this->container['merchant_tx_id'] = $merchant_tx_id;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Required payment method to be used for this transaction.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code 3 letter ISO currency code of the transaction.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {

        if ((!preg_match("/^[A-Z][A-Z][A-Z]$/", $currency_code))) {
            throw new \InvalidArgumentException("invalid value for $currency_code when calling AuthorizationRequest., must conform to the pattern /^[A-Z][A-Z][A-Z]$/.");
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code 2 letter ISO country code. Merchant location.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The amount to wire in currency's smallest re-presentable unit (e.g cents).
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if ((!preg_match("/^[1-9][0-9]{0,9}$/", $amount))) {
            throw new \InvalidArgumentException("invalid value for $amount when calling AuthorizationRequest., must conform to the pattern /^[1-9][0-9]{0,9}$/.");
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets shopper_name
     *
     * @return string
     */
    public function getShopperName()
    {
        return $this->container['shopper_name'];
    }

    /**
     * Sets shopper_name
     *
     * @param string $shopper_name Shopper name.
     *
     * @return self
     */
    public function setShopperName($shopper_name)
    {

        if ((!preg_match("/^[^<>{}]{3,100}$/", $shopper_name))) {
            throw new \InvalidArgumentException("invalid value for $shopper_name when calling AuthorizationRequest., must conform to the pattern /^[^<>{}]{3,100}$/.");
        }

        $this->container['shopper_name'] = $shopper_name;

        return $this;
    }

    /**
     * Gets shopper_type
     *
     * @return string
     */
    public function getShopperType()
    {
        return $this->container['shopper_type'];
    }

    /**
     * Sets shopper_type
     *
     * @param string $shopper_type Shopper type.
     *
     * @return self
     */
    public function setShopperType($shopper_type)
    {
        $this->container['shopper_type'] = $shopper_type;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code Language identifier of the end user. 2 letter ISO code.
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of transaction.
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (!is_null($description) && (!preg_match("/^[^<>{}]{0,255}$/", $description))) {
            throw new \InvalidArgumentException("invalid value for $description when calling AuthorizationRequest., must conform to the pattern /^[^<>{}]{0,255}$/.");
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url URL the merchant to be redirected after the transaction success/abort/failure.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {

        if (!is_null($redirect_url) && (!preg_match("/^.{0,255}$/", $redirect_url))) {
            throw new \InvalidArgumentException("invalid value for $redirect_url when calling AuthorizationRequest., must conform to the pattern /^.{0,255}$/.");
        }

        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return string
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param string $system_id Terminal ID when payment is originated from terminal. System id when payment originated from ecommerce.
     *
     * @return self
     */
    public function setSystemId($system_id)
    {

        if ((!preg_match("/^[a-zA-Z0-9-]{1,60}$/", $system_id))) {
            throw new \InvalidArgumentException("invalid value for $system_id when calling AuthorizationRequest., must conform to the pattern /^[a-zA-Z0-9-]{1,60}$/.");
        }

        $this->container['system_id'] = $system_id;

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
     * @param array<string,object>|null $payload Reserved map for addition information to be passed. In general to be used to transfer payment method specific data.
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets push_status_url
     *
     * @return string|null
     */
    public function getPushStatusUrl()
    {
        return $this->container['push_status_url'];
    }

    /**
     * Sets push_status_url
     *
     * @param string|null $push_status_url Reserved for addition information to be passed. In general to be used to transfer payment method specific data.
     *
     * @return self
     */
    public function setPushStatusUrl($push_status_url)
    {
        $this->container['push_status_url'] = $push_status_url;

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


