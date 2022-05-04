<?php
/**
 * CennikItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  OptimaClientApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EcOptimaApi
 *
 * Proste Api do Optimy
 *
 * OpenAPI spec version: 1.0.0
 * Contact: you@your-company.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.32
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace OptimaClientApi\Model;

use \ArrayAccess;
use \OptimaClientApi\ObjectSerializer;

/**
 * CennikItem Class Doc Comment
 *
 * @category Class
 * @package  OptimaClientApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CennikItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CennikItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'cennik_id' => 'int',
'twr_id' => 'int',
'wartosc' => 'double',
'typ' => 'int',
'waluta' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'cennik_id' => 'int64',
'twr_id' => 'int64',
'wartosc' => 'double',
'typ' => null,
'waluta' => null    ];

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
'cennik_id' => 'CennikId',
'twr_id' => 'TwrId',
'wartosc' => 'Wartosc',
'typ' => 'Typ',
'waluta' => 'Waluta'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'cennik_id' => 'setCennikId',
'twr_id' => 'setTwrId',
'wartosc' => 'setWartosc',
'typ' => 'setTyp',
'waluta' => 'setWaluta'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'cennik_id' => 'getCennikId',
'twr_id' => 'getTwrId',
'wartosc' => 'getWartosc',
'typ' => 'getTyp',
'waluta' => 'getWaluta'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cennik_id'] = isset($data['cennik_id']) ? $data['cennik_id'] : null;
        $this->container['twr_id'] = isset($data['twr_id']) ? $data['twr_id'] : null;
        $this->container['wartosc'] = isset($data['wartosc']) ? $data['wartosc'] : null;
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
        $this->container['waluta'] = isset($data['waluta']) ? $data['waluta'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['cennik_id'] === null) {
            $invalidProperties[] = "'cennik_id' can't be null";
        }
        if ($this->container['twr_id'] === null) {
            $invalidProperties[] = "'twr_id' can't be null";
        }
        if ($this->container['wartosc'] === null) {
            $invalidProperties[] = "'wartosc' can't be null";
        }
        if ($this->container['typ'] === null) {
            $invalidProperties[] = "'typ' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cennik_id
     *
     * @return int
     */
    public function getCennikId()
    {
        return $this->container['cennik_id'];
    }

    /**
     * Sets cennik_id
     *
     * @param int $cennik_id cennik_id
     *
     * @return $this
     */
    public function setCennikId($cennik_id)
    {
        $this->container['cennik_id'] = $cennik_id;

        return $this;
    }

    /**
     * Gets twr_id
     *
     * @return int
     */
    public function getTwrId()
    {
        return $this->container['twr_id'];
    }

    /**
     * Sets twr_id
     *
     * @param int $twr_id twr_id
     *
     * @return $this
     */
    public function setTwrId($twr_id)
    {
        $this->container['twr_id'] = $twr_id;

        return $this;
    }

    /**
     * Gets wartosc
     *
     * @return double
     */
    public function getWartosc()
    {
        return $this->container['wartosc'];
    }

    /**
     * Sets wartosc
     *
     * @param double $wartosc wartosc
     *
     * @return $this
     */
    public function setWartosc($wartosc)
    {
        $this->container['wartosc'] = $wartosc;

        return $this;
    }

    /**
     * Gets typ
     *
     * @return int
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     *
     * @param int $typ typ
     *
     * @return $this
     */
    public function setTyp($typ)
    {
        $this->container['typ'] = $typ;

        return $this;
    }

    /**
     * Gets waluta
     *
     * @return string
     */
    public function getWaluta()
    {
        return $this->container['waluta'];
    }

    /**
     * Sets waluta
     *
     * @param string $waluta waluta
     *
     * @return $this
     */
    public function setWaluta($waluta)
    {
        $this->container['waluta'] = $waluta;

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