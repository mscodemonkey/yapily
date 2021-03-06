<?php
/**
 * Institution
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
 * Institution Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Institution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Institution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'full_name' => 'string',
        'countries' => '\Yapily\Model\Country[]',
        'environment_type' => 'string',
        'credentials_type' => 'string',
        'media' => '\Yapily\Model\Media[]',
        'features' => 'string[]',
        'monitoring' => 'map[string,\Yapily\Model\MonitoringFeatureStatus]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'full_name' => null,
        'countries' => null,
        'environment_type' => null,
        'credentials_type' => null,
        'media' => null,
        'features' => null,
        'monitoring' => null
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
        'id' => 'id',
        'name' => 'name',
        'full_name' => 'fullName',
        'countries' => 'countries',
        'environment_type' => 'environmentType',
        'credentials_type' => 'credentialsType',
        'media' => 'media',
        'features' => 'features',
        'monitoring' => 'monitoring'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'full_name' => 'setFullName',
        'countries' => 'setCountries',
        'environment_type' => 'setEnvironmentType',
        'credentials_type' => 'setCredentialsType',
        'media' => 'setMedia',
        'features' => 'setFeatures',
        'monitoring' => 'setMonitoring'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'full_name' => 'getFullName',
        'countries' => 'getCountries',
        'environment_type' => 'getEnvironmentType',
        'credentials_type' => 'getCredentialsType',
        'media' => 'getMedia',
        'features' => 'getFeatures',
        'monitoring' => 'getMonitoring'
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

    const ENVIRONMENT_TYPE_SANDBOX = 'SANDBOX';
    const ENVIRONMENT_TYPE_MOCK = 'MOCK';
    const ENVIRONMENT_TYPE_LIVE = 'LIVE';
    const CREDENTIALS_TYPE_OAUTH1 = 'OAUTH1';
    const CREDENTIALS_TYPE_OAUTH2 = 'OAUTH2';
    const CREDENTIALS_TYPE_OAUTH2_NOSECRET = 'OAUTH2_NOSECRET';
    const CREDENTIALS_TYPE_OAUTH2_SIGNATURE = 'OAUTH2_SIGNATURE';
    const CREDENTIALS_TYPE_OPEN_BANKING = 'OPEN_BANKING';
    const CREDENTIALS_TYPE_OPEN_BANKING_UK_MANUAL = 'OPEN_BANKING_UK_MANUAL';
    const CREDENTIALS_TYPE_OPEN_BANKING_UK_AUTO = 'OPEN_BANKING_UK_AUTO';
    const CREDENTIALS_TYPE_OPEN_BANKING_IBM = 'OPEN_BANKING_IBM';
    const CREDENTIALS_TYPE_OPEN_BANKING_AUTO = 'OPEN_BANKING_AUTO';
    const CREDENTIALS_TYPE_OPEN_BANKING_MANUAL = 'OPEN_BANKING_MANUAL';
    const CREDENTIALS_TYPE_API_KEY = 'API_KEY';
    const FEATURES_INITIATE_ACCOUNT_REQUEST = 'INITIATE_ACCOUNT_REQUEST';
    const FEATURES_ACCOUNT_REQUEST_DETAILS = 'ACCOUNT_REQUEST_DETAILS';
    const FEATURES_ACCOUNTS = 'ACCOUNTS';
    const FEATURES_ACCOUNT = 'ACCOUNT';
    const FEATURES_ACCOUNT_TRANSACTIONS = 'ACCOUNT_TRANSACTIONS';
    const FEATURES_ACCOUNT_STATEMENTS = 'ACCOUNT_STATEMENTS';
    const FEATURES_ACCOUNT_STATEMENT = 'ACCOUNT_STATEMENT';
    const FEATURES_ACCOUNT_STATEMENT_FILE = 'ACCOUNT_STATEMENT_FILE';
    const FEATURES_ACCOUNT_SCHEDULED_PAYMENTS = 'ACCOUNT_SCHEDULED_PAYMENTS';
    const FEATURES_ACCOUNT_DIRECT_DEBITS = 'ACCOUNT_DIRECT_DEBITS';
    const FEATURES_ACCOUNT_PERIODIC_PAYMENTS = 'ACCOUNT_PERIODIC_PAYMENTS';
    const FEATURES_ACCOUNT_TRANSACTIONS_WITH_MERCHANT = 'ACCOUNT_TRANSACTIONS_WITH_MERCHANT';
    const FEATURES_IDENTITY = 'IDENTITY';
    const FEATURES_INITIATE_SINGLE_PAYMENT_SORTCODE = 'INITIATE_SINGLE_PAYMENT_SORTCODE';
    const FEATURES_EXISTING_PAYMENT_INITIATION_DETAILS = 'EXISTING_PAYMENT_INITIATION_DETAILS';
    const FEATURES_CREATE_SINGLE_PAYMENT_SORTCODE = 'CREATE_SINGLE_PAYMENT_SORTCODE';
    const FEATURES_EXISTING_PAYMENTS_DETAILS = 'EXISTING_PAYMENTS_DETAILS';
    const FEATURES_INITIATE_DOMESTIC_SINGLE_PAYMENT = 'INITIATE_DOMESTIC_SINGLE_PAYMENT';
    const FEATURES_CREATE_DOMESTIC_SINGLE_PAYMENT = 'CREATE_DOMESTIC_SINGLE_PAYMENT';
    const FEATURES_INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT = 'INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT';
    const FEATURES_CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT = 'CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT';
    const FEATURES_INITIATE_DOMESTIC_SCHEDULED_PAYMENT = 'INITIATE_DOMESTIC_SCHEDULED_PAYMENT';
    const FEATURES_CREATE_DOMESTIC_SCHEDULED_PAYMENT = 'CREATE_DOMESTIC_SCHEDULED_PAYMENT';
    const FEATURES_INITIATE_DOMESTIC_PERIODIC_PAYMENT = 'INITIATE_DOMESTIC_PERIODIC_PAYMENT';
    const FEATURES_CREATE_DOMESTIC_PERIODIC_PAYMENT = 'CREATE_DOMESTIC_PERIODIC_PAYMENT';
    const FEATURES_PERIODIC_PAYMENT_FREQUENCY_EXTENDED = 'PERIODIC_PAYMENT_FREQUENCY_EXTENDED';
    const FEATURES_INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT = 'INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT';
    const FEATURES_CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT = 'CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT';
    const FEATURES_INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT = 'INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT';
    const FEATURES_CREATE_INTERNATIONAL_SCHEDULED_PAYMENT = 'CREATE_INTERNATIONAL_SCHEDULED_PAYMENT';
    const FEATURES_INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER = 'INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER';
    const FEATURES_CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER = 'CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER';
    const FEATURES_INITIATE_INTERNATIONAL_SINGLE_PAYMENT = 'INITIATE_INTERNATIONAL_SINGLE_PAYMENT';
    const FEATURES_CREATE_INTERNATIONAL_SINGLE_PAYMENT = 'CREATE_INTERNATIONAL_SINGLE_PAYMENT';
    const FEATURES_TRANSFER = 'TRANSFER';
    const FEATURES_OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS = 'OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS';
    const FEATURES_OPEN_DATA_ATMS = 'OPEN_DATA_ATMS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentTypeAllowableValues()
    {
        return [
            self::ENVIRONMENT_TYPE_SANDBOX,
            self::ENVIRONMENT_TYPE_MOCK,
            self::ENVIRONMENT_TYPE_LIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCredentialsTypeAllowableValues()
    {
        return [
            self::CREDENTIALS_TYPE_OAUTH1,
            self::CREDENTIALS_TYPE_OAUTH2,
            self::CREDENTIALS_TYPE_OAUTH2_NOSECRET,
            self::CREDENTIALS_TYPE_OAUTH2_SIGNATURE,
            self::CREDENTIALS_TYPE_OPEN_BANKING,
            self::CREDENTIALS_TYPE_OPEN_BANKING_UK_MANUAL,
            self::CREDENTIALS_TYPE_OPEN_BANKING_UK_AUTO,
            self::CREDENTIALS_TYPE_OPEN_BANKING_IBM,
            self::CREDENTIALS_TYPE_OPEN_BANKING_AUTO,
            self::CREDENTIALS_TYPE_OPEN_BANKING_MANUAL,
            self::CREDENTIALS_TYPE_API_KEY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeaturesAllowableValues()
    {
        return [
            self::FEATURES_INITIATE_ACCOUNT_REQUEST,
            self::FEATURES_ACCOUNT_REQUEST_DETAILS,
            self::FEATURES_ACCOUNTS,
            self::FEATURES_ACCOUNT,
            self::FEATURES_ACCOUNT_TRANSACTIONS,
            self::FEATURES_ACCOUNT_STATEMENTS,
            self::FEATURES_ACCOUNT_STATEMENT,
            self::FEATURES_ACCOUNT_STATEMENT_FILE,
            self::FEATURES_ACCOUNT_SCHEDULED_PAYMENTS,
            self::FEATURES_ACCOUNT_DIRECT_DEBITS,
            self::FEATURES_ACCOUNT_PERIODIC_PAYMENTS,
            self::FEATURES_ACCOUNT_TRANSACTIONS_WITH_MERCHANT,
            self::FEATURES_IDENTITY,
            self::FEATURES_INITIATE_SINGLE_PAYMENT_SORTCODE,
            self::FEATURES_EXISTING_PAYMENT_INITIATION_DETAILS,
            self::FEATURES_CREATE_SINGLE_PAYMENT_SORTCODE,
            self::FEATURES_EXISTING_PAYMENTS_DETAILS,
            self::FEATURES_INITIATE_DOMESTIC_SINGLE_PAYMENT,
            self::FEATURES_CREATE_DOMESTIC_SINGLE_PAYMENT,
            self::FEATURES_INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT,
            self::FEATURES_CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT,
            self::FEATURES_INITIATE_DOMESTIC_SCHEDULED_PAYMENT,
            self::FEATURES_CREATE_DOMESTIC_SCHEDULED_PAYMENT,
            self::FEATURES_INITIATE_DOMESTIC_PERIODIC_PAYMENT,
            self::FEATURES_CREATE_DOMESTIC_PERIODIC_PAYMENT,
            self::FEATURES_PERIODIC_PAYMENT_FREQUENCY_EXTENDED,
            self::FEATURES_INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT,
            self::FEATURES_CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT,
            self::FEATURES_INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT,
            self::FEATURES_CREATE_INTERNATIONAL_SCHEDULED_PAYMENT,
            self::FEATURES_INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER,
            self::FEATURES_CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER,
            self::FEATURES_INITIATE_INTERNATIONAL_SINGLE_PAYMENT,
            self::FEATURES_CREATE_INTERNATIONAL_SINGLE_PAYMENT,
            self::FEATURES_TRANSFER,
            self::FEATURES_OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS,
            self::FEATURES_OPEN_DATA_ATMS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['environment_type'] = isset($data['environment_type']) ? $data['environment_type'] : null;
        $this->container['credentials_type'] = isset($data['credentials_type']) ? $data['credentials_type'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['monitoring'] = isset($data['monitoring']) ? $data['monitoring'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEnvironmentTypeAllowableValues();
        if (!is_null($this->container['environment_type']) && !in_array($this->container['environment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'environment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCredentialsTypeAllowableValues();
        if (!is_null($this->container['credentials_type']) && !in_array($this->container['credentials_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'credentials_type', must be one of '%s'",
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name full_name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Yapily\Model\Country[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Yapily\Model\Country[] $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets environment_type
     *
     * @return string
     */
    public function getEnvironmentType()
    {
        return $this->container['environment_type'];
    }

    /**
     * Sets environment_type
     *
     * @param string $environment_type environment_type
     *
     * @return $this
     */
    public function setEnvironmentType($environment_type)
    {
        $allowedValues = $this->getEnvironmentTypeAllowableValues();
        if (!is_null($environment_type) && !in_array($environment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environment_type'] = $environment_type;

        return $this;
    }

    /**
     * Gets credentials_type
     *
     * @return string
     */
    public function getCredentialsType()
    {
        return $this->container['credentials_type'];
    }

    /**
     * Sets credentials_type
     *
     * @param string $credentials_type credentials_type
     *
     * @return $this
     */
    public function setCredentialsType($credentials_type)
    {
        $allowedValues = $this->getCredentialsTypeAllowableValues();
        if (!is_null($credentials_type) && !in_array($credentials_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'credentials_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credentials_type'] = $credentials_type;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Yapily\Model\Media[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Yapily\Model\Media[] $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets features
     *
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[] $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $allowedValues = $this->getFeaturesAllowableValues();
        if (!is_null($features) && array_diff($features, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'features', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets monitoring
     *
     * @return map[string,\Yapily\Model\MonitoringFeatureStatus]
     */
    public function getMonitoring()
    {
        return $this->container['monitoring'];
    }

    /**
     * Sets monitoring
     *
     * @param map[string,\Yapily\Model\MonitoringFeatureStatus] $monitoring monitoring
     *
     * @return $this
     */
    public function setMonitoring($monitoring)
    {
        $this->container['monitoring'] = $monitoring;

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


