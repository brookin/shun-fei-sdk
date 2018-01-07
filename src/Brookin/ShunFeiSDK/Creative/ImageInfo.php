<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class ImageInfo
{

    const Type_ICON = 1;
    const Type_LOGO = 2;
    const Type_MAIN = 3;  // 主图
    const Type_OTHER = 4;  // 其他

    /**
     * @var int
     */
    public $Type;

    /**
     * @var string
     */
    public $Url;

    /**
     * @var int
     */
    public $W;

    /**
     * @var int
     */
    public $H;

    /**
     * @var int
     */
    public $Size;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }

    /**
     * @return int
     */
    public function getW()
    {
        return $this->W;
    }

    /**
     * @param int $W
     */
    public function setW($W)
    {
        $this->W = $W;
    }

    /**
     * @return int
     */
    public function getH()
    {
        return $this->H;
    }

    /**
     * @param int $H
     */
    public function setH($H)
    {
        $this->H = $H;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
    }

}