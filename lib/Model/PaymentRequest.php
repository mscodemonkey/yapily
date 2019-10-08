<?php
/**
 * PaymentRequest
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
 * PaymentRequest Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_idempotency_id' => 'string',
        'payer_account_identifications' => '\Yapily\Model\AccountIdentification[]',
        'amount' => '\Yapily\Model\Amount',
        'reference' => 'string',
        'context_type' => 'string',
        'type' => 'string',
        'payment_date_time' => '\DateTime',
        'payee' => '\Yapily\Model\Payee'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_idempotency_id' => null,
        'payer_account_identifications' => null,
        'amount' => null,
        'reference' => null,
        'context_type' => null,
        'type' => null,
        'payment_date_time' => 'date-time',
        'payee' => null
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
        'payment_idempotency_id' => 'paymentIdempotencyId',
        'payer_account_identifications' => 'payerAccountIdentifications',
        'amount' => 'amount',
        'reference' => 'reference',
        'context_type' => 'contextType',
        'type' => 'type',
        'payment_date_time' => 'paymentDateTime',
        'payee' => 'payee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_idempotency_id' => 'setPaymentIdempotencyId',
        'payer_account_identifications' => 'setPayerAccountIdentifications',
        'amount' => 'setAmount',
        'reference' => 'setReference',
        'context_type' => 'setContextType',
        'type' => 'setType',
        'payment_date_time' => 'setPaymentDateTime',
        'payee' => 'setPayee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_idempotency_id' => 'getPaymentIdempotencyId',
        'payer_account_identifications' => 'getPayerAccountIdentifications',
        'amount' => 'getAmount',
        'reference' => 'getReference',
        'context_type' => 'getContextType',
        'type' => 'getType',
        'payment_date_time' => 'getPaymentDateTime',
        'payee' => 'getPayee'
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

    const CONTEXT_TYPE_BILL = 'BILL';
    const CONTEXT_TYPE_GOODS = 'GOODS';
    const CONTEXT_TYPE_SERVICES = 'SERVICES';
    const CONTEXT_TYPE_OTHER = 'OTHER';
    const CONTEXT_TYPE_PERSON_TO_PERSON = 'PERSON_TO_PERSON';
    const TYPE_PAYMENT = 'DOMESTIC_PAYMENT';
    const TYPE_VARIABLE_RECURRING_PAYMENT = 'DOMESTIC_VARIABLE_RECURRING_PAYMENT';
    const TYPE_SCHEDULED_PAYMENT = 'DOMESTIC_SCHEDULED_PAYMENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContextTypeAllowableValues()
    {
        return [
            self::CONTEXT_TYPE_BILL,
            self::CONTEXT_TYPE_GOODS,
            self::CONTEXT_TYPE_SERVICES,
            self::CONTEXT_TYPE_OTHER,
            self::CONTEXT_TYPE_PERSON_TO_PERSON,
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
            self::TYPE_PAYMENT,
            self::TYPE_VARIABLE_RECURRING_PAYMENT,
            self::TYPE_SCHEDULED_PAYMENT,
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
        $this->container['payment_idempotency_id'] = isset($data['payment_idempotency_id']) ? $data['payment_idempotency_id'] : null;
        $this->container['payer_account_identifications'] = isset($data['payer_account_identifications']) ? $data['payer_account_identifications'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['context_type'] = isset($data['context_type']) ? $data['context_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['payment_date_time'] = isset($data['payment_date_time']) ? $data['payment_date_time'] : null;
        $this->container['payee'] = isset($data['payee']) ? $data['payee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_idempotency_id'] === null) {
            $invalidProperties[] = "'payment_idempotency_id' can't be null";
        }
        $allowedValues = $this->getContextTypeAllowableValues();
        if (!is_null($this->container['context_type']) && !in_array($this->container['context_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'context_type', must be one of '%s'",
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

        if ($this->container['payee'] === null) {
            $invalidProperties[] = "'payee' can't be null";
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
     * Gets payment_idempotency_id
     *
     * @return string
     */
    public function getPaymentIdempotencyId()
    {
        return $this->container['payment_idempotency_id'];
    }

    /**
     * Sets payment_idempotency_id
     *
     * @param string $payment_idempotency_id payment_idempotency_id
     *
     * @return $this
     */
    public function setPaymentIdempotencyId($payment_idempotency_id)
    {
        $this->container['payment_idempotency_id'] = $payment_idempotency_id;

        return $this;
    }

    /**
     * Gets payer_account_identifications
     *
     * @return \Yapily\Model\AccountIdentification[]
     */
    public function getPayerAccountIdentifications()
    {
        return $this->container['payer_account_identifications'];
    }

    /**
     * Sets payer_account_identifications
     *
     * @param \Yapily\Model\AccountIdentification[] $payer_account_identifications payer_account_identifications
     *
     * @return $this
     */
    public function setPayerAccountIdentifications($payer_account_identifications)
    {
        $this->container['payer_account_identifications'] = $payer_account_identifications;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Yapily\Model\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Yapily\Model\Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets context_type
     *
     * @return string
     */
    public function getContextType()
    {
        return $this->container['context_type'];
    }

    /**
     * Sets context_type
     *
     * @param string $context_type context_type
     *
     * @return $this
     */
    public function setContextType($context_type)
    {
        $allowedValues = $this->getContextTypeAllowableValues();
        if (!is_null($context_type) && !in_array($context_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'context_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['context_type'] = $context_type;

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
     * Gets payment_date_time
     *
     * @return \DateTime
     */
    public function getPaymentDateTime()
    {
        return $this->container['payment_date_time'];
    }

    /**
     * Sets payment_date_time
     *
     * @param \DateTime $payment_date_time payment_date_time
     *
     * @return $this
     */
    public function setPaymentDateTime($payment_date_time)
    {
        $this->container['payment_date_time'] = $payment_date_time;

        return $this;
    }

    /**
     * Gets payee
     *
     * @return \Yapily\Model\Payee
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param \Yapily\Model\Payee $payee payee
     *
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

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


