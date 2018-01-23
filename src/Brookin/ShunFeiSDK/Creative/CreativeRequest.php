<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class CreativeRequest
{
    const Type_IMAGE = 1;   // 图片创意
    const Type_FLASH = 2;   // flash 创意(swf)
    const Type_VIDEO = 3;   // 视频创意
    const Type_SNIPPET = 4; // 投放代码
    const Type_NATIVE = 5;  // 原生(图文创意);

    const AdviewType_PC = 1;        // PC Web流量、WAP流量， 默认值
    const AdviewType_MOBILE = 2;    // Mobile 流量

    const AdBidType_RTB = 0;        // RTB，默认值
    const AdBidType_PD = 1;         // Preferred Deals
    const AdBidType_PRIVATE = 2;    // Private Auction
    const AdBidType_PDB = 3;        // PDB

    const LandType_BROWSER = 0;     // 浏览器打开，调用 TargetUrl。
    const LandType_IOS = 1;         // iOS 跳转，调用 TargetUrl
    const LandType_ANDROID = 2;     // Android 下载，调用 DownloadUrl，触发点击监测 TargetTrack

    /**
     * @var int
     */
//    public $CreativeId;

    /**
     * @var string
     */
    public $OCreativeId;

    /**
     * @var int
     */
    public $Type;

    /**
     * @var int
     */
    public $AdviewType;

    /**
     * @var int
     */
    public $AdBidType;

    /**
     * @var string
     */
    public $CreativeUrl;

    /**
     * @var string
     */
    public $Adm;

    /**
     * @var int
     */
    public $LandType;

    /**
     * @var string
     */
    public $TargetUrl;

    /**
     * @var array
     */
    public $TargetTrack;

    /**
     * @var array
     */
    public $DownloadUrl;

    /**
     * @var array
     */
    public $DestinationUrl;

    /**
     * @var array
     */
    public $MonitorUrls;

    /**
     * @var int
     */
    public $Height;

    /**
     * @var int
     */
    public $Width;

    /**
     * @var NativeInfo
     */
    public $Native;

    /**
     * @var int
     */
    public $AdvertiserId;

    /**
     * @var array
     */
    public $AdxIds;

    /**
     * @var int
     */
    public $DealId;

    /**
     * @var int
     */
    public $Duration;

    /**
     * @var bool
     */
    public $ToggleSSL;

    /**
     * @var string
     */
    public $AppPackage;

    /**
     * @var string
     */
    public $AppName;

    /**
     * @var string
     */
    public $AppMd5;

    /**
     * @var int
     */
    public $AppVersionCode;

    /**
     * @var string
     */
    public $AppVersion;

    /**
     * @var int
     */
    public $AppSize;

    /**
     * @return int
     */
    public function getCreativeId()
    {
        return $this->CreativeId;
    }

    /**
     * @param int $CreativeId
     */
    public function setCreativeId($CreativeId)
    {
        $this->CreativeId = $CreativeId;
    }

    /**
     * @return string
     */
    public function getOCreativeId()
    {
        return $this->OCreativeId;
    }

    /**
     * @param string $OCreativeId
     */
    public function setOCreativeId($OCreativeId)
    {
        $this->OCreativeId = $OCreativeId;
    }

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
     * @return int
     */
    public function getAdviewType()
    {
        return $this->AdviewType;
    }

    /**
     * @param int $AdviewType
     */
    public function setAdviewType($AdviewType)
    {
        $this->AdviewType = $AdviewType;
    }

    /**
     * @return int
     */
    public function getAdBidType()
    {
        return $this->AdBidType;
    }

    /**
     * @param int $AdBidType
     */
    public function setAdBidType($AdBidType)
    {
        $this->AdBidType = $AdBidType;
    }

    /**
     * @return string
     */
    public function getCreativeUrl()
    {
        return $this->CreativeUrl;
    }

    /**
     * @param string $CreativeUrl
     */
    public function setCreativeUrl($CreativeUrl)
    {
        $this->CreativeUrl = $CreativeUrl;
    }

    /**
     * @return string
     */
    public function getAdm()
    {
        return $this->Adm;
    }

    /**
     * @param string $Adm
     */
    public function setAdm($Adm)
    {
        $this->Adm = $Adm;
    }

    /**
     * @return int
     */
    public function getLandType()
    {
        return $this->LandType;
    }

    /**
     * @param int $LandType
     */
    public function setLandType($LandType)
    {
        $this->LandType = $LandType;
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->TargetUrl;
    }

    /**
     * @param string $TargetUrl
     */
    public function setTargetUrl($TargetUrl)
    {
        $this->TargetUrl = $TargetUrl;
    }

    /**
     * @return array
     */
    public function getTargetTrack()
    {
        return $this->TargetTrack;
    }

    /**
     * @param array $TargetTrack
     */
    public function setTargetTrack($TargetTrack)
    {
        $this->TargetTrack = $TargetTrack;
    }

    /**
     * @return array
     */
    public function getDownloadUrl()
    {
        return $this->DownloadUrl;
    }

    /**
     * @param array $DownloadUrl
     */
    public function setDownloadUrl($DownloadUrl)
    {
        $this->DownloadUrl = $DownloadUrl;
    }

    /**
     * @return array
     */
    public function getDestinationUrl()
    {
        return $this->DestinationUrl;
    }

    /**
     * @param array $DestinationUrl
     */
    public function setDestinationUrl($DestinationUrl)
    {
        $this->DestinationUrl = $DestinationUrl;
    }

    /**
     * @return array
     */
    public function getMonitorUrls()
    {
        return $this->MonitorUrls;
    }

    /**
     * @param array $MonitorUrls
     */
    public function setMonitorUrls($MonitorUrls)
    {
        $this->MonitorUrls = $MonitorUrls;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
    }

    /**
     * @return NativeInfo
     */
    public function getNative()
    {
        return $this->Native;
    }

    /**
     * @param NativeInfo $Native
     */
    public function setNative($Native)
    {
        $this->Native = $Native;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->AdvertiserId;
    }

    /**
     * @param int $AdvertiserId
     */
    public function setAdvertiserId($AdvertiserId)
    {
        $this->AdvertiserId = $AdvertiserId;
    }

    /**
     * @return array
     */
    public function getAdxIds()
    {
        return $this->AdxIds;
    }

    /**
     * @param array $AdxIds
     */
    public function setAdxIds($AdxIds)
    {
        $this->AdxIds = $AdxIds;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
        return $this->DealId;
    }

    /**
     * @param int $DealId
     */
    public function setDealId($DealId)
    {
        $this->DealId = $DealId;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * @param int $Duration
     */
    public function setDuration($Duration)
    {
        $this->Duration = $Duration;
    }

    /**
     * @return boolean
     */
    public function isToggleSSL()
    {
        return $this->ToggleSSL;
    }

    /**
     * @param boolean $ToggleSSL
     */
    public function setToggleSSL($ToggleSSL)
    {
        $this->ToggleSSL = $ToggleSSL;
    }

    /**
     * @return string
     */
    public function getAppPackage()
    {
        return $this->AppPackage;
    }

    /**
     * @param string $AppPackage
     */
    public function setAppPackage($AppPackage)
    {
        $this->AppPackage = $AppPackage;
    }

    /**
     * @return string
     */
    public function getAppName()
    {
        return $this->AppName;
    }

    /**
     * @param string $AppName
     */
    public function setAppName($AppName)
    {
        $this->AppName = $AppName;
    }

    /**
     * @return string
     */
    public function getAppMd5()
    {
        return $this->AppMd5;
    }

    /**
     * @param string $AppMd5
     */
    public function setAppMd5($AppMd5)
    {
        $this->AppMd5 = $AppMd5;
    }

    /**
     * @return int
     */
    public function getAppVersionCode()
    {
        return $this->AppVersionCode;
    }

    /**
     * @param int $AppVersionCode
     */
    public function setAppVersionCode($AppVersionCode)
    {
        $this->AppVersionCode = $AppVersionCode;
    }

    /**
     * @return string
     */
    public function getAppVersion()
    {
        return $this->AppVersion;
    }

    /**
     * @param string $AppVersion
     */
    public function setAppVersion($AppVersion)
    {
        $this->AppVersion = $AppVersion;
    }

    /**
     * @return int
     */
    public function getAppSize()
    {
        return $this->AppSize;
    }

    /**
     * @param int $AppSize
     */
    public function setAppSize($AppSize)
    {
        $this->AppSize = $AppSize;
    }

}
