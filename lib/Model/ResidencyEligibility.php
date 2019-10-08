<?php
/**
 * ResidencyEligibility
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
 * ResidencyEligibility Class Doc Comment
 *
 * @category Class
 * @description Countries in which an accountholder can reside and, therefore, be eligible to open an account
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResidencyEligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResidencyEligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notes' => 'string[]',
        'other_residency_type' => '\Yapily\Model\OtherResidencyType',
        'residency_included' => 'string[]',
        'residency_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notes' => null,
        'other_residency_type' => null,
        'residency_included' => null,
        'residency_type' => null
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
        'notes' => 'Notes',
        'other_residency_type' => 'OtherResidencyType',
        'residency_included' => 'ResidencyIncluded',
        'residency_type' => 'ResidencyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notes' => 'setNotes',
        'other_residency_type' => 'setOtherResidencyType',
        'residency_included' => 'setResidencyIncluded',
        'residency_type' => 'setResidencyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notes' => 'getNotes',
        'other_residency_type' => 'getOtherResidencyType',
        'residency_included' => 'getResidencyIncluded',
        'residency_type' => 'getResidencyType'
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

    const RESIDENCY_TYPE_HOUSEHOLDER = 'Householder';
    const RESIDENCY_TYPE_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResidencyTypeAllowableValues()
    {
        return [
            self::RESIDENCY_TYPE_HOUSEHOLDER,
            self::RESIDENCY_TYPE_OTHER,
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
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['other_residency_type'] = isset($data['other_residency_type']) ? $data['other_residency_type'] : null;
        $this->container['residency_included'] = isset($data['residency_included']) ? $data['residency_included'] : null;
        $this->container['residency_type'] = isset($data['residency_type']) ? $data['residency_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResidencyTypeAllowableValues();
        if (!is_null($this->container['residency_type']) && !in_array($this->container['residency_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'residency_type', must be one of '%s'",
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
     * Gets notes
     *
     * @return string[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets other_residency_type
     *
     * @return \Yapily\Model\OtherResidencyType
     */
    public function getOtherResidencyType()
    {
        return $this->container['other_residency_type'];
    }

    /**
     * Sets other_residency_type
     *
     * @param \Yapily\Model\OtherResidencyType $other_residency_type other_residency_type
     *
     * @return $this
     */
    public function setOtherResidencyType($other_residency_type)
    {
        $this->container['other_residency_type'] = $other_residency_type;

        return $this;
    }

    /**
     * Gets residency_included
     *
     * @return string[]
     */
    public function getResidencyIncluded()
    {
        return $this->container['residency_included'];
    }

    /**
     * Sets residency_included
     *
     * @param string[] $residency_included residency_included
     *
     * @return $this
     */
    public function setResidencyIncluded($residency_included)
    {
        $this->container['residency_included'] = $residency_included;

        return $this;
    }

    /**
     * Gets residency_type
     *
     * @return string
     */
    public function getResidencyType()
    {
        return $this->container['residency_type'];
    }

    /**
     * Sets residency_type
     *
     * @param string $residency_type residency_type
     *
     * @return $this
     */
    public function setResidencyType($residency_type)
    {
        $allowedValues = $this->getResidencyTypeAllowableValues();
        if (!is_null($residency_type) && !in_array($residency_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'residency_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['residency_type'] = $residency_type;

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


