<?php
/**
 * PersonalCurrentAccountPCA
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
 * OpenAPI spec version: 0.0.149
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
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
 * PersonalCurrentAccountPCA Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonalCurrentAccountPCA implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonalCurrentAccountPCA';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identification' => 'string',
        'name' => 'string',
        'pca_marketing_state' => '\Yapily\Model\PersonalCurrentAccountPCAMarketingState[]',
        'segment' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identification' => null,
        'name' => null,
        'pca_marketing_state' => null,
        'segment' => null
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
        'identification' => 'Identification',
        'name' => 'Name',
        'pca_marketing_state' => 'PCAMarketingState',
        'segment' => 'Segment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identification' => 'setIdentification',
        'name' => 'setName',
        'pca_marketing_state' => 'setPcaMarketingState',
        'segment' => 'setSegment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identification' => 'getIdentification',
        'name' => 'getName',
        'pca_marketing_state' => 'getPcaMarketingState',
        'segment' => 'getSegment'
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
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pca_marketing_state'] = isset($data['pca_marketing_state']) ? $data['pca_marketing_state'] : null;
        $this->container['segment'] = isset($data['segment']) ? $data['segment'] : null;
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
     * Gets identification
     *
     * @return string
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param string $identification identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pca_marketing_state
     *
     * @return \Yapily\Model\PersonalCurrentAccountPCAMarketingState[]
     */
    public function getPcaMarketingState()
    {
        return $this->container['pca_marketing_state'];
    }

    /**
     * Sets pca_marketing_state
     *
     * @param \Yapily\Model\PersonalCurrentAccountPCAMarketingState[] $pca_marketing_state pca_marketing_state
     *
     * @return $this
     */
    public function setPcaMarketingState($pca_marketing_state)
    {
        $this->container['pca_marketing_state'] = $pca_marketing_state;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return string[]
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param string[] $segment segment
     *
     * @return $this
     */
    public function setSegment($segment)
    {
        $this->container['segment'] = $segment;

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


