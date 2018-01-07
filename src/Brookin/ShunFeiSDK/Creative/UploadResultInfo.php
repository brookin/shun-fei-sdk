<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class UploadResultInfo
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var $CreativeRequest
     */
    public $result;

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
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }


}