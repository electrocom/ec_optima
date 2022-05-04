<?php
/**
 * IloscItem
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
 * IloscItem Class Doc Comment
 *
 * @category Class
 * @package  OptimaClientApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IloscItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IloscItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'twr_id' => 'int',
'mag_id' => 'int',
'data' => '\DateTime',
'ilosc' => 'double',
'wartosc' => 'double',
'braki' => 'double',
'rezerwacje' => 'double',
'zamowienia' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'twr_id' => 'int64',
'mag_id' => 'int64',
'data' => 'date-time',
'ilosc' => 'double',
'wartosc' => 'double',
'braki' => 'double',
'rezerwacje' => 'double',
'zamowienia' => 'double'    ];

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
'twr_id' => 'TwrId',
'mag_id' => 'MagId',
'data' => 'Data',
'ilosc' => 'Ilosc',
'wartosc' => 'Wartosc',
'braki' => 'Braki',
'rezerwacje' => 'Rezerwacje',
'zamowienia' => 'Zamowienia'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'twr_id' => 'setTwrId',
'mag_id' => 'setMagId',
'data' => 'setData',
'ilosc' => 'setIlosc',
'wartosc' => 'setWartosc',
'braki' => 'setBraki',
'rezerwacje' => 'setRezerwacje',
'zamowienia' => 'setZamowienia'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'twr_id' => 'getTwrId',
'mag_id' => 'getMagId',
'data' => 'getData',
'ilosc' => 'getIlosc',
'wartosc' => 'getWartosc',
'braki' => 'getBraki',
'rezerwacje' => 'getRezerwacje',
'zamowienia' => 'getZamowienia'    ];

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
        $this->container['twr_id'] = isset($data['twr_id']) ? $data['twr_id'] : null;
        $this->container['mag_id'] = isset($data['mag_id']) ? $data['mag_id'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['ilosc'] = isset($data['ilosc']) ? $data['ilosc'] : null;
        $this->container['wartosc'] = isset($data['wartosc']) ? $data['wartosc'] : null;
        $this->container['braki'] = isset($data['braki']) ? $data['braki'] : null;
        $this->container['rezerwacje'] = isset($data['rezerwacje']) ? $data['rezerwacje'] : null;
        $this->container['zamowienia'] = isset($data['zamowienia']) ? $data['zamowienia'] : null;
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
        if ($this->container['twr_id'] === null) {
            $invalidProperties[] = "'twr_id' can't be null";
        }
        if ($this->container['mag_id'] === null) {
            $invalidProperties[] = "'mag_id' can't be null";
        }
        if ($this->container['ilosc'] === null) {
            $invalidProperties[] = "'ilosc' can't be null";
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
     * Gets mag_id
     *
     * @return int
     */
    public function getMagId()
    {
        return $this->container['mag_id'];
    }

    /**
     * Sets mag_id
     *
     * @param int $mag_id mag_id
     *
     * @return $this
     */
    public function setMagId($mag_id)
    {
        $this->container['mag_id'] = $mag_id;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \DateTime $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets ilosc
     *
     * @return double
     */
    public function getIlosc()
    {
        return $this->container['ilosc'];
    }

    /**
     * Sets ilosc
     *
     * @param double $ilosc ilosc
     *
     * @return $this
     */
    public function setIlosc($ilosc)
    {
        $this->container['ilosc'] = $ilosc;

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
     * Gets braki
     *
     * @return double
     */
    public function getBraki()
    {
        return $this->container['braki'];
    }

    /**
     * Sets braki
     *
     * @param double $braki braki
     *
     * @return $this
     */
    public function setBraki($braki)
    {
        $this->container['braki'] = $braki;

        return $this;
    }

    /**
     * Gets rezerwacje
     *
     * @return double
     */
    public function getRezerwacje()
    {
        return $this->container['rezerwacje'];
    }

    /**
     * Sets rezerwacje
     *
     * @param double $rezerwacje rezerwacje
     *
     * @return $this
     */
    public function setRezerwacje($rezerwacje)
    {
        $this->container['rezerwacje'] = $rezerwacje;

        return $this;
    }

    /**
     * Gets zamowienia
     *
     * @return double
     */
    public function getZamowienia()
    {
        return $this->container['zamowienia'];
    }

    /**
     * Sets zamowienia
     *
     * @param double $zamowienia zamowienia
     *
     * @return $this
     */
    public function setZamowienia($zamowienia)
    {
        $this->container['zamowienia'] = $zamowienia;

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
