<?php
/**
 * FrequencyResponse
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
 * FrequencyResponse Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FrequencyResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FrequencyResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'execution_day' => 'int',
        'frequency_type' => 'string',
        'interval_month' => 'int',
        'interval_week' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'execution_day' => 'int32',
        'frequency_type' => null,
        'interval_month' => 'int32',
        'interval_week' => 'int32'
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
        'execution_day' => 'executionDay',
        'frequency_type' => 'frequencyType',
        'interval_month' => 'intervalMonth',
        'interval_week' => 'intervalWeek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'execution_day' => 'setExecutionDay',
        'frequency_type' => 'setFrequencyType',
        'interval_month' => 'setIntervalMonth',
        'interval_week' => 'setIntervalWeek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'execution_day' => 'getExecutionDay',
        'frequency_type' => 'getFrequencyType',
        'interval_month' => 'getIntervalMonth',
        'interval_week' => 'getIntervalWeek'
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

    const FREQUENCY_TYPE_DAILY = 'DAILY';
    const FREQUENCY_TYPE_EVERY_WORKING_DAY = 'EVERY_WORKING_DAY';
    const FREQUENCY_TYPE_CALENDAR_DAY = 'CALENDAR_DAY';
    const FREQUENCY_TYPE_WEEKLY = 'WEEKLY';
    const FREQUENCY_TYPE_EVERY_TWO_WEEKS = 'EVERY_TWO_WEEKS';
    const FREQUENCY_TYPE_MONTHLY = 'MONTHLY';
    const FREQUENCY_TYPE_EVERY_TWO_MONTHS = 'EVERY_TWO_MONTHS';
    const FREQUENCY_TYPE_QUARTERLY = 'QUARTERLY';
    const FREQUENCY_TYPE_SEMIANNUAL = 'SEMIANNUAL';
    const FREQUENCY_TYPE_ANNUAL = 'ANNUAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyTypeAllowableValues()
    {
        return [
            self::FREQUENCY_TYPE_DAILY,
            self::FREQUENCY_TYPE_EVERY_WORKING_DAY,
            self::FREQUENCY_TYPE_CALENDAR_DAY,
            self::FREQUENCY_TYPE_WEEKLY,
            self::FREQUENCY_TYPE_EVERY_TWO_WEEKS,
            self::FREQUENCY_TYPE_MONTHLY,
            self::FREQUENCY_TYPE_EVERY_TWO_MONTHS,
            self::FREQUENCY_TYPE_QUARTERLY,
            self::FREQUENCY_TYPE_SEMIANNUAL,
            self::FREQUENCY_TYPE_ANNUAL,
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
        $this->container['execution_day'] = isset($data['execution_day']) ? $data['execution_day'] : null;
        $this->container['frequency_type'] = isset($data['frequency_type']) ? $data['frequency_type'] : null;
        $this->container['interval_month'] = isset($data['interval_month']) ? $data['interval_month'] : null;
        $this->container['interval_week'] = isset($data['interval_week']) ? $data['interval_week'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFrequencyTypeAllowableValues();
        if (!is_null($this->container['frequency_type']) && !in_array($this->container['frequency_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency_type', must be one of '%s'",
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
     * Gets execution_day
     *
     * @return int
     */
    public function getExecutionDay()
    {
        return $this->container['execution_day'];
    }

    /**
     * Sets execution_day
     *
     * @param int $execution_day execution_day
     *
     * @return $this
     */
    public function setExecutionDay($execution_day)
    {
        $this->container['execution_day'] = $execution_day;

        return $this;
    }

    /**
     * Gets frequency_type
     *
     * @return string
     */
    public function getFrequencyType()
    {
        return $this->container['frequency_type'];
    }

    /**
     * Sets frequency_type
     *
     * @param string $frequency_type frequency_type
     *
     * @return $this
     */
    public function setFrequencyType($frequency_type)
    {
        $allowedValues = $this->getFrequencyTypeAllowableValues();
        if (!is_null($frequency_type) && !in_array($frequency_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency_type'] = $frequency_type;

        return $this;
    }

    /**
     * Gets interval_month
     *
     * @return int
     */
    public function getIntervalMonth()
    {
        return $this->container['interval_month'];
    }

    /**
     * Sets interval_month
     *
     * @param int $interval_month interval_month
     *
     * @return $this
     */
    public function setIntervalMonth($interval_month)
    {
        $this->container['interval_month'] = $interval_month;

        return $this;
    }

    /**
     * Gets interval_week
     *
     * @return int
     */
    public function getIntervalWeek()
    {
        return $this->container['interval_week'];
    }

    /**
     * Sets interval_week
     *
     * @param int $interval_week interval_week
     *
     * @return $this
     */
    public function setIntervalWeek($interval_week)
    {
        $this->container['interval_week'] = $interval_week;

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


