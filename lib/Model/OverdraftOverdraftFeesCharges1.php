<?php
/**
 * OverdraftOverdraftFeesCharges1
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
 * OverdraftOverdraftFeesCharges1 Class Doc Comment
 *
 * @category Class
 * @description Overdraft fees and charges details
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverdraftOverdraftFeesCharges1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverdraftOverdraftFeesCharges1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'overdraft_fee_charge_cap' => '\Yapily\Model\OverdraftOverdraftFeeChargeCap[]',
        'overdraft_fee_charge_detail' => '\Yapily\Model\OverdraftOverdraftFeeChargeDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'overdraft_fee_charge_cap' => null,
        'overdraft_fee_charge_detail' => null
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
        'overdraft_fee_charge_cap' => 'OverdraftFeeChargeCap',
        'overdraft_fee_charge_detail' => 'OverdraftFeeChargeDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'overdraft_fee_charge_cap' => 'setOverdraftFeeChargeCap',
        'overdraft_fee_charge_detail' => 'setOverdraftFeeChargeDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'overdraft_fee_charge_cap' => 'getOverdraftFeeChargeCap',
        'overdraft_fee_charge_detail' => 'getOverdraftFeeChargeDetail'
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
        $this->container['overdraft_fee_charge_cap'] = isset($data['overdraft_fee_charge_cap']) ? $data['overdraft_fee_charge_cap'] : null;
        $this->container['overdraft_fee_charge_detail'] = isset($data['overdraft_fee_charge_detail']) ? $data['overdraft_fee_charge_detail'] : null;
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
     * Gets overdraft_fee_charge_cap
     *
     * @return \Yapily\Model\OverdraftOverdraftFeeChargeCap[]
     */
    public function getOverdraftFeeChargeCap()
    {
        return $this->container['overdraft_fee_charge_cap'];
    }

    /**
     * Sets overdraft_fee_charge_cap
     *
     * @param \Yapily\Model\OverdraftOverdraftFeeChargeCap[] $overdraft_fee_charge_cap overdraft_fee_charge_cap
     *
     * @return $this
     */
    public function setOverdraftFeeChargeCap($overdraft_fee_charge_cap)
    {
        $this->container['overdraft_fee_charge_cap'] = $overdraft_fee_charge_cap;

        return $this;
    }

    /**
     * Gets overdraft_fee_charge_detail
     *
     * @return \Yapily\Model\OverdraftOverdraftFeeChargeDetail[]
     */
    public function getOverdraftFeeChargeDetail()
    {
        return $this->container['overdraft_fee_charge_detail'];
    }

    /**
     * Sets overdraft_fee_charge_detail
     *
     * @param \Yapily\Model\OverdraftOverdraftFeeChargeDetail[] $overdraft_fee_charge_detail overdraft_fee_charge_detail
     *
     * @return $this
     */
    public function setOverdraftFeeChargeDetail($overdraft_fee_charge_detail)
    {
        $this->container['overdraft_fee_charge_detail'] = $overdraft_fee_charge_detail;

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


