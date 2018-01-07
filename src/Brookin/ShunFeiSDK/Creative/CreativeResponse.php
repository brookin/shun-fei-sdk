<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class CreativeResponse
{
    /**
     * @var string
     * @value 'OCreativeID'
     */
    public $key;

    /**
     * @var UploadResultInfo
     */
    public $value;

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return UploadResultInfo
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param UploadResultInfo $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}
