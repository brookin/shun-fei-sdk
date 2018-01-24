<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:21 PM
 */

namespace Brookin\ShunFeiSDKTest;

use Brookin\ShunFeiSDK\Creative\Creative;
use Brookin\ShunFeiSDK\Creative\CreativeAddRequest;
use Brookin\ShunFeiSDK\Creative\CreativeAddResponse;
use Brookin\ShunFeiSDK\Creative\CreativeAudit;
use Brookin\ShunFeiSDK\Creative\CreativeAuditStatusRequest;
use Brookin\ShunFeiSDK\Creative\CreativeAuditStatusResponse;
use Brookin\ShunFeiSDK\Creative\CreativeRequest;
use Brookin\ShunFeiSDK\Creative\CreativeStatusRequest;
use Brookin\ShunFeiSDK\Creative\CreativeStatusResponse;
use Brookin\ShunFeiSDK\Creative\NativeInfo;

class CreativeTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new CreativeAddRequest();
        $response = new CreativeAddResponse();
        $creative = new CreativeRequest();

//        $creative->setCreativeId(0);

        $creative->setOCreativeId('aff1bb6965ba62ff843cb47b032b019b');
        $creative->setType(CreativeRequest::Type_IMAGE);
        $creative->setAdviewType(CreativeRequest::AdviewType_MOBILE);
        $creative->setAdBidType(CreativeRequest::AdBidType_RTB);
        $creative->setCreativeUrl('http://cdn.chinatvpay.com/BAAACeZAAAABaZAEnDtctpv_8.png');
        $creative->setAdm('');  // 动态创意

        $creative->setTargetUrl('http://www.chinatvpay.com');
//        $creative->setDownloadUrl([]);
        $creative->setDestinationUrl(['http://www.chinatvpay.com']);
        $creative->setLandType(CreativeRequest::LandType_BROWSER);
        $creative->setAppPackage('');
        $creative->setAppName('');

//        $creative->setTargetTrack([]);
        $creative->setMonitorUrls(array());

        $creative->setWidth(300);
        $creative->setHeight(250);

        // @todo native 需要创建规格时录入模版id
//        if ($creative->getType() === CreativeRequest::Type_NATIVE) {
//            $native = new NativeTemplateInfo();
//            $native->setTplId( $creativeSizeEntity->getCreativeSizeAttrsStruct()->getTemplateId() );
//
//            $nativeAsset = new NativeAssetInfo();
//            $nativeAsset->setImage()
//            $native->setNAssets();
//        }
        $creative->setNative(new NativeInfo());

        $creative->setAdvertiserId(326);
        $creative->setAdxIds([20009]);  // 20009 测试

        $request->setRequest([$creative]);

        $service = new Creative();
        $service->add($request, $response);

    }

    public function testStatus() {
        $request = new CreativeStatusRequest();
        $response = new CreativeStatusResponse();

        $creative = new CreativeAuditStatusRequest();
        $creative->setOCreativeIds(['c458e13fc1c55a37228ed1ca4f678b2e']);
        $request->setRequest($creative);

        $service = new Creative();
        $service->status($request, $response);

        print_r($request);
        print_r($response);
    }
}
