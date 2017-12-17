<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:17 PM
 */

namespace Brookin\ShunFeiSDK\Advertiser;

use Brookin\ShunFeiSDK\Client;

class Advertiser extends Client
{
    public function add(AdvertiserAddRequest $request, AdvertiserAddResponse $response) {
        $this->send(self::POST, '/advertiser/add', $request, $response);
    }
}