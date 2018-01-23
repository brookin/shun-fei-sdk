<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeTemplateList
{
    /**
     * @var int
     */
    public $Total;

    /**
     * @var NativeTemplateInfo[]
     */
    public $Records = [];

    /**
     * @return NativeTemplateInfo[]
     */
    public function getRecords()
    {
        return $this->Records;
    }

    /**
     * @param NativeTemplateInfo[] $Records
     */
    public function setRecords($Records)
    {
        $this->Records = $Records;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param int $Total
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
    }

}
