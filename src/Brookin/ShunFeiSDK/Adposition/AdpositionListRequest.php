<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\Adposition;


use Brookin\ShunFeiSDK\Request;

class AdpositionListRequest extends Request
{

    /**
     * @var AdpositionRequest
     */
    public $request;

    /**
     * @return AdpositionRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param AdpositionRequest $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }


}