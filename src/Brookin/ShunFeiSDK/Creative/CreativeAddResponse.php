<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 4:18 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


use Brookin\ShunFeiSDK\Response;

class CreativeAddResponse extends Response
{
    /**
     * @var CreativeResponse[]
     */
    public $result;

    /**
     * @return CreativeResponse[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param CreativeResponse[] $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

}