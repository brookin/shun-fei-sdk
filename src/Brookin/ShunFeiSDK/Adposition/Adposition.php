<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:17 PM
 */

namespace Brookin\ShunFeiSDK\Adposition;

use Brookin\ShunFeiSDK\Client;

class Adposition extends Client
{

    public function query(AdpositionListRequest $request, AdpositionListResponse $response) {
        $this->send(self::POST, '/adposition/list', $request, $response);
    }
}