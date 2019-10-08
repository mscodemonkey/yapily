<?php
/**
 * OverdraftOverdraftTierBand
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
 * OverdraftOverdraftTierBand Class Doc Comment
 *
 * @category Class
 * @description Provides overdraft details for a specific tier or band
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverdraftOverdraftTierBand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverdraftOverdraftTierBand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_guaranteed_indicator' => 'bool',
        'ear' => 'string',
        'identification' => 'string',
        'notes' => 'string[]',
        'overdraft_fees_charges' => '\Yapily\Model\OverdraftOverdraftFeesCharges[]',
        'overdraft_interest_charging_coverage' => 'string',
        'tier_value_max' => 'string',
        'tier_value_min' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_guaranteed_indicator' => null,
        'ear' => null,
        'identification' => null,
        'notes' => null,
        'overdraft_fees_charges' => null,
        'overdraft_interest_charging_coverage' => null,
        'tier_value_max' => null,
        'tier_value_min' => null
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
        'bank_guaranteed_indicator' => 'BankGuaranteedIndicator',
        'ear' => 'EAR',
        'identification' => 'Identification',
        'notes' => 'Notes',
        'overdraft_fees_charges' => 'OverdraftFeesCharges',
        'overdraft_interest_charging_coverage' => 'OverdraftInterestChargingCoverage',
        'tier_value_max' => 'TierValueMax',
        'tier_value_min' => 'TierValueMin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_guaranteed_indicator' => 'setBankGuaranteedIndicator',
        'ear' => 'setEar',
        'identification' => 'setIdentification',
        'notes' => 'setNotes',
        'overdraft_fees_charges' => 'setOverdraftFeesCharges',
        'overdraft_interest_charging_coverage' => 'setOverdraftInterestChargingCoverage',
        'tier_value_max' => 'setTierValueMax',
        'tier_value_min' => 'setTierValueMin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_guaranteed_indicator' => 'getBankGuaranteedIndicator',
        'ear' => 'getEar',
        'identification' => 'getIdentification',
        'notes' => 'getNotes',
        'overdraft_fees_charges' => 'getOverdraftFeesCharges',
        'overdraft_interest_charging_coverage' => 'getOverdraftInterestChargingCoverage',
        'tier_value_max' => 'getTierValueMax',
        'tier_value_min' => 'getTierValueMin'
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

    const OVERDRAFT_INTEREST_CHARGING_COVERAGE_TIERED = 'Tiered';
    const OVERDRAFT_INTEREST_CHARGING_COVERAGE_WHOLE = 'Whole';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOverdraftInterestChargingCoverageAllowableValues()
    {
        return [
            self::OVERDRAFT_INTEREST_CHARGING_COVERAGE_TIERED,
            self::OVERDRAFT_INTEREST_CHARGING_COVERAGE_WHOLE,
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
        $this->container['bank_guaranteed_indicator'] = isset($data['bank_guaranteed_indicator']) ? $data['bank_guaranteed_indicator'] : null;
        $this->container['ear'] = isset($data['ear']) ? $data['ear'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['overdraft_fees_charges'] = isset($data['overdraft_fees_charges']) ? $data['overdraft_fees_charges'] : null;
        $this->container['overdraft_interest_charging_coverage'] = isset($data['overdraft_interest_charging_coverage']) ? $data['overdraft_interest_charging_coverage'] : null;
        $this->container['tier_value_max'] = isset($data['tier_value_max']) ? $data['tier_value_max'] : null;
        $this->container['tier_value_min'] = isset($data['tier_value_min']) ? $data['tier_value_min'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOverdraftInterestChargingCoverageAllowableValues();
        if (!is_null($this->container['overdraft_interest_charging_coverage']) && !in_array($this->container['overdraft_interest_charging_coverage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'overdraft_interest_charging_coverage', must be one of '%s'",
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
     * Gets bank_guaranteed_indicator
     *
     * @return bool
     */
    public function getBankGuaranteedIndicator()
    {
        return $this->container['bank_guaranteed_indicator'];
    }

    /**
     * Sets bank_guaranteed_indicator
     *
     * @param bool $bank_guaranteed_indicator bank_guaranteed_indicator
     *
     * @return $this
     */
    public function setBankGuaranteedIndicator($bank_guaranteed_indicator)
    {
        $this->container['bank_guaranteed_indicator'] = $bank_guaranteed_indicator;

        return $this;
    }

    /**
     * Gets ear
     *
     * @return string
     */
    public function getEar()
    {
        return $this->container['ear'];
    }

    /**
     * Sets ear
     *
     * @param string $ear ear
     *
     * @return $this
     */
    public function setEar($ear)
    {
        $this->container['ear'] = $ear;

        return $this;
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
     * Gets overdraft_fees_charges
     *
     * @return \Yapily\Model\OverdraftOverdraftFeesCharges[]
     */
    public function getOverdraftFeesCharges()
    {
        return $this->container['overdraft_fees_charges'];
    }

    /**
     * Sets overdraft_fees_charges
     *
     * @param \Yapily\Model\OverdraftOverdraftFeesCharges[] $overdraft_fees_charges overdraft_fees_charges
     *
     * @return $this
     */
    public function setOverdraftFeesCharges($overdraft_fees_charges)
    {
        $this->container['overdraft_fees_charges'] = $overdraft_fees_charges;

        return $this;
    }

    /**
     * Gets overdraft_interest_charging_coverage
     *
     * @return string
     */
    public function getOverdraftInterestChargingCoverage()
    {
        return $this->container['overdraft_interest_charging_coverage'];
    }

    /**
     * Sets overdraft_interest_charging_coverage
     *
     * @param string $overdraft_interest_charging_coverage overdraft_interest_charging_coverage
     *
     * @return $this
     */
    public function setOverdraftInterestChargingCoverage($overdraft_interest_charging_coverage)
    {
        $allowedValues = $this->getOverdraftInterestChargingCoverageAllowableValues();
        if (!is_null($overdraft_interest_charging_coverage) && !in_array($overdraft_interest_charging_coverage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'overdraft_interest_charging_coverage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['overdraft_interest_charging_coverage'] = $overdraft_interest_charging_coverage;

        return $this;
    }

    /**
     * Gets tier_value_max
     *
     * @return string
     */
    public function getTierValueMax()
    {
        return $this->container['tier_value_max'];
    }

    /**
     * Sets tier_value_max
     *
     * @param string $tier_value_max tier_value_max
     *
     * @return $this
     */
    public function setTierValueMax($tier_value_max)
    {
        $this->container['tier_value_max'] = $tier_value_max;

        return $this;
    }

    /**
     * Gets tier_value_min
     *
     * @return string
     */
    public function getTierValueMin()
    {
        return $this->container['tier_value_min'];
    }

    /**
     * Sets tier_value_min
     *
     * @param string $tier_value_min tier_value_min
     *
     * @return $this
     */
    public function setTierValueMin($tier_value_min)
    {
        $this->container['tier_value_min'] = $tier_value_min;

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


