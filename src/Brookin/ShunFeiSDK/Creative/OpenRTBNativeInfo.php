<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class OpenRTBNativeInfo
{

    /**
     * @var LinkInfo
     */
    public $Link;

    /**
     * @var AssetsInfo[]
     */
    public $Assets = [];

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

    /**
     * @return AssetsInfo[]
     */
    public function getAssets()
    {
        return $this->Assets;
    }

    /**
     * @param AssetsInfo[] $Assets
     */
    public function setAssets($Assets)
    {
        $this->Assets = $Assets;
    }

}