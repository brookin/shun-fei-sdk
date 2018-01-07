<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class AuditStatusInfo
{
    const Status_DISAPPROVED = -2;  // 审核不通过
    const Status_PENDING = -1;      // 审核中
    const Status_WAITING = 0;       // 待审核
    const Status_APPROVED = 1;      // 审核通过
    const Status_UPLOADING = 3;     // 创意上传中

    /**
     * @var int
     */
    public $ExchangeId;

    /**
     * @var int
     */
    public $CreativeId;

    /**
     * @var int
     */
    public $Status;

    /**
     * @var string
     */
    public $Info;

    /**
     * @var int
     */
    public $Industry;

    /**
     * @var int
     */
    public $Category;

    /**
     * @var int
     * 创意级别。目前有 4 个等级:0、1、 2、3。
     * 0 或不返回表示创意还没审核评级。 1 为最高级，不受等级限制过滤。
     */
    public $Level;

    /**
     * @return int
     */
    public function getExchangeId()
    {
        return $this->ExchangeId;
    }

    /**
     * @param int $ExchangeId
     */
    public function setExchangeId($ExchangeId)
    {
        $this->ExchangeId = $ExchangeId;
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
        return $this->CreativeId;
    }

    /**
     * @param int $CreativeId
     */
    public function setCreativeId($CreativeId)
    {
        $this->CreativeId = $CreativeId;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param int $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param string $Info
     */
    public function setInfo($Info)
    {
        $this->Info = $Info;
    }

    /**
     * @return int
     */
    public function getIndustry()
    {
        return $this->Industry;
    }

    /**
     * @param int $Industry
     */
    public function setIndustry($Industry)
    {
        $this->Industry = $Industry;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param int $Category
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param int $Level
     */
    public function setLevel($Level)
    {
        $this->Level = $Level;
    }

}
