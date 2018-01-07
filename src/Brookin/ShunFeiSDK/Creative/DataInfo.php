<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class DataInfo
{

    const Type_AD_DESCRIPTION = 2;      // 广告描述。
    const Type_PRODUCT_RANK = 3;        // 产品评级。比如一般 app 在 APP Store 的评级为 0-5。
    const Type_PRODUCT_LINKE = 4;       // 产品喜欢人数。
    const Type_PRODUCT_DOWNLOAD = 5;    // 产品下载或者安装数。
    const Type_TEL = 8;                 // 联系电话。
    const Type_PRODUCT_DESCRIPTION = 10;// 产品的附加描述。
    const Type_DESTINATION_TITLE = 12;  // 落地页标题/触发按钮描述。
    const Type_SHARE_INFO = 13;         // 分享语。
    const Type_SUB_TITLE = 14;          // 子标题。
    const Type_AD_SOURCE = 15;          // 广告来源。
    const Type_APP_NAME = 16;           // 应用名称。
    const Type_APP_TYPE = 17;           // 应用类型，Android/iOS
    const Type_DOWNLOAD_URL = 18;       // 应用下载地址。
    const Type_ITUNES_ID = 19;          // iTunes ID
    const Type_PACKAGE_NAME = 20;       // 应用包名。
    const Type_PRODUCT_SALES = 21;      // 产品销量。
    const Type_PRODUCT_PRICE = 22;      // 产品价格。
    const Type_PRODUCT_DISCOUNT = 23;   // 产品折扣价格。
    const Type_GEO_LOCAITON = 24;       // 地理位置。
    const Type_DOWNLOAD_TITLE = 25;     // 下载通知标题。
    const Type_DOWNLOAD_NOTIFICATION = 26;      // 下载通知描述。
    const Type_DOWNLOAD_START_REPORT = 27;      // 开始下载上报地址。
    const Type_DOWNLOAD_COMPLETE_REPORT = 28;   // 下载完成上报地址。
    const Type_INSTALL_COMPLETE_REPORT = 29;    // 安装完成上报地址。

    /**
     * @var int
     */
    public $Type;

    /**
     * @var string
     */
    public $Value;

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
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
    }

}