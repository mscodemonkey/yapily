<?php
/**
 * ExchangeRateInformationResponse
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
 * ExchangeRateInformationResponse Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExchangeRateInformationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExchangeRateInformationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'exchange_rate_expiry_date' => '\DateTime',
        'foreign_exchange_contract_reference' => 'string',
        'rate' => 'float',
        'rate_type' => 'string',
        'unit_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'exchange_rate_expiry_date' => 'date-time',
        'foreign_exchange_contract_reference' => null,
        'rate' => null,
        'rate_type' => null,
        'unit_currency' => null
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
        'exchange_rate_expiry_date' => 'exchangeRateExpiryDate',
        'foreign_exchange_contract_reference' => 'foreignExchangeContractReference',
        'rate' => 'rate',
        'rate_type' => 'rateType',
        'unit_currency' => 'unitCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exchange_rate_expiry_date' => 'setExchangeRateExpiryDate',
        'foreign_exchange_contract_reference' => 'setForeignExchangeContractReference',
        'rate' => 'setRate',
        'rate_type' => 'setRateType',
        'unit_currency' => 'setUnitCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exchange_rate_expiry_date' => 'getExchangeRateExpiryDate',
        'foreign_exchange_contract_reference' => 'getForeignExchangeContractReference',
        'rate' => 'getRate',
        'rate_type' => 'getRateType',
        'unit_currency' => 'getUnitCurrency'
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

    const RATE_TYPE_ACTUAL = 'ACTUAL';
    const RATE_TYPE_AGREED = 'AGREED';
    const RATE_TYPE_INDICATIVE = 'INDICATIVE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRateTypeAllowableValues()
    {
        return [
            self::RATE_TYPE_ACTUAL,
            self::RATE_TYPE_AGREED,
            self::RATE_TYPE_INDICATIVE,
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
        $this->container['exchange_rate_expiry_date'] = isset($data['exchange_rate_expiry_date']) ? $data['exchange_rate_expiry_date'] : null;
        $this->container['foreign_exchange_contract_reference'] = isset($data['foreign_exchange_contract_reference']) ? $data['foreign_exchange_contract_reference'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['rate_type'] = isset($data['rate_type']) ? $data['rate_type'] : null;
        $this->container['unit_currency'] = isset($data['unit_currency']) ? $data['unit_currency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRateTypeAllowableValues();
        if (!is_null($this->container['rate_type']) && !in_array($this->container['rate_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rate_type', must be one of '%s'",
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
     * Gets exchange_rate_expiry_date
     *
     * @return \DateTime
     */
    public function getExchangeRateExpiryDate()
    {
        return $this->container['exchange_rate_expiry_date'];
    }

    /**
     * Sets exchange_rate_expiry_date
     *
     * @param \DateTime $exchange_rate_expiry_date exchange_rate_expiry_date
     *
     * @return $this
     */
    public function setExchangeRateExpiryDate($exchange_rate_expiry_date)
    {
        $this->container['exchange_rate_expiry_date'] = $exchange_rate_expiry_date;

        return $this;
    }

    /**
     * Gets foreign_exchange_contract_reference
     *
     * @return string
     */
    public function getForeignExchangeContractReference()
    {
        return $this->container['foreign_exchange_contract_reference'];
    }

    /**
     * Sets foreign_exchange_contract_reference
     *
     * @param string $foreign_exchange_contract_reference foreign_exchange_contract_reference
     *
     * @return $this
     */
    public function setForeignExchangeContractReference($foreign_exchange_contract_reference)
    {
        $this->container['foreign_exchange_contract_reference'] = $foreign_exchange_contract_reference;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets rate_type
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param string $rate_type rate_type
     *
     * @return $this
     */
    public function setRateType($rate_type)
    {
        $allowedValues = $this->getRateTypeAllowableValues();
        if (!is_null($rate_type) && !in_array($rate_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rate_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rate_type'] = $rate_type;

        return $this;
    }

    /**
     * Gets unit_currency
     *
     * @return string
     */
    public function getUnitCurrency()
    {
        return $this->container['unit_currency'];
    }

    /**
     * Sets unit_currency
     *
     * @param string $unit_currency unit_currency
     *
     * @return $this
     */
    public function setUnitCurrency($unit_currency)
    {
        $this->container['unit_currency'] = $unit_currency;

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


