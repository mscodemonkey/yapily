<?php
/**
 * CreditInterestTierBandSet
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
 * CreditInterestTierBandSet Class Doc Comment
 *
 * @category Class
 * @description The group of tiers or bands for which credit interest can be applied.
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditInterestTierBandSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditInterestTierBandSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calculation_method' => 'string',
        'credit_interest_eligibility' => '\Yapily\Model\CreditInterestCreditInterestEligibility[]',
        'destination' => 'string',
        'notes' => 'string[]',
        'tier_band' => '\Yapily\Model\CreditInterestTierBand[]',
        'tier_band_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'calculation_method' => null,
        'credit_interest_eligibility' => null,
        'destination' => null,
        'notes' => null,
        'tier_band' => null,
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
        'calculation_method' => 'CalculationMethod',
        'credit_interest_eligibility' => 'CreditInterestEligibility',
        'destination' => 'Destination',
        'notes' => 'Notes',
        'tier_band' => 'TierBand',
        'tier_band_method' => 'TierBandMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calculation_method' => 'setCalculationMethod',
        'credit_interest_eligibility' => 'setCreditInterestEligibility',
        'destination' => 'setDestination',
        'notes' => 'setNotes',
        'tier_band' => 'setTierBand',
        'tier_band_method' => 'setTierBandMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calculation_method' => 'getCalculationMethod',
        'credit_interest_eligibility' => 'getCreditInterestEligibility',
        'destination' => 'getDestination',
        'notes' => 'getNotes',
        'tier_band' => 'getTierBand',
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

    const CALCULATION_METHOD_COMPOUND = 'Compound';
    const CALCULATION_METHOD_SIMPLE_INTEREST = 'SimpleInterest';
    const DESTINATION_PAY_AWAY = 'PayAway';
    const DESTINATION_SELF_CREDIT = 'SelfCredit';
    const TIER_BAND_METHOD_TIERED = 'Tiered';
    const TIER_BAND_METHOD_WHOLE = 'Whole';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationMethodAllowableValues()
    {
        return [
            self::CALCULATION_METHOD_COMPOUND,
            self::CALCULATION_METHOD_SIMPLE_INTEREST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationAllowableValues()
    {
        return [
            self::DESTINATION_PAY_AWAY,
            self::DESTINATION_SELF_CREDIT,
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
        $this->container['calculation_method'] = isset($data['calculation_method']) ? $data['calculation_method'] : null;
        $this->container['credit_interest_eligibility'] = isset($data['credit_interest_eligibility']) ? $data['credit_interest_eligibility'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['tier_band'] = isset($data['tier_band']) ? $data['tier_band'] : null;
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

        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!is_null($this->container['calculation_method']) && !in_array($this->container['calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDestinationAllowableValues();
        if (!is_null($this->container['destination']) && !in_array($this->container['destination'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination', must be one of '%s'",
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
     * Gets calculation_method
     *
     * @return string
     */
    public function getCalculationMethod()
    {
        return $this->container['calculation_method'];
    }

    /**
     * Sets calculation_method
     *
     * @param string $calculation_method calculation_method
     *
     * @return $this
     */
    public function setCalculationMethod($calculation_method)
    {
        $allowedValues = $this->getCalculationMethodAllowableValues();
        if (!is_null($calculation_method) && !in_array($calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['calculation_method'] = $calculation_method;

        return $this;
    }

    /**
     * Gets credit_interest_eligibility
     *
     * @return \Yapily\Model\CreditInterestCreditInterestEligibility[]
     */
    public function getCreditInterestEligibility()
    {
        return $this->container['credit_interest_eligibility'];
    }

    /**
     * Sets credit_interest_eligibility
     *
     * @param \Yapily\Model\CreditInterestCreditInterestEligibility[] $credit_interest_eligibility credit_interest_eligibility
     *
     * @return $this
     */
    public function setCreditInterestEligibility($credit_interest_eligibility)
    {
        $this->container['credit_interest_eligibility'] = $credit_interest_eligibility;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination destination
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $allowedValues = $this->getDestinationAllowableValues();
        if (!is_null($destination) && !in_array($destination, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination'] = $destination;

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
     * Gets tier_band
     *
     * @return \Yapily\Model\CreditInterestTierBand[]
     */
    public function getTierBand()
    {
        return $this->container['tier_band'];
    }

    /**
     * Sets tier_band
     *
     * @param \Yapily\Model\CreditInterestTierBand[] $tier_band tier_band
     *
     * @return $this
     */
    public function setTierBand($tier_band)
    {
        $this->container['tier_band'] = $tier_band;

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

