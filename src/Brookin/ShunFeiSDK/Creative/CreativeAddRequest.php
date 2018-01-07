<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


use Brookin\ShunFeiSDK\Request;

class CreativeAddRequest extends Request
{

    /**
     * @var CreativeRequest[]
     */
    public $request;

    /**
     * @return CreativeRequest[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param CreativeRequest[] $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

}