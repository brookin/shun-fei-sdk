<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class LinkInfo
{

    /**
     * @var string
     */
    public $Url;

    /**
     * @var array
     */
    public $Clicktrackers = [];

    /**
     * @var string
     */
    public $Deeplink;

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
     * @return array
     */
    public function getClicktrackers()
    {
        return $this->Clicktrackers;
    }

    /**
     * @param array $Clicktrackers
     */
    public function setClicktrackers($Clicktrackers)
    {
        $this->Clicktrackers = $Clicktrackers;
    }

    /**
     * @return string
     */
    public function getDeeplink()
    {
        return $this->Deeplink;
    }

    /**
     * @param string $Deeplink
     */
    public function setDeeplink($Deeplink)
    {
        $this->Deeplink = $Deeplink;
    }

}