<?php
/**
 * Products
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
 * Products Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Products implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Products';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pagination' => '\Swagger\Client\Model\Pagination',
        'results' => '\Swagger\Client\Model\Product[]'
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
        'pagination' => 'pagination',
        'results' => 'results'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'results' => 'setResults'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'results' => 'getResults'
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
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
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
     * Gets pagination
     * @return \Swagger\Client\Model\Pagination
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     * @param \Swagger\Client\Model\Pagination $pagination
     * @return $this
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets results
     * @return \Swagger\Client\Model\Product[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     * @param \Swagger\Client\Model\Product[] $results Returned results
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

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

