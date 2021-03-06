<?php
/**
 * MultiAuthorisation
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

namespace Yapily\Model;

use \ArrayAccess;
use \Yapily\ObjectSerializer;

/**
 * MultiAuthorisation Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MultiAuthorisation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MultiAuthorisation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'number_of_authorisation_required' => 'int',
        'number_of_authorisation_received' => 'int',
        'last_updated_date_time' => '\DateTime',
        'expiration_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'number_of_authorisation_required' => 'int32',
        'number_of_authorisation_received' => 'int32',
        'last_updated_date_time' => 'date-time',
        'expiration_date_time' => 'date-time'
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
        'status' => 'status',
        'number_of_authorisation_required' => 'numberOfAuthorisationRequired',
        'number_of_authorisation_received' => 'numberOfAuthorisationReceived',
        'last_updated_date_time' => 'lastUpdatedDateTime',
        'expiration_date_time' => 'expirationDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'number_of_authorisation_required' => 'setNumberOfAuthorisationRequired',
        'number_of_authorisation_received' => 'setNumberOfAuthorisationReceived',
        'last_updated_date_time' => 'setLastUpdatedDateTime',
        'expiration_date_time' => 'setExpirationDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'number_of_authorisation_required' => 'getNumberOfAuthorisationRequired',
        'number_of_authorisation_received' => 'getNumberOfAuthorisationReceived',
        'last_updated_date_time' => 'getLastUpdatedDateTime',
        'expiration_date_time' => 'getExpirationDateTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['number_of_authorisation_required'] = isset($data['number_of_authorisation_required']) ? $data['number_of_authorisation_required'] : null;
        $this->container['number_of_authorisation_received'] = isset($data['number_of_authorisation_received']) ? $data['number_of_authorisation_received'] : null;
        $this->container['last_updated_date_time'] = isset($data['last_updated_date_time']) ? $data['last_updated_date_time'] : null;
        $this->container['expiration_date_time'] = isset($data['expiration_date_time']) ? $data['expiration_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets number_of_authorisation_required
     *
     * @return int
     */
    public function getNumberOfAuthorisationRequired()
    {
        return $this->container['number_of_authorisation_required'];
    }

    /**
     * Sets number_of_authorisation_required
     *
     * @param int $number_of_authorisation_required number_of_authorisation_required
     *
     * @return $this
     */
    public function setNumberOfAuthorisationRequired($number_of_authorisation_required)
    {
        $this->container['number_of_authorisation_required'] = $number_of_authorisation_required;

        return $this;
    }

    /**
     * Gets number_of_authorisation_received
     *
     * @return int
     */
    public function getNumberOfAuthorisationReceived()
    {
        return $this->container['number_of_authorisation_received'];
    }

    /**
     * Sets number_of_authorisation_received
     *
     * @param int $number_of_authorisation_received number_of_authorisation_received
     *
     * @return $this
     */
    public function setNumberOfAuthorisationReceived($number_of_authorisation_received)
    {
        $this->container['number_of_authorisation_received'] = $number_of_authorisation_received;

        return $this;
    }

    /**
     * Gets last_updated_date_time
     *
     * @return \DateTime
     */
    public function getLastUpdatedDateTime()
    {
        return $this->container['last_updated_date_time'];
    }

    /**
     * Sets last_updated_date_time
     *
     * @param \DateTime $last_updated_date_time last_updated_date_time
     *
     * @return $this
     */
    public function setLastUpdatedDateTime($last_updated_date_time)
    {
        $this->container['last_updated_date_time'] = $last_updated_date_time;

        return $this;
    }

    /**
     * Gets expiration_date_time
     *
     * @return \DateTime
     */
    public function getExpirationDateTime()
    {
        return $this->container['expiration_date_time'];
    }

    /**
     * Sets expiration_date_time
     *
     * @param \DateTime $expiration_date_time expiration_date_time
     *
     * @return $this
     */
    public function setExpirationDateTime($expiration_date_time)
    {
        $this->container['expiration_date_time'] = $expiration_date_time;

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


