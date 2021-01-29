<?php
/**
 * IncludedFeeDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductFees;

use \ArrayAccess;
use \ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use \ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * IncludedFeeDetail Class Doc Comment
 *
 * @category Class
 * @description The type of fee, fee amount, and other details.
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncludedFeeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncludedFeeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fee_type' => 'string',
'fee_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType',
'fee_promotion' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType',
'tax_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType',
'final_fee' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fee_type' => null,
'fee_amount' => null,
'fee_promotion' => null,
'tax_amount' => null,
'final_fee' => null    ];

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
        'fee_type' => 'FeeType',
'fee_amount' => 'FeeAmount',
'fee_promotion' => 'FeePromotion',
'tax_amount' => 'TaxAmount',
'final_fee' => 'FinalFee'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fee_type' => 'setFeeType',
'fee_amount' => 'setFeeAmount',
'fee_promotion' => 'setFeePromotion',
'tax_amount' => 'setTaxAmount',
'final_fee' => 'setFinalFee'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_type' => 'getFeeType',
'fee_amount' => 'getFeeAmount',
'fee_promotion' => 'getFeePromotion',
'tax_amount' => 'getTaxAmount',
'final_fee' => 'getFinalFee'    ];

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
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['fee_promotion'] = isset($data['fee_promotion']) ? $data['fee_promotion'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['final_fee'] = isset($data['final_fee']) ? $data['final_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        if ($this->container['fee_amount'] === null) {
            $invalidProperties[] = "'fee_amount' can't be null";
        }
        if ($this->container['final_fee'] === null) {
            $invalidProperties[] = "'final_fee' can't be null";
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
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type The type of fee charged to a seller.
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType $fee_amount fee_amount
     *
     * @return $this
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets fee_promotion
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType
     */
    public function getFeePromotion()
    {
        return $this->container['fee_promotion'];
    }

    /**
     * Sets fee_promotion
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType $fee_promotion fee_promotion
     *
     * @return $this
     */
    public function setFeePromotion($fee_promotion)
    {
        $this->container['fee_promotion'] = $fee_promotion;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets final_fee
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType
     */
    public function getFinalFee()
    {
        return $this->container['final_fee'];
    }

    /**
     * Sets final_fee
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\MoneyType $final_fee final_fee
     *
     * @return $this
     */
    public function setFinalFee($final_fee)
    {
        $this->container['final_fee'] = $final_fee;

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