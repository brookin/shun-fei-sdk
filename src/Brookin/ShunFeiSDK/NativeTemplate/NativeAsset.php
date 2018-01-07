<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeAssetInfo
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var bool
     */
    public $Required;

    /**
     * @var NativeImageInfo
     */
    public $Image;

    /**
     * @var NativeTitleInfo
     */
    public $Title;

    /**
     * @var NativeDataInfo
     */
    public $Data;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return boolean
     */
    public function isRequired()
    {
        return $this->Required;
    }

    /**
     * @param boolean $Required
     */
    public function setRequired($Required)
    {
        $this->Required = $Required;
    }

    /**
     * @return NativeImageInfo
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param NativeImageInfo $Image
     */
    public function setImage($Image)
    {
        $this->Image = $Image;
    }

    /**
     * @return NativeTitleInfo
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param NativeTitleInfo $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return NativeDataInfo
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param NativeDataInfo $Data
     */
    public function setData($Data)
    {
        $this->Data = $Data;
    }
}
