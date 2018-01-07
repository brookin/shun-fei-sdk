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
use Brookin\ShunFeiSDK\Creative\CreativeRequest;

class CreativeTest extends \PHPUnit_Framework_TestCase
{

    public function testAdd() {
        $request = new CreativeAddRequest();
        $response = new CreativeAddResponse();
        $creativeRequest = new CreativeRequest();

        $request->request[] = $creativeRequest;

        $service = new Creative();
        $service->add($request, $response);
    }
}
