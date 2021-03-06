<?php
/**
 * CreditInterestTierBand
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
 * CreditInterestTierBand Class Doc Comment
 *
 * @category Class
 * @description Tier Band Details
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditInterestTierBand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditInterestTierBand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aer' => 'string',
        'application_frequency' => 'string',
        'bank_interest_rate' => 'string',
        'bank_interest_rate_type' => 'string',
        'calculation_frequency' => 'string',
        'deposit_interest_applied_coverage' => 'string',
        'fixed_variable_interest_rate_type' => 'string',
        'identification' => 'string',
        'notes' => 'string[]',
        'other_application_frequency' => '\Yapily\Model\OtherApplicationFrequency',
        'other_bank_interest_type' => '\Yapily\Model\OtherBankInterestType',
        'other_calculation_frequency' => '\Yapily\Model\OtherCalculationFrequency',
        'tier_value_maximum' => 'string',
        'tier_value_minimum' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aer' => null,
        'application_frequency' => null,
        'bank_interest_rate' => null,
        'bank_interest_rate_type' => null,
        'calculation_frequency' => null,
        'deposit_interest_applied_coverage' => null,
        'fixed_variable_interest_rate_type' => null,
        'identification' => null,
        'notes' => null,
        'other_application_frequency' => null,
        'other_bank_interest_type' => null,
        'other_calculation_frequency' => null,
        'tier_value_maximum' => null,
        'tier_value_minimum' => null
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
        'aer' => 'AER',
        'application_frequency' => 'ApplicationFrequency',
        'bank_interest_rate' => 'BankInterestRate',
        'bank_interest_rate_type' => 'BankInterestRateType',
        'calculation_frequency' => 'CalculationFrequency',
        'deposit_interest_applied_coverage' => 'DepositInterestAppliedCoverage',
        'fixed_variable_interest_rate_type' => 'FixedVariableInterestRateType',
        'identification' => 'Identification',
        'notes' => 'Notes',
        'other_application_frequency' => 'OtherApplicationFrequency',
        'other_bank_interest_type' => 'OtherBankInterestType',
        'other_calculation_frequency' => 'OtherCalculationFrequency',
        'tier_value_maximum' => 'TierValueMaximum',
        'tier_value_minimum' => 'TierValueMinimum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aer' => 'setAer',
        'application_frequency' => 'setApplicationFrequency',
        'bank_interest_rate' => 'setBankInterestRate',
        'bank_interest_rate_type' => 'setBankInterestRateType',
        'calculation_frequency' => 'setCalculationFrequency',
        'deposit_interest_applied_coverage' => 'setDepositInterestAppliedCoverage',
        'fixed_variable_interest_rate_type' => 'setFixedVariableInterestRateType',
        'identification' => 'setIdentification',
        'notes' => 'setNotes',
        'other_application_frequency' => 'setOtherApplicationFrequency',
        'other_bank_interest_type' => 'setOtherBankInterestType',
        'other_calculation_frequency' => 'setOtherCalculationFrequency',
        'tier_value_maximum' => 'setTierValueMaximum',
        'tier_value_minimum' => 'setTierValueMinimum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aer' => 'getAer',
        'application_frequency' => 'getApplicationFrequency',
        'bank_interest_rate' => 'getBankInterestRate',
        'bank_interest_rate_type' => 'getBankInterestRateType',
        'calculation_frequency' => 'getCalculationFrequency',
        'deposit_interest_applied_coverage' => 'getDepositInterestAppliedCoverage',
        'fixed_variable_interest_rate_type' => 'getFixedVariableInterestRateType',
        'identification' => 'getIdentification',
        'notes' => 'getNotes',
        'other_application_frequency' => 'getOtherApplicationFrequency',
        'other_bank_interest_type' => 'getOtherBankInterestType',
        'other_calculation_frequency' => 'getOtherCalculationFrequency',
        'tier_value_maximum' => 'getTierValueMaximum',
        'tier_value_minimum' => 'getTierValueMinimum'
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

    const APPLICATION_FREQUENCY_PER_ACADEMIC_TERM = 'PerAcademicTerm';
    const APPLICATION_FREQUENCY_DAILY = 'Daily';
    const APPLICATION_FREQUENCY_HALF_YEARLY = 'HalfYearly';
    const APPLICATION_FREQUENCY_MONTHLY = 'Monthly';
    const APPLICATION_FREQUENCY_OTHER = 'Other';
    const APPLICATION_FREQUENCY_QUARTERLY = 'Quarterly';
    const APPLICATION_FREQUENCY_PER_STATEMENT_DATE = 'PerStatementDate';
    const APPLICATION_FREQUENCY_WEEKLY = 'Weekly';
    const APPLICATION_FREQUENCY_YEARLY = 'Yearly';
    const BANK_INTEREST_RATE_TYPE_LINKED_BASE_RATE = 'LinkedBaseRate';
    const BANK_INTEREST_RATE_TYPE_GROSS = 'Gross';
    const BANK_INTEREST_RATE_TYPE_NET = 'Net';
    const BANK_INTEREST_RATE_TYPE_OTHER = 'Other';
    const CALCULATION_FREQUENCY_PER_ACADEMIC_TERM = 'PerAcademicTerm';
    const CALCULATION_FREQUENCY_DAILY = 'Daily';
    const CALCULATION_FREQUENCY_HALF_YEARLY = 'HalfYearly';
    const CALCULATION_FREQUENCY_MONTHLY = 'Monthly';
    const CALCULATION_FREQUENCY_OTHER = 'Other';
    const CALCULATION_FREQUENCY_QUARTERLY = 'Quarterly';
    const CALCULATION_FREQUENCY_PER_STATEMENT_DATE = 'PerStatementDate';
    const CALCULATION_FREQUENCY_WEEKLY = 'Weekly';
    const CALCULATION_FREQUENCY_YEARLY = 'Yearly';
    const DEPOSIT_INTEREST_APPLIED_COVERAGE_TIERED = 'Tiered';
    const DEPOSIT_INTEREST_APPLIED_COVERAGE_WHOLE = 'Whole';
    const FIXED_VARIABLE_INTEREST_RATE_TYPE_FIXED = 'Fixed';
    const FIXED_VARIABLE_INTEREST_RATE_TYPE_VARIABLE = 'Variable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicationFrequencyAllowableValues()
    {
        return [
            self::APPLICATION_FREQUENCY_PER_ACADEMIC_TERM,
            self::APPLICATION_FREQUENCY_DAILY,
            self::APPLICATION_FREQUENCY_HALF_YEARLY,
            self::APPLICATION_FREQUENCY_MONTHLY,
            self::APPLICATION_FREQUENCY_OTHER,
            self::APPLICATION_FREQUENCY_QUARTERLY,
            self::APPLICATION_FREQUENCY_PER_STATEMENT_DATE,
            self::APPLICATION_FREQUENCY_WEEKLY,
            self::APPLICATION_FREQUENCY_YEARLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankInterestRateTypeAllowableValues()
    {
        return [
            self::BANK_INTEREST_RATE_TYPE_LINKED_BASE_RATE,
            self::BANK_INTEREST_RATE_TYPE_GROSS,
            self::BANK_INTEREST_RATE_TYPE_NET,
            self::BANK_INTEREST_RATE_TYPE_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationFrequencyAllowableValues()
    {
        return [
            self::CALCULATION_FREQUENCY_PER_ACADEMIC_TERM,
            self::CALCULATION_FREQUENCY_DAILY,
            self::CALCULATION_FREQUENCY_HALF_YEARLY,
            self::CALCULATION_FREQUENCY_MONTHLY,
            self::CALCULATION_FREQUENCY_OTHER,
            self::CALCULATION_FREQUENCY_QUARTERLY,
            self::CALCULATION_FREQUENCY_PER_STATEMENT_DATE,
            self::CALCULATION_FREQUENCY_WEEKLY,
            self::CALCULATION_FREQUENCY_YEARLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepositInterestAppliedCoverageAllowableValues()
    {
        return [
            self::DEPOSIT_INTEREST_APPLIED_COVERAGE_TIERED,
            self::DEPOSIT_INTEREST_APPLIED_COVERAGE_WHOLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFixedVariableInterestRateTypeAllowableValues()
    {
        return [
            self::FIXED_VARIABLE_INTEREST_RATE_TYPE_FIXED,
            self::FIXED_VARIABLE_INTEREST_RATE_TYPE_VARIABLE,
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
        $this->container['aer'] = isset($data['aer']) ? $data['aer'] : null;
        $this->container['application_frequency'] = isset($data['application_frequency']) ? $data['application_frequency'] : null;
        $this->container['bank_interest_rate'] = isset($data['bank_interest_rate']) ? $data['bank_interest_rate'] : null;
        $this->container['bank_interest_rate_type'] = isset($data['bank_interest_rate_type']) ? $data['bank_interest_rate_type'] : null;
        $this->container['calculation_frequency'] = isset($data['calculation_frequency']) ? $data['calculation_frequency'] : null;
        $this->container['deposit_interest_applied_coverage'] = isset($data['deposit_interest_applied_coverage']) ? $data['deposit_interest_applied_coverage'] : null;
        $this->container['fixed_variable_interest_rate_type'] = isset($data['fixed_variable_interest_rate_type']) ? $data['fixed_variable_interest_rate_type'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['other_application_frequency'] = isset($data['other_application_frequency']) ? $data['other_application_frequency'] : null;
        $this->container['other_bank_interest_type'] = isset($data['other_bank_interest_type']) ? $data['other_bank_interest_type'] : null;
        $this->container['other_calculation_frequency'] = isset($data['other_calculation_frequency']) ? $data['other_calculation_frequency'] : null;
        $this->container['tier_value_maximum'] = isset($data['tier_value_maximum']) ? $data['tier_value_maximum'] : null;
        $this->container['tier_value_minimum'] = isset($data['tier_value_minimum']) ? $data['tier_value_minimum'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApplicationFrequencyAllowableValues();
        if (!is_null($this->container['application_frequency']) && !in_array($this->container['application_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'application_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBankInterestRateTypeAllowableValues();
        if (!is_null($this->container['bank_interest_rate_type']) && !in_array($this->container['bank_interest_rate_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bank_interest_rate_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCalculationFrequencyAllowableValues();
        if (!is_null($this->container['calculation_frequency']) && !in_array($this->container['calculation_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDepositInterestAppliedCoverageAllowableValues();
        if (!is_null($this->container['deposit_interest_applied_coverage']) && !in_array($this->container['deposit_interest_applied_coverage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deposit_interest_applied_coverage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFixedVariableInterestRateTypeAllowableValues();
        if (!is_null($this->container['fixed_variable_interest_rate_type']) && !in_array($this->container['fixed_variable_interest_rate_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fixed_variable_interest_rate_type', must be one of '%s'",
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
     * Gets aer
     *
     * @return string
     */
    public function getAer()
    {
        return $this->container['aer'];
    }

    /**
     * Sets aer
     *
     * @param string $aer aer
     *
     * @return $this
     */
    public function setAer($aer)
    {
        $this->container['aer'] = $aer;

        return $this;
    }

    /**
     * Gets application_frequency
     *
     * @return string
     */
    public function getApplicationFrequency()
    {
        return $this->container['application_frequency'];
    }

    /**
     * Sets application_frequency
     *
     * @param string $application_frequency application_frequency
     *
     * @return $this
     */
    public function setApplicationFrequency($application_frequency)
    {
        $allowedValues = $this->getApplicationFrequencyAllowableValues();
        if (!is_null($application_frequency) && !in_array($application_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'application_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['application_frequency'] = $application_frequency;

        return $this;
    }

    /**
     * Gets bank_interest_rate
     *
     * @return string
     */
    public function getBankInterestRate()
    {
        return $this->container['bank_interest_rate'];
    }

    /**
     * Sets bank_interest_rate
     *
     * @param string $bank_interest_rate bank_interest_rate
     *
     * @return $this
     */
    public function setBankInterestRate($bank_interest_rate)
    {
        $this->container['bank_interest_rate'] = $bank_interest_rate;

        return $this;
    }

    /**
     * Gets bank_interest_rate_type
     *
     * @return string
     */
    public function getBankInterestRateType()
    {
        return $this->container['bank_interest_rate_type'];
    }

    /**
     * Sets bank_interest_rate_type
     *
     * @param string $bank_interest_rate_type bank_interest_rate_type
     *
     * @return $this
     */
    public function setBankInterestRateType($bank_interest_rate_type)
    {
        $allowedValues = $this->getBankInterestRateTypeAllowableValues();
        if (!is_null($bank_interest_rate_type) && !in_array($bank_interest_rate_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bank_interest_rate_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_interest_rate_type'] = $bank_interest_rate_type;

        return $this;
    }

    /**
     * Gets calculation_frequency
     *
     * @return string
     */
    public function getCalculationFrequency()
    {
        return $this->container['calculation_frequency'];
    }

    /**
     * Sets calculation_frequency
     *
     * @param string $calculation_frequency calculation_frequency
     *
     * @return $this
     */
    public function setCalculationFrequency($calculation_frequency)
    {
        $allowedValues = $this->getCalculationFrequencyAllowableValues();
        if (!is_null($calculation_frequency) && !in_array($calculation_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['calculation_frequency'] = $calculation_frequency;

        return $this;
    }

    /**
     * Gets deposit_interest_applied_coverage
     *
     * @return string
     */
    public function getDepositInterestAppliedCoverage()
    {
        return $this->container['deposit_interest_applied_coverage'];
    }

    /**
     * Sets deposit_interest_applied_coverage
     *
     * @param string $deposit_interest_applied_coverage deposit_interest_applied_coverage
     *
     * @return $this
     */
    public function setDepositInterestAppliedCoverage($deposit_interest_applied_coverage)
    {
        $allowedValues = $this->getDepositInterestAppliedCoverageAllowableValues();
        if (!is_null($deposit_interest_applied_coverage) && !in_array($deposit_interest_applied_coverage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deposit_interest_applied_coverage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deposit_interest_applied_coverage'] = $deposit_interest_applied_coverage;

        return $this;
    }

    /**
     * Gets fixed_variable_interest_rate_type
     *
     * @return string
     */
    public function getFixedVariableInterestRateType()
    {
        return $this->container['fixed_variable_interest_rate_type'];
    }

    /**
     * Sets fixed_variable_interest_rate_type
     *
     * @param string $fixed_variable_interest_rate_type fixed_variable_interest_rate_type
     *
     * @return $this
     */
    public function setFixedVariableInterestRateType($fixed_variable_interest_rate_type)
    {
        $allowedValues = $this->getFixedVariableInterestRateTypeAllowableValues();
        if (!is_null($fixed_variable_interest_rate_type) && !in_array($fixed_variable_interest_rate_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fixed_variable_interest_rate_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fixed_variable_interest_rate_type'] = $fixed_variable_interest_rate_type;

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
     * Gets other_application_frequency
     *
     * @return \Yapily\Model\OtherApplicationFrequency
     */
    public function getOtherApplicationFrequency()
    {
        return $this->container['other_application_frequency'];
    }

    /**
     * Sets other_application_frequency
     *
     * @param \Yapily\Model\OtherApplicationFrequency $other_application_frequency other_application_frequency
     *
     * @return $this
     */
    public function setOtherApplicationFrequency($other_application_frequency)
    {
        $this->container['other_application_frequency'] = $other_application_frequency;

        return $this;
    }

    /**
     * Gets other_bank_interest_type
     *
     * @return \Yapily\Model\OtherBankInterestType
     */
    public function getOtherBankInterestType()
    {
        return $this->container['other_bank_interest_type'];
    }

    /**
     * Sets other_bank_interest_type
     *
     * @param \Yapily\Model\OtherBankInterestType $other_bank_interest_type other_bank_interest_type
     *
     * @return $this
     */
    public function setOtherBankInterestType($other_bank_interest_type)
    {
        $this->container['other_bank_interest_type'] = $other_bank_interest_type;

        return $this;
    }

    /**
     * Gets other_calculation_frequency
     *
     * @return \Yapily\Model\OtherCalculationFrequency
     */
    public function getOtherCalculationFrequency()
    {
        return $this->container['other_calculation_frequency'];
    }

    /**
     * Sets other_calculation_frequency
     *
     * @param \Yapily\Model\OtherCalculationFrequency $other_calculation_frequency other_calculation_frequency
     *
     * @return $this
     */
    public function setOtherCalculationFrequency($other_calculation_frequency)
    {
        $this->container['other_calculation_frequency'] = $other_calculation_frequency;

        return $this;
    }

    /**
     * Gets tier_value_maximum
     *
     * @return string
     */
    public function getTierValueMaximum()
    {
        return $this->container['tier_value_maximum'];
    }

    /**
     * Sets tier_value_maximum
     *
     * @param string $tier_value_maximum tier_value_maximum
     *
     * @return $this
     */
    public function setTierValueMaximum($tier_value_maximum)
    {
        $this->container['tier_value_maximum'] = $tier_value_maximum;

        return $this;
    }

    /**
     * Gets tier_value_minimum
     *
     * @return string
     */
    public function getTierValueMinimum()
    {
        return $this->container['tier_value_minimum'];
    }

    /**
     * Sets tier_value_minimum
     *
     * @param string $tier_value_minimum tier_value_minimum
     *
     * @return $this
     */
    public function setTierValueMinimum($tier_value_minimum)
    {
        $this->container['tier_value_minimum'] = $tier_value_minimum;

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


