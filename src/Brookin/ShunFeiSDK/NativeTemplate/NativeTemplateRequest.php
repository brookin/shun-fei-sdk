<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeTemplateRequest
{
    /**
     * @var array
     */
    public $exchangeId = [];

    /**
     * @var int
     */
    public $page;

    /**
     * @return array
     */
    public function getExchangeId()
    {
        return $this->exchangeId;
    }

    /**
     * @param array $exchangeId
     */
    public function setExchangeId($exchangeId)
    {
        $this->exchangeId = $exchangeId;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }



}
