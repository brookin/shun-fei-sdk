<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class NativeInfo
{

    /**
     * @var int
     */
    public $TemplateID;

    /**
     * @var OpenRTBNativeInfo
     */
    public $OpenRTBNative;

    /**
     * @return int
     */
    public function getTemplateID()
    {
        return $this->TemplateID;
    }

    /**
     * @param int $TemplateID
     */
    public function setTemplateID($TemplateID)
    {
        $this->TemplateID = $TemplateID;
    }

    /**
     * @return OpenRTBNativeInfo
     */
    public function getOpenRTBNative()
    {
        return $this->OpenRTBNative;
    }

    /**
     * @param OpenRTBNativeInfo $OpenRTBNative
     */
    public function setOpenRTBNative($OpenRTBNative)
    {
        $this->OpenRTBNative = $OpenRTBNative;
    }

}