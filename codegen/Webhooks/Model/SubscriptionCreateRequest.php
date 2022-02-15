<?php
/**
 * SubscriptionCreateRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Webhooks
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Webhooks API
 *
 * Provides a way for apps to subscribe to certain change events in HubSpot. Once configured, apps will receive event payloads containing details about the changes at a specified target URL. There can only be one target URL for receiving event notifications per app.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Webhooks\Model;

use \ArrayAccess;
use \HubSpot\Client\Webhooks\ObjectSerializer;

/**
 * SubscriptionCreateRequest Class Doc Comment
 *
 * @category Class
 * @description New webhook settings for an app.
 * @package  HubSpot\Client\Webhooks
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubscriptionCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_type' => 'string',
        'property_name' => 'string',
        'active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_type' => null,
        'property_name' => null,
        'active' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'event_type' => 'eventType',
        'property_name' => 'propertyName',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_type' => 'setEventType',
        'property_name' => 'setPropertyName',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_type' => 'getEventType',
        'property_name' => 'getPropertyName',
        'active' => 'getActive'
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
        return self::$openAPIModelName;
    }

    const EVENT_TYPE_CONTACT_PROPERTY_CHANGE = 'contact.propertyChange';
    const EVENT_TYPE_COMPANY_PROPERTY_CHANGE = 'company.propertyChange';
    const EVENT_TYPE_DEAL_PROPERTY_CHANGE = 'deal.propertyChange';
    const EVENT_TYPE_TICKET_PROPERTY_CHANGE = 'ticket.propertyChange';
    const EVENT_TYPE_PRODUCT_PROPERTY_CHANGE = 'product.propertyChange';
    const EVENT_TYPE_LINE_ITEM_PROPERTY_CHANGE = 'line_item.propertyChange';
    const EVENT_TYPE_CONTACT_CREATION = 'contact.creation';
    const EVENT_TYPE_CONTACT_DELETION = 'contact.deletion';
    const EVENT_TYPE_CONTACT_PRIVACY_DELETION = 'contact.privacyDeletion';
    const EVENT_TYPE_COMPANY_CREATION = 'company.creation';
    const EVENT_TYPE_COMPANY_DELETION = 'company.deletion';
    const EVENT_TYPE_DEAL_CREATION = 'deal.creation';
    const EVENT_TYPE_DEAL_DELETION = 'deal.deletion';
    const EVENT_TYPE_TICKET_CREATION = 'ticket.creation';
    const EVENT_TYPE_TICKET_DELETION = 'ticket.deletion';
    const EVENT_TYPE_PRODUCT_CREATION = 'product.creation';
    const EVENT_TYPE_PRODUCT_DELETION = 'product.deletion';
    const EVENT_TYPE_LINE_ITEM_CREATION = 'line_item.creation';
    const EVENT_TYPE_LINE_ITEM_DELETION = 'line_item.deletion';
    const EVENT_TYPE_CONVERSATION_CREATION = 'conversation.creation';
    const EVENT_TYPE_CONVERSATION_DELETION = 'conversation.deletion';
    const EVENT_TYPE_CONVERSATION_NEW_MESSAGE = 'conversation.newMessage';
    const EVENT_TYPE_CONVERSATION_PRIVACY_DELETION = 'conversation.privacyDeletion';
    const EVENT_TYPE_CONVERSATION_PROPERTY_CHANGE = 'conversation.propertyChange';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_CONTACT_PROPERTY_CHANGE,
            self::EVENT_TYPE_COMPANY_PROPERTY_CHANGE,
            self::EVENT_TYPE_DEAL_PROPERTY_CHANGE,
            self::EVENT_TYPE_TICKET_PROPERTY_CHANGE,
            self::EVENT_TYPE_PRODUCT_PROPERTY_CHANGE,
            self::EVENT_TYPE_LINE_ITEM_PROPERTY_CHANGE,
            self::EVENT_TYPE_CONTACT_CREATION,
            self::EVENT_TYPE_CONTACT_DELETION,
            self::EVENT_TYPE_CONTACT_PRIVACY_DELETION,
            self::EVENT_TYPE_COMPANY_CREATION,
            self::EVENT_TYPE_COMPANY_DELETION,
            self::EVENT_TYPE_DEAL_CREATION,
            self::EVENT_TYPE_DEAL_DELETION,
            self::EVENT_TYPE_TICKET_CREATION,
            self::EVENT_TYPE_TICKET_DELETION,
            self::EVENT_TYPE_PRODUCT_CREATION,
            self::EVENT_TYPE_PRODUCT_DELETION,
            self::EVENT_TYPE_LINE_ITEM_CREATION,
            self::EVENT_TYPE_LINE_ITEM_DELETION,
            self::EVENT_TYPE_CONVERSATION_CREATION,
            self::EVENT_TYPE_CONVERSATION_DELETION,
            self::EVENT_TYPE_CONVERSATION_NEW_MESSAGE,
            self::EVENT_TYPE_CONVERSATION_PRIVACY_DELETION,
            self::EVENT_TYPE_CONVERSATION_PROPERTY_CHANGE,
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
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['property_name'] = $data['property_name'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
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
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Type of event to listen for. Can be one of `create`, `delete`, `deletedForPrivacy`, or `propertyChange`.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string|null $property_name The internal name of the property to monitor for changes. Only applies when `eventType` is `propertyChange`.
     *
     * @return self
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Determines if the subscription is active or paused. Defaults to false.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


