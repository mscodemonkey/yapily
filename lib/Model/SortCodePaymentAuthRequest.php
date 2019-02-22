<?php
/**
 * SortCodePaymentAuthRequest
 *
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
 * To access endpoints that require authentication, use your Application key and secret created in the Dashboard (https://dashboard.yapily.com)
 *
 * OpenAPI spec version: 0.0.85
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yapily\Model;

use \ArrayAccess;
use \Yapily\ObjectSerializer;

/**
 * SortCodePaymentAuthRequest Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SortCodePaymentAuthRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SortCodePaymentAuthRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_uuid' => 'string',
        'institution_id' => 'string',
        'callback' => 'string',
        'payment_request' => '\Yapily\Model\SortCodePaymentRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_uuid' => null,
        'institution_id' => null,
        'callback' => null,
        'payment_request' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_uuid' => 'userUuid',
        'institution_id' => 'institutionId',
        'callback' => 'callback',
        'payment_request' => 'paymentRequest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_uuid' => 'setUserUuid',
        'institution_id' => 'setInstitutionId',
        'callback' => 'setCallback',
        'payment_request' => 'setPaymentRequest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_uuid' => 'getUserUuid',
        'institution_id' => 'getInstitutionId',
        'callback' => 'getCallback',
        'payment_request' => 'getPaymentRequest'
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
        return self::$swaggerModelName;
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
        $this->container['user_uuid'] = isset($data['user_uuid']) ? $data['user_uuid'] : null;
        $this->container['institution_id'] = isset($data['institution_id']) ? $data['institution_id'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['payment_request'] = isset($data['payment_request']) ? $data['payment_request'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['user_uuid'] === null) {
            $invalidProperties[] = "'user_uuid' can't be null";
        }
        if ($this->container['institution_id'] === null) {
            $invalidProperties[] = "'institution_id' can't be null";
        }
        if ($this->container['callback'] === null) {
            $invalidProperties[] = "'callback' can't be null";
        }
        if ($this->container['payment_request'] === null) {
            $invalidProperties[] = "'payment_request' can't be null";
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
     * Gets user_uuid
     *
     * @return string
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     *
     * @param string $user_uuid user_uuid
     *
     * @return $this
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

        return $this;
    }

    /**
     * Gets institution_id
     *
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institution_id'];
    }

    /**
     * Sets institution_id
     *
     * @param string $institution_id institution_id
     *
     * @return $this
     */
    public function setInstitutionId($institution_id)
    {
        $this->container['institution_id'] = $institution_id;

        return $this;
    }

    /**
     * Gets callback
     *
     * @return string
     */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
     * Sets callback
     *
     * @param string $callback callback
     *
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;

        return $this;
    }

    /**
     * Gets payment_request
     *
     * @return \Yapily\Model\SortCodePaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->container['payment_request'];
    }

    /**
     * Sets payment_request
     *
     * @param \Yapily\Model\SortCodePaymentRequest $payment_request payment_request
     *
     * @return $this
     */
    public function setPaymentRequest($payment_request)
    {
        $this->container['payment_request'] = $payment_request;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

