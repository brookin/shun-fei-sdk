<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Advertiser;


class AdvertiserRequest
{

//    public $AdvertiserId;

    public $UserName;

    public $SiteName;

    public $SiteUrl;

    public $Meno;

//    public $Contact;

//    public $Phone;

//    public $Address;

//    public $BrandName;

    public $Industry;

    public $Category;

//    public $AdxIds = [];

    /**
     * @var QualificationInfo[]
     */
    public $Qualifications;
}