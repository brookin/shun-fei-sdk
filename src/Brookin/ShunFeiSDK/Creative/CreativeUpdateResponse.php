<?php
/**
 * Created by PhpStorm.
 * Date: 12/15/17
 * Time: 6:14 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


use Brookin\ShunFeiSDK\Response;

class CreativeUpdateResponse extends Response
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