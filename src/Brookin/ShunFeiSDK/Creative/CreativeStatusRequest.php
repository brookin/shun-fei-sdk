<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


use Brookin\ShunFeiSDK\Request;

class CreativeStatusRequest extends Request
{

    /**
     * @var CreativeAuditStatusRequest[]
     */
    public $request;

    /**
     * @return CreativeAuditStatusRequest[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param CreativeAuditStatusRequest[] $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

}