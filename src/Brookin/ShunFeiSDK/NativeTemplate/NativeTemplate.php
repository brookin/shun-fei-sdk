<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:17 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;

use Brookin\ShunFeiSDK\Client;

class NativeTemplate extends Client
{

    public function query(NativeTemplateListRequest $request, NativeTemplateListResponse $response) {
        $this->send(self::POST, '/native/list', $request, $response);
    }
}