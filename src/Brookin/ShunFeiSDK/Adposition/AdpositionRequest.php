<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Adposition;


class AdpositionRequest
{
    /**
     * @var string
     * yyyy-mm-dd
     */
    public $date;

    /**
     * @var array
     */
    public $exchangeIds = [];

    /**
     * @var int
     */
    public $page;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return array
     */
    public function getExchangeIds()
    {
        return $this->exchangeIds;
    }

    /**
     * @param array $exchangeIds
     */
    public function setExchangeIds($exchangeIds)
    {
        $this->exchangeIds = $exchangeIds;
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
