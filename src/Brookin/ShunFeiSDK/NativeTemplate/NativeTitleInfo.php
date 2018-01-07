<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeTitleInfo
{
    /**
     * @var int
     */
    public $Len;

    /** @var string */
    public $Desec;

    /**
     * @return int
     */
    public function getLen()
    {
        return $this->Len;
    }

    /**
     * @param int $Len
     */
    public function setLen($Len)
    {
        $this->Len = $Len;
    }

    /**
     * @return string
     */
    public function getDesec()
    {
        return $this->Desec;
    }

    /**
     * @param string $Desec
     */
    public function setDesec($Desec)
    {
        $this->Desec = $Desec;
    }
}
