<?php
/**
 * Eligibility
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
 * Eligibility Class Doc Comment
 *
 * @category Class
 * @description Eligibility details for this product i.e. the criteria that an accountholder has to meet in order to be eligible for the PCA product.
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Eligibility implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Eligibility';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'age_eligibility' => '\Yapily\Model\AgeEligibility',
        'credit_check' => '\Yapily\Model\CreditCheck',
        'id_verification_check' => '\Yapily\Model\IDVerificationCheck',
        'other_eligibility' => '\Yapily\Model\EligibilityOtherEligibility[]',
        'residency_eligibility' => '\Yapily\Model\ResidencyEligibility'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'age_eligibility' => null,
        'credit_check' => null,
        'id_verification_check' => null,
        'other_eligibility' => null,
        'residency_eligibility' => null
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
        'age_eligibility' => 'AgeEligibility',
        'credit_check' => 'CreditCheck',
        'id_verification_check' => 'IDVerificationCheck',
        'other_eligibility' => 'OtherEligibility',
        'residency_eligibility' => 'ResidencyEligibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age_eligibility' => 'setAgeEligibility',
        'credit_check' => 'setCreditCheck',
        'id_verification_check' => 'setIdVerificationCheck',
        'other_eligibility' => 'setOtherEligibility',
        'residency_eligibility' => 'setResidencyEligibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age_eligibility' => 'getAgeEligibility',
        'credit_check' => 'getCreditCheck',
        'id_verification_check' => 'getIdVerificationCheck',
        'other_eligibility' => 'getOtherEligibility',
        'residency_eligibility' => 'getResidencyEligibility'
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
        $this->container['age_eligibility'] = isset($data['age_eligibility']) ? $data['age_eligibility'] : null;
        $this->container['credit_check'] = isset($data['credit_check']) ? $data['credit_check'] : null;
        $this->container['id_verification_check'] = isset($data['id_verification_check']) ? $data['id_verification_check'] : null;
        $this->container['other_eligibility'] = isset($data['other_eligibility']) ? $data['other_eligibility'] : null;
        $this->container['residency_eligibility'] = isset($data['residency_eligibility']) ? $data['residency_eligibility'] : null;
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
     * Gets age_eligibility
     *
     * @return \Yapily\Model\AgeEligibility
     */
    public function getAgeEligibility()
    {
        return $this->container['age_eligibility'];
    }

    /**
     * Sets age_eligibility
     *
     * @param \Yapily\Model\AgeEligibility $age_eligibility age_eligibility
     *
     * @return $this
     */
    public function setAgeEligibility($age_eligibility)
    {
        $this->container['age_eligibility'] = $age_eligibility;

        return $this;
    }

    /**
     * Gets credit_check
     *
     * @return \Yapily\Model\CreditCheck
     */
    public function getCreditCheck()
    {
        return $this->container['credit_check'];
    }

    /**
     * Sets credit_check
     *
     * @param \Yapily\Model\CreditCheck $credit_check credit_check
     *
     * @return $this
     */
    public function setCreditCheck($credit_check)
    {
        $this->container['credit_check'] = $credit_check;

        return $this;
    }

    /**
     * Gets id_verification_check
     *
     * @return \Yapily\Model\IDVerificationCheck
     */
    public function getIdVerificationCheck()
    {
        return $this->container['id_verification_check'];
    }

    /**
     * Sets id_verification_check
     *
     * @param \Yapily\Model\IDVerificationCheck $id_verification_check id_verification_check
     *
     * @return $this
     */
    public function setIdVerificationCheck($id_verification_check)
    {
        $this->container['id_verification_check'] = $id_verification_check;

        return $this;
    }

    /**
     * Gets other_eligibility
     *
     * @return \Yapily\Model\EligibilityOtherEligibility[]
     */
    public function getOtherEligibility()
    {
        return $this->container['other_eligibility'];
    }

    /**
     * Sets other_eligibility
     *
     * @param \Yapily\Model\EligibilityOtherEligibility[] $other_eligibility other_eligibility
     *
     * @return $this
     */
    public function setOtherEligibility($other_eligibility)
    {
        $this->container['other_eligibility'] = $other_eligibility;

        return $this;
    }

    /**
     * Gets residency_eligibility
     *
     * @return \Yapily\Model\ResidencyEligibility
     */
    public function getResidencyEligibility()
    {
        return $this->container['residency_eligibility'];
    }

    /**
     * Sets residency_eligibility
     *
     * @param \Yapily\Model\ResidencyEligibility $residency_eligibility residency_eligibility
     *
     * @return $this
     */
    public function setResidencyEligibility($residency_eligibility)
    {
        $this->container['residency_eligibility'] = $residency_eligibility;

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


