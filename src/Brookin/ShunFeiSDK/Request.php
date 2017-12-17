<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:15 PM
 */

namespace Brookin\ShunFeiSDK;


class Request
{
    /**
     * @var AuthHeader
     */
    public $authHeader;

    public function __construct()
    {
        $this->authHeader = new AuthHeader();
    }
}