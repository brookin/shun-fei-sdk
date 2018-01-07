<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


use Brookin\ShunFeiSDK\Request;

class NativeTemplateListRequest extends Request
{

    /**
     * @var NativeTemplateRequest
     */
    public $request;

    /**
     * @return NativeTemplateRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param NativeTemplateRequest $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }


}