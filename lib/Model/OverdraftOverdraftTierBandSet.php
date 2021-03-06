<?php
/**
 * OverdraftOverdraftTierBandSet
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
 * OverdraftOverdraftTierBandSet Class Doc Comment
 *
 * @category Class
 * @description Tier band set details
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverdraftOverdraftTierBandSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverdraftOverdraftTierBandSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorised_indicator' => 'bool',
        'buffer_amount' => 'string',
        'identification' => 'string',
        'minimum_arranged_overdraft_amount' => 'string',
        'notes' => 'string[]',
        'overdraft_fees_charges' => '\Yapily\Model\OverdraftOverdraftFeesCharges1[]',
        'overdraft_tier_band' => '\Yapily\Model\OverdraftOverdraftTierBand[]',
        'overdraft_type' => 'string',
        'tier_band_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorised_indicator' => null,
        'buffer_amount' => null,
        'identification' => null,
        'minimum_arranged_overdraft_amount' => null,
        'notes' => null,
        'overdraft_fees_charges' => null,
        'overdraft_tier_band' => null,
        'overdraft_type' => null,
        'tier_band_method' => null
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
        'authorised_indicator' => 'AuthorisedIndicator',
        'buffer_amount' => 'BufferAmount',
        'identification' => 'Identification',
        'minimum_arranged_overdraft_amount' => 'MinimumArrangedOverdraftAmount',
        'notes' => 'Notes',
        'overdraft_fees_charges' => 'OverdraftFeesCharges',
        'overdraft_tier_band' => 'OverdraftTierBand',
        'overdraft_type' => 'OverdraftType',
        'tier_band_method' => 'TierBandMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorised_indicator' => 'setAuthorisedIndicator',
        'buffer_amount' => 'setBufferAmount',
        'identification' => 'setIdentification',
        'minimum_arranged_overdraft_amount' => 'setMinimumArrangedOverdraftAmount',
        'notes' => 'setNotes',
        'overdraft_fees_charges' => 'setOverdraftFeesCharges',
        'overdraft_tier_band' => 'setOverdraftTierBand',
        'overdraft_type' => 'setOverdraftType',
        'tier_band_method' => 'setTierBandMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorised_indicator' => 'getAuthorisedIndicator',
        'buffer_amount' => 'getBufferAmount',
        'identification' => 'getIdentification',
        'minimum_arranged_overdraft_amount' => 'getMinimumArrangedOverdraftAmount',
        'notes' => 'getNotes',
        'overdraft_fees_charges' => 'getOverdraftFeesCharges',
        'overdraft_tier_band' => 'getOverdraftTierBand',
        'overdraft_type' => 'getOverdraftType',
        'tier_band_method' => 'getTierBandMethod'
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

    const OVERDRAFT_TYPE_COMMITTED = 'Committed';
    const OVERDRAFT_TYPE_ON_DEMAND = 'OnDemand';
    const OVERDRAFT_TYPE_OTHER = 'Other';
    const TIER_BAND_METHOD_TIERED = 'Tiered';
    const TIER_BAND_METHOD_WHOLE = 'Whole';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOverdraftTypeAllowableValues()
    {
        return [
            self::OVERDRAFT_TYPE_COMMITTED,
            self::OVERDRAFT_TYPE_ON_DEMAND,
            self::OVERDRAFT_TYPE_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTierBandMethodAllowableValues()
    {
        return [
            self::TIER_BAND_METHOD_TIERED,
            self::TIER_BAND_METHOD_WHOLE,
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
        $this->container['authorised_indicator'] = isset($data['authorised_indicator']) ? $data['authorised_indicator'] : null;
        $this->container['buffer_amount'] = isset($data['buffer_amount']) ? $data['buffer_amount'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['minimum_arranged_overdraft_amount'] = isset($data['minimum_arranged_overdraft_amount']) ? $data['minimum_arranged_overdraft_amount'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['overdraft_fees_charges'] = isset($data['overdraft_fees_charges']) ? $data['overdraft_fees_charges'] : null;
        $this->container['overdraft_tier_band'] = isset($data['overdraft_tier_band']) ? $data['overdraft_tier_band'] : null;
        $this->container['overdraft_type'] = isset($data['overdraft_type']) ? $data['overdraft_type'] : null;
        $this->container['tier_band_method'] = isset($data['tier_band_method']) ? $data['tier_band_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOverdraftTypeAllowableValues();
        if (!is_null($this->container['overdraft_type']) && !in_array($this->container['overdraft_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'overdraft_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTierBandMethodAllowableValues();
        if (!is_null($this->container['tier_band_method']) && !in_array($this->container['tier_band_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tier_band_method', must be one of '%s'",
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
     * Gets authorised_indicator
     *
     * @return bool
     */
    public function getAuthorisedIndicator()
    {
        return $this->container['authorised_indicator'];
    }

    /**
     * Sets authorised_indicator
     *
     * @param bool $authorised_indicator authorised_indicator
     *
     * @return $this
     */
    public function setAuthorisedIndicator($authorised_indicator)
    {
        $this->container['authorised_indicator'] = $authorised_indicator;

        return $this;
    }

    /**
     * Gets buffer_amount
     *
     * @return string
     */
    public function getBufferAmount()
    {
        return $this->container['buffer_amount'];
    }

    /**
     * Sets buffer_amount
     *
     * @param string $buffer_amount buffer_amount
     *
     * @return $this
     */
    public function setBufferAmount($buffer_amount)
    {
        $this->container['buffer_amount'] = $buffer_amount;

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
     * Gets minimum_arranged_overdraft_amount
     *
     * @return string
     */
    public function getMinimumArrangedOverdraftAmount()
    {
        return $this->container['minimum_arranged_overdraft_amount'];
    }

    /**
     * Sets minimum_arranged_overdraft_amount
     *
     * @param string $minimum_arranged_overdraft_amount minimum_arranged_overdraft_amount
     *
     * @return $this
     */
    public function setMinimumArrangedOverdraftAmount($minimum_arranged_overdraft_amount)
    {
        $this->container['minimum_arranged_overdraft_amount'] = $minimum_arranged_overdraft_amount;

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
     * @return \Yapily\Model\OverdraftOverdraftFeesCharges1[]
     */
    public function getOverdraftFeesCharges()
    {
        return $this->container['overdraft_fees_charges'];
    }

    /**
     * Sets overdraft_fees_charges
     *
     * @param \Yapily\Model\OverdraftOverdraftFeesCharges1[] $overdraft_fees_charges overdraft_fees_charges
     *
     * @return $this
     */
    public function setOverdraftFeesCharges($overdraft_fees_charges)
    {
        $this->container['overdraft_fees_charges'] = $overdraft_fees_charges;

        return $this;
    }

    /**
     * Gets overdraft_tier_band
     *
     * @return \Yapily\Model\OverdraftOverdraftTierBand[]
     */
    public function getOverdraftTierBand()
    {
        return $this->container['overdraft_tier_band'];
    }

    /**
     * Sets overdraft_tier_band
     *
     * @param \Yapily\Model\OverdraftOverdraftTierBand[] $overdraft_tier_band overdraft_tier_band
     *
     * @return $this
     */
    public function setOverdraftTierBand($overdraft_tier_band)
    {
        $this->container['overdraft_tier_band'] = $overdraft_tier_band;

        return $this;
    }

    /**
     * Gets overdraft_type
     *
     * @return string
     */
    public function getOverdraftType()
    {
        return $this->container['overdraft_type'];
    }

    /**
     * Sets overdraft_type
     *
     * @param string $overdraft_type overdraft_type
     *
     * @return $this
     */
    public function setOverdraftType($overdraft_type)
    {
        $allowedValues = $this->getOverdraftTypeAllowableValues();
        if (!is_null($overdraft_type) && !in_array($overdraft_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'overdraft_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['overdraft_type'] = $overdraft_type;

        return $this;
    }

    /**
     * Gets tier_band_method
     *
     * @return string
     */
    public function getTierBandMethod()
    {
        return $this->container['tier_band_method'];
    }

    /**
     * Sets tier_band_method
     *
     * @param string $tier_band_method tier_band_method
     *
     * @return $this
     */
    public function setTierBandMethod($tier_band_method)
    {
        $allowedValues = $this->getTierBandMethodAllowableValues();
        if (!is_null($tier_band_method) && !in_array($tier_band_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tier_band_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tier_band_method'] = $tier_band_method;

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


