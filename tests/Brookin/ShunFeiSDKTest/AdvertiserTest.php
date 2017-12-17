<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:21 PM
 */

namespace Brookin\ShunFeiSDKTest;

use Brookin\ShunFeiSDK\Advertiser\Advertiser;
use Brookin\ShunFeiSDK\Advertiser\AdvertiserAddRequest;
use Brookin\ShunFeiSDK\Advertiser\AdvertiserAddResponse;
use Brookin\ShunFeiSDK\Advertiser\AdvertiserRequest;
use Brookin\ShunFeiSDK\Advertiser\QualificationInfo;

class AdvertiserTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new AdvertiserAddRequest();
        $response = new AdvertiserAddResponse();
        $advertiserRequest = new AdvertiserRequest();
        $qualification = new QualificationInfo();

        $advertiserRequest->UserName = 'test003UserName';
        $advertiserRequest->SiteName = 'test001SiteName';
        $advertiserRequest->SiteUrl = 'http://www.qq.com';
        $advertiserRequest->Industry = 1101013;
        $advertiserRequest->Category = 50001;
        $advertiserRequest->Meno = 'new test';

        $qualification->Name = '推广域名';
        $qualification->TypeId = 1023;
        $qualification->Text = 'http://www.qq.com';
        $advertiserRequest->Qualifications[] = $qualification;

        $request->request[] = $advertiserRequest;

        $service = new Advertiser();
        $service->add($request, $response);
    }
}
