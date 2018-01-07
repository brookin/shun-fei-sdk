<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:17 PM
 */

namespace Brookin\ShunFeiSDK\Creative;

use Brookin\ShunFeiSDK\Client;

class Creative extends Client
{
    public function add(CreativeAddRequest $request, CreativeAddResponse $response) {
        $this->send(self::POST, '/creative/add', $request, $response);
    }

    public function update(CreativeUpdateRequest $request, CreativeUpdateResponse $response) {
        $this->send(self::POST, '/creative/update', $request, $response);
    }

    public function status(CreativeStatusRequest $request, CreativeStatusResponse $response) {
        $this->send(self::POST, '/creative/status', $request, $response);
    }
}