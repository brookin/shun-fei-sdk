<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


use Brookin\ShunFeiSDK\Response;

class NativeTemplateListResponse extends Response
{
    /**
     * @var NativeTemplateList
     */
    public $result = [];

    /**
     * @return NativeTemplateList
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param NativeTemplateList $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }


}
