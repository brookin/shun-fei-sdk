<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class AssetInfo
{

    /**
     * @var int
     */
    public $Id;

    /**
     * @var TitleInfo
     */
    public $Title = [];

    /**
     * @var ImageInfo
     */
    public $Image;

    /**
     * @var DataInfo
     */
    public $Data;

    /**
     * @var LinkInfo
     */
    public $Link;

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
     * @return TitleInfo
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param TitleInfo $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return ImageInfo
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param ImageInfo $Image
     */
    public function setImage($Image)
    {
        $this->Image = $Image;
    }

    /**
     * @return DataInfo
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param DataInfo $Data
     */
    public function setData($Data)
    {
        $this->Data = $Data;
    }

    /**
     * @return LinkInfo
     */
    public function getLink()
    {
        return $this->Link;
    }

    /**
     * @param LinkInfo $Link
     */
    public function setLink($Link)
    {
        $this->Link = $Link;
    }

}