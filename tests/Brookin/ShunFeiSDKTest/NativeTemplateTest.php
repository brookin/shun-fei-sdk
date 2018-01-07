<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:21 PM
 */

namespace Brookin\ShunFeiSDKTest;

use Brookin\ShunFeiSDK\Adposition\Adposition;
use Brookin\ShunFeiSDK\Adposition\AdpositionListRequest;
use Brookin\ShunFeiSDK\Adposition\AdpositionListResponse;
use Brookin\ShunFeiSDK\Adposition\AdpositionRequest;
use Brookin\ShunFeiSDK\NativeTemplate\NativeTemplate;
use Brookin\ShunFeiSDK\NativeTemplate\NativeTemplateListRequest;
use Brookin\ShunFeiSDK\NativeTemplate\NativeTemplateListResponse;
use Brookin\ShunFeiSDK\NativeTemplate\NativeTemplateRequest;

class NativeTemplateTest extends \PHPUnit_Framework_TestCase
{

    public function testQuery() {
        $request = new NativeTemplateListRequest();
        $response = new NativeTemplateListResponse();
        $nativeTemplateRequest = new NativeTemplateRequest();

        $nativeTemplateRequest->setPage(0);
        $nativeTemplateRequest->setExchangeId(array(
            20009,  // 测试用的渠道
            20010,
            20017,
            20018,
            20026,
            20051,
            20057,
            30007,
            30011,
            30013,
            30014,
            30019,
            30030,
            30031,
            30039,
            30045,
            30046,
            30054,
            30059,
            30060,
            30061,
            30062,
            30063
        ));
        $request->setRequest($nativeTemplateRequest);

        $service = new NativeTemplate();
        $service->query($request, $response);
    }
}
