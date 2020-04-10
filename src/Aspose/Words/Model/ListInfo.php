<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ListInfo.php">
 *   Copyright (c) 2019 Aspose.Words for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */
/*
 * ListInfo
 */

namespace Aspose\Words\Model;

use \ArrayAccess;
use \Aspose\Words\ObjectSerializer;

/*
 * ListInfo
 *
 * @description Represents a single document list.
 */
class ListInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ListInfo";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'list_id' => 'int',
        'is_multi_level' => 'bool',
        'is_restart_at_each_section' => 'bool',
        'is_list_style_definition' => 'bool',
        'is_list_style_reference' => 'bool',
        'style' => '\Aspose\Words\Model\Style',
        'list_levels' => '\Aspose\Words\Model\ListLevels'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'list_id' => 'int32',
        'is_multi_level' => null,
        'is_restart_at_each_section' => null,
        'is_list_style_definition' => null,
        'is_list_style_reference' => null,
        'style' => null,
        'list_levels' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'list_id' => 'ListId',
        'is_multi_level' => 'IsMultiLevel',
        'is_restart_at_each_section' => 'IsRestartAtEachSection',
        'is_list_style_definition' => 'IsListStyleDefinition',
        'is_list_style_reference' => 'IsListStyleReference',
        'style' => 'Style',
        'list_levels' => 'ListLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_id' => 'setListId',
        'is_multi_level' => 'setIsMultiLevel',
        'is_restart_at_each_section' => 'setIsRestartAtEachSection',
        'is_list_style_definition' => 'setIsListStyleDefinition',
        'is_list_style_reference' => 'setIsListStyleReference',
        'style' => 'setStyle',
        'list_levels' => 'setListLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_id' => 'getListId',
        'is_multi_level' => 'getIsMultiLevel',
        'is_restart_at_each_section' => 'getIsRestartAtEachSection',
        'is_list_style_definition' => 'getIsListStyleDefinition',
        'is_list_style_reference' => 'getIsListStyleReference',
        'style' => 'getStyle',
        'list_levels' => 'getListLevels'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['is_multi_level'] = isset($data['is_multi_level']) ? $data['is_multi_level'] : null;
        $this->container['is_restart_at_each_section'] = isset($data['is_restart_at_each_section']) ? $data['is_restart_at_each_section'] : null;
        $this->container['is_list_style_definition'] = isset($data['is_list_style_definition']) ? $data['is_list_style_definition'] : null;
        $this->container['is_list_style_reference'] = isset($data['is_list_style_reference']) ? $data['is_list_style_reference'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['list_levels'] = isset($data['list_levels']) ? $data['list_levels'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /*
     * Gets list_id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /*
     * Sets list_id
     *
     * @param int $list_id Gets or sets the unique identifier of the list.
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /*
     * Gets is_multi_level
     *
     * @return bool
     */
    public function getIsMultiLevel()
    {
        return $this->container['is_multi_level'];
    }

    /*
     * Sets is_multi_level
     *
     * @param bool $is_multi_level Gets or sets a value indicating whether returns true when the list contains 9 levels; false when 1 level.
     *
     * @return $this
     */
    public function setIsMultiLevel($is_multi_level)
    {
        $this->container['is_multi_level'] = $is_multi_level;

        return $this;
    }

    /*
     * Gets is_restart_at_each_section
     *
     * @return bool
     */
    public function getIsRestartAtEachSection()
    {
        return $this->container['is_restart_at_each_section'];
    }

    /*
     * Sets is_restart_at_each_section
     *
     * @param bool $is_restart_at_each_section Gets or sets a value indicating whether specifies whether list should be restarted at each section. Default value is false.
     *
     * @return $this
     */
    public function setIsRestartAtEachSection($is_restart_at_each_section)
    {
        $this->container['is_restart_at_each_section'] = $is_restart_at_each_section;

        return $this;
    }

    /*
     * Gets is_list_style_definition
     *
     * @return bool
     */
    public function getIsListStyleDefinition()
    {
        return $this->container['is_list_style_definition'];
    }

    /*
     * Sets is_list_style_definition
     *
     * @param bool $is_list_style_definition Gets or sets a value indicating whether returns true if this list is a definition of a list style.
     *
     * @return $this
     */
    public function setIsListStyleDefinition($is_list_style_definition)
    {
        $this->container['is_list_style_definition'] = $is_list_style_definition;

        return $this;
    }

    /*
     * Gets is_list_style_reference
     *
     * @return bool
     */
    public function getIsListStyleReference()
    {
        return $this->container['is_list_style_reference'];
    }

    /*
     * Sets is_list_style_reference
     *
     * @param bool $is_list_style_reference Gets or sets a value indicating whether returns true if this list is a reference to a list style.
     *
     * @return $this
     */
    public function setIsListStyleReference($is_list_style_reference)
    {
        $this->container['is_list_style_reference'] = $is_list_style_reference;

        return $this;
    }

    /*
     * Gets style
     *
     * @return \Aspose\Words\Model\Style
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /*
     * Sets style
     *
     * @param \Aspose\Words\Model\Style $style style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /*
     * Gets list_levels
     *
     * @return \Aspose\Words\Model\ListLevels
     */
    public function getListLevels()
    {
        return $this->container['list_levels'];
    }

    /*
     * Sets list_levels
     *
     * @param \Aspose\Words\Model\ListLevels $list_levels list_levels
     *
     * @return $this
     */
    public function setListLevels($list_levels)
    {
        $this->container['list_levels'] = $list_levels;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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
