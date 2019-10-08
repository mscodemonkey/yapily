<?php
/**
 * Consent
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
 * Consent Class Doc Comment
 *
 * @category Class
 * @package  Yapily
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Consent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Consent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'user_uuid' => 'string',
        'application_user_id' => 'string',
        'reference_id' => 'string',
        'institution_id' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime',
        'transaction_from' => '\DateTime',
        'transaction_to' => '\DateTime',
        'expires_at' => '\DateTime',
        'time_to_expire_in_millis' => 'int',
        'time_to_expire' => 'string',
        'feature_scope' => 'string[]',
        'consent_token' => 'string',
        'starts_at' => '\DateTime',
        'total_max_amount' => 'float',
        'max_amount_per_request' => 'float',
        'allow_overdraft' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'user_uuid' => null,
        'application_user_id' => null,
        'reference_id' => null,
        'institution_id' => null,
        'status' => null,
        'created_at' => 'date-time',
        'transaction_from' => 'date-time',
        'transaction_to' => 'date-time',
        'expires_at' => 'date-time',
        'time_to_expire_in_millis' => 'int64',
        'time_to_expire' => null,
        'feature_scope' => null,
        'consent_token' => null,
        'starts_at' => 'date-time',
        'total_max_amount' => null,
        'max_amount_per_request' => null,
        'allow_overdraft' => null
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
        'user_uuid' => 'userUuid',
        'application_user_id' => 'applicationUserId',
        'reference_id' => 'referenceId',
        'institution_id' => 'institutionId',
        'status' => 'status',
        'created_at' => 'createdAt',
        'transaction_from' => 'transactionFrom',
        'transaction_to' => 'transactionTo',
        'expires_at' => 'expiresAt',
        'time_to_expire_in_millis' => 'timeToExpireInMillis',
        'time_to_expire' => 'timeToExpire',
        'feature_scope' => 'featureScope',
        'consent_token' => 'consentToken',
        'starts_at' => 'startsAt',
        'total_max_amount' => 'totalMaxAmount',
        'max_amount_per_request' => 'maxAmountPerRequest',
        'allow_overdraft' => 'allowOverdraft'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_uuid' => 'setUserUuid',
        'application_user_id' => 'setApplicationUserId',
        'reference_id' => 'setReferenceId',
        'institution_id' => 'setInstitutionId',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'transaction_from' => 'setTransactionFrom',
        'transaction_to' => 'setTransactionTo',
        'expires_at' => 'setExpiresAt',
        'time_to_expire_in_millis' => 'setTimeToExpireInMillis',
        'time_to_expire' => 'setTimeToExpire',
        'feature_scope' => 'setFeatureScope',
        'consent_token' => 'setConsentToken',
        'starts_at' => 'setStartsAt',
        'total_max_amount' => 'setTotalMaxAmount',
        'max_amount_per_request' => 'setMaxAmountPerRequest',
        'allow_overdraft' => 'setAllowOverdraft'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_uuid' => 'getUserUuid',
        'application_user_id' => 'getApplicationUserId',
        'reference_id' => 'getReferenceId',
        'institution_id' => 'getInstitutionId',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'transaction_from' => 'getTransactionFrom',
        'transaction_to' => 'getTransactionTo',
        'expires_at' => 'getExpiresAt',
        'time_to_expire_in_millis' => 'getTimeToExpireInMillis',
        'time_to_expire' => 'getTimeToExpire',
        'feature_scope' => 'getFeatureScope',
        'consent_token' => 'getConsentToken',
        'starts_at' => 'getStartsAt',
        'total_max_amount' => 'getTotalMaxAmount',
        'max_amount_per_request' => 'getMaxAmountPerRequest',
        'allow_overdraft' => 'getAllowOverdraft'
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

    const STATUS_AWAITING_AUTHORIZATION = 'AWAITING_AUTHORIZATION';
    const STATUS_AWAITING_FURTHER_AUTHORIZATION = 'AWAITING_FURTHER_AUTHORIZATION';
    const STATUS_AWAITING_RE_AUTHORIZATION = 'AWAITING_RE_AUTHORIZATION';
    const STATUS_AUTHORIZED = 'AUTHORIZED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_REVOKED = 'REVOKED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_UNKNOWN = 'UNKNOWN';
    const FEATURE_SCOPE_INITIATE_ACCOUNT_REQUEST = 'INITIATE_ACCOUNT_REQUEST';
    const FEATURE_SCOPE_ACCOUNT_REQUEST_DETAILS = 'ACCOUNT_REQUEST_DETAILS';
    const FEATURE_SCOPE_ACCOUNTS = 'ACCOUNTS';
    const FEATURE_SCOPE_ACCOUNT = 'ACCOUNT';
    const FEATURE_SCOPE_ACCOUNT_TRANSACTIONS = 'ACCOUNT_TRANSACTIONS';
    const FEATURE_SCOPE_ACCOUNT_STATEMENTS = 'ACCOUNT_STATEMENTS';
    const FEATURE_SCOPE_ACCOUNT_STATEMENT = 'ACCOUNT_STATEMENT';
    const FEATURE_SCOPE_ACCOUNT_STATEMENT_FILE = 'ACCOUNT_STATEMENT_FILE';
    const FEATURE_SCOPE_ACCOUNT_SCHEDULED_PAYMENTS = 'ACCOUNT_SCHEDULED_PAYMENTS';
    const FEATURE_SCOPE_ACCOUNT_DIRECT_DEBITS = 'ACCOUNT_DIRECT_DEBITS';
    const FEATURE_SCOPE_ACCOUNT_PERIODIC_PAYMENTS = 'ACCOUNT_PERIODIC_PAYMENTS';
    const FEATURE_SCOPE_ACCOUNT_TRANSACTIONS_WITH_MERCHANT = 'ACCOUNT_TRANSACTIONS_WITH_MERCHANT';
    const FEATURE_SCOPE_IDENTITY = 'IDENTITY';
    const FEATURE_SCOPE_INITIATE_SINGLE_PAYMENT_SORTCODE = 'INITIATE_SINGLE_PAYMENT_SORTCODE';
    const FEATURE_SCOPE_EXISTING_PAYMENT_INITIATION_DETAILS = 'EXISTING_PAYMENT_INITIATION_DETAILS';
    const FEATURE_SCOPE_CREATE_SINGLE_PAYMENT_SORTCODE = 'CREATE_SINGLE_PAYMENT_SORTCODE';
    const FEATURE_SCOPE_EXISTING_PAYMENTS_DETAILS = 'EXISTING_PAYMENTS_DETAILS';
    const FEATURE_SCOPE_INITIATE_PAYMENT = 'INITIATE_PAYMENT';
    const FEATURE_SCOPE_CREATE_PAYMENT = 'CREATE_PAYMENT';
    const FEATURE_SCOPE_INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT = 'INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT';
    const FEATURE_SCOPE_CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT = 'CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT';
    const FEATURE_SCOPE_INITIATE_DOMESTIC_SCHEDULED_PAYMENT = 'INITIATE_DOMESTIC_SCHEDULED_PAYMENT';
    const FEATURE_SCOPE_CREATE_DOMESTIC_SCHEDULED_PAYMENT = 'CREATE_DOMESTIC_SCHEDULED_PAYMENT';
    const FEATURE_SCOPE_INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER = 'INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER';
    const FEATURE_SCOPE_CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER = 'CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER';
    const FEATURE_SCOPE_INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED = 'INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED';
    const FEATURE_SCOPE_CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED = 'CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED';
    const FEATURE_SCOPE_INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT = 'INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT';
    const FEATURE_SCOPE_CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT = 'CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT';
    const FEATURE_SCOPE_INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT = 'INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT';
    const FEATURE_SCOPE_CREATE_INTERNATIONAL_SCHEDULED_PAYMENT = 'CREATE_INTERNATIONAL_SCHEDULED_PAYMENT';
    const FEATURE_SCOPE_INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER = 'INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER';
    const FEATURE_SCOPE_CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER = 'CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER';
    const FEATURE_SCOPE_INITIATE_INTERNATIONAL_PAYMENT = 'INITIATE_INTERNATIONAL_PAYMENT';
    const FEATURE_SCOPE_CREATE_INTERNATIONAL_PAYMENT = 'CREATE_INTERNATIONAL_PAYMENT';
    const FEATURE_SCOPE_TRANSFER = 'TRANSFER';
    const FEATURE_SCOPE_OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS = 'OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS';
    const FEATURE_SCOPE_OPEN_DATA_ATMS = 'OPEN_DATA_ATMS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AWAITING_AUTHORIZATION,
            self::STATUS_AWAITING_FURTHER_AUTHORIZATION,
            self::STATUS_AWAITING_RE_AUTHORIZATION,
            self::STATUS_AUTHORIZED,
            self::STATUS_REJECTED,
            self::STATUS_REVOKED,
            self::STATUS_FAILED,
            self::STATUS_EXPIRED,
            self::STATUS_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeatureScopeAllowableValues()
    {
        return [
            self::FEATURE_SCOPE_INITIATE_ACCOUNT_REQUEST,
            self::FEATURE_SCOPE_ACCOUNT_REQUEST_DETAILS,
            self::FEATURE_SCOPE_ACCOUNTS,
            self::FEATURE_SCOPE_ACCOUNT,
            self::FEATURE_SCOPE_ACCOUNT_TRANSACTIONS,
            self::FEATURE_SCOPE_ACCOUNT_STATEMENTS,
            self::FEATURE_SCOPE_ACCOUNT_STATEMENT,
            self::FEATURE_SCOPE_ACCOUNT_STATEMENT_FILE,
            self::FEATURE_SCOPE_ACCOUNT_SCHEDULED_PAYMENTS,
            self::FEATURE_SCOPE_ACCOUNT_DIRECT_DEBITS,
            self::FEATURE_SCOPE_ACCOUNT_PERIODIC_PAYMENTS,
            self::FEATURE_SCOPE_ACCOUNT_TRANSACTIONS_WITH_MERCHANT,
            self::FEATURE_SCOPE_IDENTITY,
            self::FEATURE_SCOPE_INITIATE_SINGLE_PAYMENT_SORTCODE,
            self::FEATURE_SCOPE_EXISTING_PAYMENT_INITIATION_DETAILS,
            self::FEATURE_SCOPE_CREATE_SINGLE_PAYMENT_SORTCODE,
            self::FEATURE_SCOPE_EXISTING_PAYMENTS_DETAILS,
            self::FEATURE_SCOPE_INITIATE_PAYMENT,
            self::FEATURE_SCOPE_CREATE_PAYMENT,
            self::FEATURE_SCOPE_INITIATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT,
            self::FEATURE_SCOPE_CREATE_DOMESTIC_VARIABLE_RECURRING_PAYMENT,
            self::FEATURE_SCOPE_INITIATE_DOMESTIC_SCHEDULED_PAYMENT,
            self::FEATURE_SCOPE_CREATE_DOMESTIC_SCHEDULED_PAYMENT,
            self::FEATURE_SCOPE_INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER,
            self::FEATURE_SCOPE_CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER,
            self::FEATURE_SCOPE_INITIATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED,
            self::FEATURE_SCOPE_CREATE_DOMESTIC_PERIODIC_PAYMENT_ORDER_EXTENDED,
            self::FEATURE_SCOPE_INITIATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT,
            self::FEATURE_SCOPE_CREATE_INTERNATIONAL_VARIABLE_RECURRING_PAYMENT,
            self::FEATURE_SCOPE_INITIATE_INTERNATIONAL_SCHEDULED_PAYMENT,
            self::FEATURE_SCOPE_CREATE_INTERNATIONAL_SCHEDULED_PAYMENT,
            self::FEATURE_SCOPE_INITIATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER,
            self::FEATURE_SCOPE_CREATE_INTERNATIONAL_PERIODIC_PAYMENT_ORDER,
            self::FEATURE_SCOPE_INITIATE_INTERNATIONAL_PAYMENT,
            self::FEATURE_SCOPE_CREATE_INTERNATIONAL_PAYMENT,
            self::FEATURE_SCOPE_TRANSFER,
            self::FEATURE_SCOPE_OPEN_DATA_PERSONAL_CURRENT_ACCOUNTS,
            self::FEATURE_SCOPE_OPEN_DATA_ATMS,
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
        $this->container['user_uuid'] = isset($data['user_uuid']) ? $data['user_uuid'] : null;
        $this->container['application_user_id'] = isset($data['application_user_id']) ? $data['application_user_id'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['institution_id'] = isset($data['institution_id']) ? $data['institution_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['transaction_from'] = isset($data['transaction_from']) ? $data['transaction_from'] : null;
        $this->container['transaction_to'] = isset($data['transaction_to']) ? $data['transaction_to'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['time_to_expire_in_millis'] = isset($data['time_to_expire_in_millis']) ? $data['time_to_expire_in_millis'] : null;
        $this->container['time_to_expire'] = isset($data['time_to_expire']) ? $data['time_to_expire'] : null;
        $this->container['feature_scope'] = isset($data['feature_scope']) ? $data['feature_scope'] : null;
        $this->container['consent_token'] = isset($data['consent_token']) ? $data['consent_token'] : null;
        $this->container['starts_at'] = isset($data['starts_at']) ? $data['starts_at'] : null;
        $this->container['total_max_amount'] = isset($data['total_max_amount']) ? $data['total_max_amount'] : null;
        $this->container['max_amount_per_request'] = isset($data['max_amount_per_request']) ? $data['max_amount_per_request'] : null;
        $this->container['allow_overdraft'] = isset($data['allow_overdraft']) ? $data['allow_overdraft'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets user_uuid
     *
     * @return string
     */
    public function getUserUuid()
    {
        return $this->container['user_uuid'];
    }

    /**
     * Sets user_uuid
     *
     * @param string $user_uuid user_uuid
     *
     * @return $this
     */
    public function setUserUuid($user_uuid)
    {
        $this->container['user_uuid'] = $user_uuid;

        return $this;
    }

    /**
     * Gets application_user_id
     *
     * @return string
     */
    public function getApplicationUserId()
    {
        return $this->container['application_user_id'];
    }

    /**
     * Sets application_user_id
     *
     * @param string $application_user_id application_user_id
     *
     * @return $this
     */
    public function setApplicationUserId($application_user_id)
    {
        $this->container['application_user_id'] = $application_user_id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id reference_id
     *
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets institution_id
     *
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institution_id'];
    }

    /**
     * Sets institution_id
     *
     * @param string $institution_id institution_id
     *
     * @return $this
     */
    public function setInstitutionId($institution_id)
    {
        $this->container['institution_id'] = $institution_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets transaction_from
     *
     * @return \DateTime
     */
    public function getTransactionFrom()
    {
        return $this->container['transaction_from'];
    }

    /**
     * Sets transaction_from
     *
     * @param \DateTime $transaction_from transaction_from
     *
     * @return $this
     */
    public function setTransactionFrom($transaction_from)
    {
        $this->container['transaction_from'] = $transaction_from;

        return $this;
    }

    /**
     * Gets transaction_to
     *
     * @return \DateTime
     */
    public function getTransactionTo()
    {
        return $this->container['transaction_to'];
    }

    /**
     * Sets transaction_to
     *
     * @param \DateTime $transaction_to transaction_to
     *
     * @return $this
     */
    public function setTransactionTo($transaction_to)
    {
        $this->container['transaction_to'] = $transaction_to;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets time_to_expire_in_millis
     *
     * @return int
     */
    public function getTimeToExpireInMillis()
    {
        return $this->container['time_to_expire_in_millis'];
    }

    /**
     * Sets time_to_expire_in_millis
     *
     * @param int $time_to_expire_in_millis Deprecated. Use `timeToExpire` instead.
     *
     * @return $this
     */
    public function setTimeToExpireInMillis($time_to_expire_in_millis)
    {
        $this->container['time_to_expire_in_millis'] = $time_to_expire_in_millis;

        return $this;
    }

    /**
     * Gets time_to_expire
     *
     * @return string
     */
    public function getTimeToExpire()
    {
        return $this->container['time_to_expire'];
    }

    /**
     * Sets time_to_expire
     *
     * @param string $time_to_expire ISO 8601 duration
     *
     * @return $this
     */
    public function setTimeToExpire($time_to_expire)
    {
        $this->container['time_to_expire'] = $time_to_expire;

        return $this;
    }

    /**
     * Gets feature_scope
     *
     * @return string[]
     */
    public function getFeatureScope()
    {
        return $this->container['feature_scope'];
    }

    /**
     * Sets feature_scope
     *
     * @param string[] $feature_scope feature_scope
     *
     * @return $this
     */
    public function setFeatureScope($feature_scope)
    {
        $allowedValues = $this->getFeatureScopeAllowableValues();
        if (!is_null($feature_scope) && array_diff($feature_scope, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'feature_scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['feature_scope'] = $feature_scope;

        return $this;
    }

    /**
     * Gets consent_token
     *
     * @return string
     */
    public function getConsentToken()
    {
        return $this->container['consent_token'];
    }

    /**
     * Sets consent_token
     *
     * @param string $consent_token consent_token
     *
     * @return $this
     */
    public function setConsentToken($consent_token)
    {
        $this->container['consent_token'] = $consent_token;

        return $this;
    }

    /**
     * Gets starts_at
     *
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->container['starts_at'];
    }

    /**
     * Sets starts_at
     *
     * @param \DateTime $starts_at starts_at
     *
     * @return $this
     */
    public function setStartsAt($starts_at)
    {
        $this->container['starts_at'] = $starts_at;

        return $this;
    }

    /**
     * Gets total_max_amount
     *
     * @return float
     */
    public function getTotalMaxAmount()
    {
        return $this->container['total_max_amount'];
    }

    /**
     * Sets total_max_amount
     *
     * @param float $total_max_amount total_max_amount
     *
     * @return $this
     */
    public function setTotalMaxAmount($total_max_amount)
    {
        $this->container['total_max_amount'] = $total_max_amount;

        return $this;
    }

    /**
     * Gets max_amount_per_request
     *
     * @return float
     */
    public function getMaxAmountPerRequest()
    {
        return $this->container['max_amount_per_request'];
    }

    /**
     * Sets max_amount_per_request
     *
     * @param float $max_amount_per_request max_amount_per_request
     *
     * @return $this
     */
    public function setMaxAmountPerRequest($max_amount_per_request)
    {
        $this->container['max_amount_per_request'] = $max_amount_per_request;

        return $this;
    }

    /**
     * Gets allow_overdraft
     *
     * @return bool
     */
    public function getAllowOverdraft()
    {
        return $this->container['allow_overdraft'];
    }

    /**
     * Sets allow_overdraft
     *
     * @param bool $allow_overdraft allow_overdraft
     *
     * @return $this
     */
    public function setAllowOverdraft($allow_overdraft)
    {
        $this->container['allow_overdraft'] = $allow_overdraft;

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


