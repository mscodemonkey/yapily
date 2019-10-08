<?php
/**
 * EligibilityOtherEligibility
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
 * EligibilityOtherEligibility Class Doc Comment
 *
 * @category Class
 * @description Other eligibility which is not covered by the main eligibility of the PCA product
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EligibilityOtherEligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EligibilityOtherEligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'string',
        'description' => 'string',
        'indicator' => 'bool',
        'name' => 'string',
        'notes' => 'string[]',
        'other_type' => '\Yapily\Model\OtherType',
        'period' => 'string',
        'textual' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'description' => null,
        'indicator' => null,
        'name' => null,
        'notes' => null,
        'other_type' => null,
        'period' => null,
        'textual' => null,
        'type' => null
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
        'amount' => 'Amount',
        'description' => 'Description',
        'indicator' => 'Indicator',
        'name' => 'Name',
        'notes' => 'Notes',
        'other_type' => 'OtherType',
        'period' => 'Period',
        'textual' => 'Textual',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'indicator' => 'setIndicator',
        'name' => 'setName',
        'notes' => 'setNotes',
        'other_type' => 'setOtherType',
        'period' => 'setPeriod',
        'textual' => 'setTextual',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'indicator' => 'getIndicator',
        'name' => 'getName',
        'notes' => 'getNotes',
        'other_type' => 'getOtherType',
        'period' => 'getPeriod',
        'textual' => 'getTextual',
        'type' => 'getType'
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

    const PERIOD_DAY = 'Day';
    const PERIOD_HALF_YEAR = 'Half Year';
    const PERIOD_MONTH = 'Month';
    const PERIOD_QUARTER = 'Quarter';
    const PERIOD_WEEK = 'Week';
    const PERIOD_ACADEMIC_TERM = 'AcademicTerm';
    const PERIOD_YEAR = 'Year';
    const TYPE_DIRECT_DEBITS = 'DirectDebits';
    const TYPE_EXISTING_CUSTOMERS = 'ExistingCustomers';
    const TYPE_MINIMUM_OPERATING_BALANCE = 'MinimumOperatingBalance';
    const TYPE_MINIMUM_DEPOSIT = 'MinimumDeposit';
    const TYPE_NEW_CUSTOMERS_ONLY = 'NewCustomersOnly';
    const TYPE_PREVIOUS_BANKRUPTCY_ALLOWED = 'PreviousBankruptcyAllowed';
    const TYPE_OTHER = 'Other';
    const TYPE_STUDENTS_ONLY = 'StudentsOnly';
    const TYPE_SOLE_STUDENT_ACCOUNT = 'SoleStudentAccount';
    const TYPE_SOLE_UK_ACCOUNT = 'SoleUkAccount';
    const TYPE_SWITCHERS_ONLY = 'SwitchersOnly';
    const TYPE_UCAS_FULLTIME_TWO_YEARS = 'UCASFulltimeTwoYears';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_DAY,
            self::PERIOD_HALF_YEAR,
            self::PERIOD_MONTH,
            self::PERIOD_QUARTER,
            self::PERIOD_WEEK,
            self::PERIOD_ACADEMIC_TERM,
            self::PERIOD_YEAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DIRECT_DEBITS,
            self::TYPE_EXISTING_CUSTOMERS,
            self::TYPE_MINIMUM_OPERATING_BALANCE,
            self::TYPE_MINIMUM_DEPOSIT,
            self::TYPE_NEW_CUSTOMERS_ONLY,
            self::TYPE_PREVIOUS_BANKRUPTCY_ALLOWED,
            self::TYPE_OTHER,
            self::TYPE_STUDENTS_ONLY,
            self::TYPE_SOLE_STUDENT_ACCOUNT,
            self::TYPE_SOLE_UK_ACCOUNT,
            self::TYPE_SWITCHERS_ONLY,
            self::TYPE_UCAS_FULLTIME_TWO_YEARS,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['indicator'] = isset($data['indicator']) ? $data['indicator'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['other_type'] = isset($data['other_type']) ? $data['other_type'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['textual'] = isset($data['textual']) ? $data['textual'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets indicator
     *
     * @return bool
     */
    public function getIndicator()
    {
        return $this->container['indicator'];
    }

    /**
     * Sets indicator
     *
     * @param bool $indicator indicator
     *
     * @return $this
     */
    public function setIndicator($indicator)
    {
        $this->container['indicator'] = $indicator;

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
     * Gets other_type
     *
     * @return \Yapily\Model\OtherType
     */
    public function getOtherType()
    {
        return $this->container['other_type'];
    }

    /**
     * Sets other_type
     *
     * @param \Yapily\Model\OtherType $other_type other_type
     *
     * @return $this
     */
    public function setOtherType($other_type)
    {
        $this->container['other_type'] = $other_type;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($period) && !in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets textual
     *
     * @return string
     */
    public function getTextual()
    {
        return $this->container['textual'];
    }

    /**
     * Sets textual
     *
     * @param string $textual textual
     *
     * @return $this
     */
    public function setTextual($textual)
    {
        $this->container['textual'] = $textual;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


