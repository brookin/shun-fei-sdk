<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Adposition;


use Brookin\ShunFeiSDK\Response;

class AdpositionListResponse extends Response
{
    /**
     * @var AdpositionInfo[]
     */
    public $result = [];

    /**
     * @return AdpositionInfo[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param AdpositionInfo[] $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

}
