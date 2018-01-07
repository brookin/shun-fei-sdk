<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class CreativeAuditStatusRequest
{
    /**
     * @var array
     */
    public $OCreativeIds = [];

    /**
     * @return array
     */
    public function getOCreativeIds()
    {
        return $this->OCreativeIds;
    }

    /**
     * @param array $OCreativeIds
     */
    public function setOCreativeIds($OCreativeIds)
    {
        $this->OCreativeIds = $OCreativeIds;
    }

}

