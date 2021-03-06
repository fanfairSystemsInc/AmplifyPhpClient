<?php
/**
 * ProductVariants
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
 * ProductVariants Class Doc Comment
 *
 * @category    Class
 * @description Product variants for a variable type product
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductVariants implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product_variants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributes' => '\Swagger\Client\Model\ProductAttributes[]',
        'created' => '\DateTime',
        'image_source_url' => 'string',
        'in_stock' => 'bool',
        'inventory_management' => 'string',
        'inventory_quantity' => 'string',
        'price' => 'float',
        'price_compare' => 'float',
        'product_ref_id' => 'string',
        'ref_id' => 'string',
        'sku' => 'string',
        'taxable' => 'bool',
        'title' => 'string',
        'updated' => '\DateTime',
        'visible' => 'bool',
        'weight' => 'float'
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
        'attributes' => 'attributes',
        'created' => 'created',
        'image_source_url' => 'image_source_url',
        'in_stock' => 'in_stock',
        'inventory_management' => 'inventory_management',
        'inventory_quantity' => 'inventory_quantity',
        'price' => 'price',
        'price_compare' => 'price_compare',
        'product_ref_id' => 'product_ref_id',
        'ref_id' => 'ref_id',
        'sku' => 'sku',
        'taxable' => 'taxable',
        'title' => 'title',
        'updated' => 'updated',
        'visible' => 'visible',
        'weight' => 'weight'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'created' => 'setCreated',
        'image_source_url' => 'setImageSourceUrl',
        'in_stock' => 'setInStock',
        'inventory_management' => 'setInventoryManagement',
        'inventory_quantity' => 'setInventoryQuantity',
        'price' => 'setPrice',
        'price_compare' => 'setPriceCompare',
        'product_ref_id' => 'setProductRefId',
        'ref_id' => 'setRefId',
        'sku' => 'setSku',
        'taxable' => 'setTaxable',
        'title' => 'setTitle',
        'updated' => 'setUpdated',
        'visible' => 'setVisible',
        'weight' => 'setWeight'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'created' => 'getCreated',
        'image_source_url' => 'getImageSourceUrl',
        'in_stock' => 'getInStock',
        'inventory_management' => 'getInventoryManagement',
        'inventory_quantity' => 'getInventoryQuantity',
        'price' => 'getPrice',
        'price_compare' => 'getPriceCompare',
        'product_ref_id' => 'getProductRefId',
        'ref_id' => 'getRefId',
        'sku' => 'getSku',
        'taxable' => 'getTaxable',
        'title' => 'getTitle',
        'updated' => 'getUpdated',
        'visible' => 'getVisible',
        'weight' => 'getWeight'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['image_source_url'] = isset($data['image_source_url']) ? $data['image_source_url'] : null;
        $this->container['in_stock'] = isset($data['in_stock']) ? $data['in_stock'] : null;
        $this->container['inventory_management'] = isset($data['inventory_management']) ? $data['inventory_management'] : null;
        $this->container['inventory_quantity'] = isset($data['inventory_quantity']) ? $data['inventory_quantity'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_compare'] = isset($data['price_compare']) ? $data['price_compare'] : null;
        $this->container['product_ref_id'] = isset($data['product_ref_id']) ? $data['product_ref_id'] : null;
        $this->container['ref_id'] = isset($data['ref_id']) ? $data['ref_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
     * Gets attributes
     * @return \Swagger\Client\Model\ProductAttributes[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Swagger\Client\Model\ProductAttributes[] $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created The date that the product variant was created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets image_source_url
     * @return string
     */
    public function getImageSourceUrl()
    {
        return $this->container['image_source_url'];
    }

    /**
     * Sets image_source_url
     * @param string $image_source_url The URL to the variants image
     * @return $this
     */
    public function setImageSourceUrl($image_source_url)
    {
        $this->container['image_source_url'] = $image_source_url;

        return $this;
    }

    /**
     * Gets in_stock
     * @return bool
     */
    public function getInStock()
    {
        return $this->container['in_stock'];
    }

    /**
     * Sets in_stock
     * @param bool $in_stock If the variant is currently in stock
     * @return $this
     */
    public function setInStock($in_stock)
    {
        $this->container['in_stock'] = $in_stock;

        return $this;
    }

    /**
     * Gets inventory_management
     * @return string
     */
    public function getInventoryManagement()
    {
        return $this->container['inventory_management'];
    }

    /**
     * Sets inventory_management
     * @param string $inventory_management If inventory management is used for the variant
     * @return $this
     */
    public function setInventoryManagement($inventory_management)
    {
        $this->container['inventory_management'] = $inventory_management;

        return $this;
    }

    /**
     * Gets inventory_quantity
     * @return string
     */
    public function getInventoryQuantity()
    {
        return $this->container['inventory_quantity'];
    }

    /**
     * Sets inventory_quantity
     * @param string $inventory_quantity Inventory quantity for the variant
     * @return $this
     */
    public function setInventoryQuantity($inventory_quantity)
    {
        $this->container['inventory_quantity'] = $inventory_quantity;

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
     * @param float $price The price of the variant
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_compare
     * @return float
     */
    public function getPriceCompare()
    {
        return $this->container['price_compare'];
    }

    /**
     * Sets price_compare
     * @param float $price_compare The price compare for sale items
     * @return $this
     */
    public function setPriceCompare($price_compare)
    {
        $this->container['price_compare'] = $price_compare;

        return $this;
    }

    /**
     * Gets product_ref_id
     * @return string
     */
    public function getProductRefId()
    {
        return $this->container['product_ref_id'];
    }

    /**
     * Sets product_ref_id
     * @param string $product_ref_id The Products's external reference Id
     * @return $this
     */
    public function setProductRefId($product_ref_id)
    {
        $this->container['product_ref_id'] = $product_ref_id;

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
     * @param string $ref_id he variant's external reference Id
     * @return $this
     */
    public function setRefId($ref_id)
    {
        $this->container['ref_id'] = $ref_id;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Variant's sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable If the variant is taxable
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of tha variant
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param \DateTime $updated The date that the product variant was updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets visible
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     * @param bool $visible If the variant is visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets weight
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param float $weight The weight of the product Variant
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


