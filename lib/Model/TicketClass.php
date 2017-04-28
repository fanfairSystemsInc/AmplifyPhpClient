<?php
/**
 * TicketClass
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * iQX Amplify API Reference
 *
 * Welcome to the iQX Amplify API reference. This is a live example of how you can use [iQX Amplify](http://app.iqxamplify.com/) to integrate your own e-commerce store or ticketing engine.  The iQX Amplify API is organized around the [REST](http://en.wikipedia.org/wiki/Representational_State_Transfer) mothodology, and it uses resource-oriented URLs, and common HTTP response codes to indicate API errors. All requests are authenticated using an `api-key` which can be obtained from your developer dashboard within iQX Amplify.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: development@iqxcorp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * TicketClass Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TicketClass implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TicketClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'ref_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'ticket_url' => 'string',
        'order' => 'float',
        'price' => 'float',
        'maximum_available' => 'float',
        'limit' => 'float',
        'tickets_purchased' => 'float',
        'availability' => '\Swagger\Client\Model\TicketClassAvailability',
        'modified_date' => '\DateTime',
        'user_id' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'ref_id' => 'ref_id',
        'name' => 'name',
        'description' => 'description',
        'ticket_url' => 'ticket_url',
        'order' => 'order',
        'price' => 'price',
        'maximum_available' => 'maximum_available',
        'limit' => 'limit',
        'tickets_purchased' => 'tickets_purchased',
        'availability' => 'availability',
        'modified_date' => 'modified_date',
        'user_id' => 'user_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'ref_id' => 'setRefId',
        'name' => 'setName',
        'description' => 'setDescription',
        'ticket_url' => 'setTicketUrl',
        'order' => 'setOrder',
        'price' => 'setPrice',
        'maximum_available' => 'setMaximumAvailable',
        'limit' => 'setLimit',
        'tickets_purchased' => 'setTicketsPurchased',
        'availability' => 'setAvailability',
        'modified_date' => 'setModifiedDate',
        'user_id' => 'setUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'ref_id' => 'getRefId',
        'name' => 'getName',
        'description' => 'getDescription',
        'ticket_url' => 'getTicketUrl',
        'order' => 'getOrder',
        'price' => 'getPrice',
        'maximum_available' => 'getMaximumAvailable',
        'limit' => 'getLimit',
        'tickets_purchased' => 'getTicketsPurchased',
        'availability' => 'getAvailability',
        'modified_date' => 'getModifiedDate',
        'user_id' => 'getUserId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ticket_url'] = isset($data['ticket_url']) ? $data['ticket_url'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['maximum_available'] = isset($data['maximum_available']) ? $data['maximum_available'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['tickets_purchased'] = isset($data['tickets_purchased']) ? $data['tickets_purchased'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Primary key
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ref_id
     * @return string
     */
    public function getRefId()
    {
        return $this->container['ref_id'];
    }

    /**
     * Sets ref_id
     * @param string $ref_id External systems reference id
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the ticket
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the ticket
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ticket_url
     * @return string
     */
    public function getTicketUrl()
    {
        return $this->container['ticket_url'];
    }

    /**
     * Sets ticket_url
     * @param string $ticket_url The URL to the ticket
     * @return $this
     */
    public function setTicketUrl($ticket_url)
    {
        $this->container['ticket_url'] = $ticket_url;

        return $this;
    }

    /**
     * Gets order
     * @return float
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param float $order The order in which the ticket should be listed
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price of the ticket
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets maximum_available
     * @return float
     */
    public function getMaximumAvailable()
    {
        return $this->container['maximum_available'];
    }

    /**
     * Sets maximum_available
     * @param float $maximum_available The maximum number of ticket allocation
     * @return $this
     */
    public function setMaximumAvailable($maximum_available)
    {
        $this->container['maximum_available'] = $maximum_available;

        return $this;
    }

    /**
     * Gets limit
     * @return float
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param float $limit The maximum number of tickets per customer
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets tickets_purchased
     * @return float
     */
    public function getTicketsPurchased()
    {
        return $this->container['tickets_purchased'];
    }

    /**
     * Sets tickets_purchased
     * @param float $tickets_purchased The number of tickets purchased for this ticket class
     * @return $this
     */
    public function setTicketsPurchased($tickets_purchased)
    {
        $this->container['tickets_purchased'] = $tickets_purchased;

        return $this;
    }

    /**
     * Gets availability
     * @return \Swagger\Client\Model\TicketClassAvailability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param \Swagger\Client\Model\TicketClassAvailability $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets modified_date
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     * @param \DateTime $modified_date Date last modified
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id Connected user id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


