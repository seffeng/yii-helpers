<?php
/**
 * @link http://github.com/seffeng/
 * @copyright Copyright (c) 2017 seffeng
 */

namespace seffeng\helpers;

/**
 * Json is a helper class providing JSON data encoding and decoding.
 * It enhances the PHP built-in functions `json_encode()` and `json_decode()`
 * by supporting encoding JavaScript expressions and throwing exceptions when decoding fails.
 * @author Save.zxf <save.zxf@gmail.com>
 * @since 1.0
 */
class Json extends \yii\helpers\Json
{
    /**
     * Decodes the given JSON string into a PHP data structure.
     * @param string $json the JSON string to be decoded
     * @param boolean $asArray whether to return objects in terms of associative arrays.
     * @return mixed the PHP data
     */
    public static function decode($json, $asArray = true)
    {
        try {
            return parent::decode($json, $asArray);
        } catch (\Exception $e) {
            return $asArray ? [] : (new \stdClass());
        }
    }
}