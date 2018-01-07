<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


use Brookin\ShunFeiSDK\Request;

class CreativeStatusResponse extends Request
{

    /**
     * @var CreativeAuditStatusResponse[]
     */
    public $result;

    /**
     * @return CreativeAuditStatusResponse[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param CreativeAuditStatusResponse[] $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

}