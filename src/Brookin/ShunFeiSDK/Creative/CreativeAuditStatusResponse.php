<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class CreativeAuditStatusResponse
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var int
     */
    public $subErrCode;

    /**
     * @var AuditStatusInfo
     */
    public $result = [];

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return int
     */
    public function getSubErrCode()
    {
        return $this->subErrCode;
    }

    /**
     * @param int $subErrCode
     */
    public function setSubErrCode($subErrCode)
    {
        $this->subErrCode = $subErrCode;
    }

    /**
     * @return AuditStatusInfo
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param AuditStatusInfo $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }


}


